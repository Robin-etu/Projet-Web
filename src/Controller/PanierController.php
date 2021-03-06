<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Entity\Utilisateur;
use App\Entity\Panier;
use App\Form\ProduitType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PanierController extends AbstractController
{

    public function getPanierElements() 
    {
        //requete de selections des elements de la table panier avec jointures
        $query= 'SELECT im2021_paniers.id,im2021_produits.libelle, im2021_produits.prix,
        SUM(im2021_paniers.quantite) AS quantite_totale,
        SUM(im2021_paniers.quantite*prix) AS prix_total
        FROM im2021_paniers, im2021_produits
        WHERE im2021_produits.id = im2021_paniers.id_produit
        GROUP BY im2021_produits.libelle;';

        $em = $this->getDoctrine()->getManager();
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $paniers = $statement->fetchAll();

        return $paniers;
    }

     /**
     * @Route("/commanderProduit", name="commander_produit")
     */
    public function commanderProduitAction(Request $request) : Response
    {
        if($request->isMethod('post')){
            
            $posts = $request->request->all();
            $em = $this->getDoctrine()->getManager();

            $produitRepository = $em->getRepository('App\Entity\Produit');
            $utilisateurRepository = $em->getRepository('App\Entity\Utilisateur');
            $panierRepository = $em->getRepository('App\Entity\Panier');

            $idUtilisateur = $this->getParameter('auth');
            $utilisateur = $utilisateurRepository->find($idUtilisateur);

            foreach($posts['qteCommandee'] as $key => $value){
                $produit = $produitRepository->find($key);
              
                    $produit->setQuantite($produit->getQuantite() - $value);
                  
                        if($value!=0){
                            $utilisateurExist = $panierRepository->createQueryBuilder('a')
                            ->select('count(a.utilisateur)')
                            ->andWhere('a.utilisateur = :user')
                            ->andWhere('a.produit = :produit')
                            ->setParameter('user', $idUtilisateur)
                            ->setParameter('produit', $key)
                            ->getQuery()
                            ->getSingleScalarResult();

                            if($utilisateurExist>=1){
                                $panier = $panierRepository->findOneByUtilisateur(array('user' =>$idUtilisateur));
                                $panier->setQuantite($panier->getQuantite() + $value);
                                $em->persist($produit);
                                $em->persist($panier);
                                
                            }
                            else{
                                $panier = new Panier();
                                $panier->setProduit($produit);
                                $panier->setUtilisateur($utilisateur);
                                $panier->setQuantite($value);
                                $em->persist($produit);
                                $em->persist($panier);
                            }    
                        }
                 $em->flush();
            }
            
                
        
           // $paniers=$panierRepository->findByQuantiteTotale();            
            /*$libelle = $request->request->get("libelle");
            $prix = $request->request->get("prix");
            $quantite = $request->request->get("quantite");*/
         }

         $produits=$produitRepository->findAll();
        return $this->render('produit/list.html.twig',['produits'=>$produits]);
    }
    
        
    /**
     * @Route("/gererPanier", name="gerer_panier")
     */
    public function gererPanierAction(Request $request) : Response
    {
        $paniers = $this->getPanierElements();
        return $this->render('panier/panier.html.twig',['paniers'=>$paniers]);
    }
        
    /**
     * @Route("/validerPanier", name="valider_panier")
     */
    public function validerPanierAction(Request $request) : Response
    {
        if($request->isMethod('post')){
            
            $posts = $request->request->all();
            $em = $this->getDoctrine()->getManager();

            $produitRepository = $em->getRepository('App\Entity\Produit');
            $utilisateurRepository = $em->getRepository('App\Entity\Utilisateur');
            $panierRepository = $em->getRepository('App\Entity\Panier');

            $idUtilisateur = $this->getParameter('auth');
            $utilisateur = $utilisateurRepository->find($idUtilisateur);

            foreach($posts['qteCommandee'] as $key => $value){
                $produit = $produitRepository->find($key);
                $produit->setQuantite($produit->getQuantite() - $value);

                $panier = new Panier();
                $panier->setProduit($produit);
                $panier->setUtilisateur($utilisateur);
                $panier->setQuantite($value);

                $em->persist($produit);
                $em->persist($panier);
              
            }

            $em->flush();       
        
            
            
            /*$libelle = $request->request->get("libelle");
            $prix = $request->request->get("prix");
            $quantite = $request->request->get("quantite");*/
         }
         $paniers = $this->getPanierElements();
         return $this->render('panier/panier.html.twig',['paniers'=>$paniers]);
    }


    /**
     * @Route("/supprimerElementPanier/{id}", name="supprimer_element_panier")
     */
    public function supprimerElementPanierAction(Request $request,$id) : Response
    {
            $em = $this->getDoctrine()->getManager();
            $panierRepository = $em->getRepository('App\Entity\Panier');
            $produitRepository = $em->getRepository('App\Entity\Produit'); 
            $panier = $panierRepository->findOneById($id);
            $idProduit = $panier->getProduit();
            $produit = $produitRepository->findOneById($idProduit);
            $produit->setQuantite($produit->getQuantite() + $panier->getQuantite());

            $em->remove($panier);
            $em->flush();
            $paniers = $this->getPanierElements();
            return $this->render('panier/panier.html.twig',['paniers'=>$paniers]);
    }

    /**
     * @Route("/commanderPanier", name="commander_panier")
     */
    public function commanderPanierAction(Request $request)
       {   
        $idUtilisateur = $this->getParameter('auth');
        $query='DELETE FROM  \'im2021_paniers\' where id_utilisateur= '.$idUtilisateur.';';

        $em = $this->getDoctrine()->getManager();
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $paniers = $this->getPanierElements();
        return $this->render('panier/panier.html.twig',['paniers'=>$paniers]);
    }

    /**
     * @Route("/viderPanier", name="vider_panier")
     */
    public function viderPanierAction(Request $request) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $panierRepository = $em->getRepository('App\Entity\Panier');
        $produitRepository = $em->getRepository('App\Entity\Produit'); 
        $paniers = $panierRepository->findAll();

        foreach($paniers as $panier)
        {
            $idProduit = $panier->getProduit();
            $produit = $produitRepository->findOneById($idProduit);
            $produit->setQuantite($produit->getQuantite() + $panier->getQuantite());
            $em->persist($produit);
        }

            $em->flush();

        $idUtilisateur = $this->getParameter('auth');
        $query='DELETE FROM  \'im2021_paniers\' where id_utilisateur= '.$idUtilisateur.';';
        
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $paniers = $this->getPanierElements();
        return $this->render('panier/panier.html.twig',['paniers'=>$paniers]);
       
    }
}
