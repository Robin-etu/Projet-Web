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

class ProduitController extends AbstractController
{

    /**
     * @Route("/addProduit", name="ajouter_produit")
     */
    public function ajouterProduitAction(Request $request) : Response

    {   $em = $this->getDoctrine()->getManager();
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->add('Valider', SubmitType::class, ['label' => 'creer']);
        $form->add('Annuler', ResetType::class, ['label' => 'Annuler']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($produit);
            $em->flush();
            $this->addFlash('info', 'produit créé');
            return $this->redirectToRoute('lister_magasin');
        }
        else if ($form->isSubmitted())
        {
            $this->addFlash('info', 'erreur creation');
            $args = array('creationProduitForm' => $form->createView());
            return $this->render('produit/creation.html.twig', $args);
        }
            
        $args = array('creationProduitForm' => $form->createView());
        return $this->render('produit/creation.html.twig', $args);
    }


    /**
     * @Route("/listerMagasin", name="lister_magasin")
     */
    public function listerMagasinAction() : Response

    {   $em = $this->getDoctrine()->getManager();
        $produitRepository = $em->getRepository('App\Entity\Produit');
        $produits=$produitRepository->findAll();
        return $this->render('produit/list.html.twig',['produits'=>$produits]);
    }

   


}
