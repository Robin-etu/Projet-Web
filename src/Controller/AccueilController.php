<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Form\CreerCompteType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil_index")
     */
    public function indexAction(): Response
    {
        $auth = $this->getParameter('auth');

        if ($auth == 0)
        {
            return $this->render('accueil/index.html.twig', ['nature'=>'anonyme']);
        }
        else if ($auth > 0)
        {
            $em = $this->getDoctrine()->getManager();
            $userRepository = $em->getRepository('App\Entity\Utilisateur');
            $user = $userRepository->find($auth);

            if (is_null($user))
            {
                return $this->render('accueil/index.html.twig', ['nature'=>'anonyme']);
            }
            else if ($user->getIsAdmin())
            {
                return $this->render('accueil/index.html.twig', ['nature'=>'administrateur']);
            }
            else
            {
                return $this->render('accueil/index.html.twig', ['nature'=>'client']);
            }
        }
        else
        {
            throw new NotFoundHttpException('Error indexAction : paramètre global d\'authentification incorrect.');
        }
    }

    public function menuAction() : Response
    {
        $em = $this->getDoctrine()->getManager();

        $produitRepository = $em->getRepository('App\Entity\Produit');
        $totalProduits = $produitRepository->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $auth = $this->getParameter('auth');

        if ($auth == 0)
        {
            return $this->render('accueil/menu.html.twig', ['admin' => false, 'produits'=>$totalProduits,
                'routes' => ['accueil_connexion', 'accueil_creer_compte','accueil'],
                'onglets' => ['Se connecter', 'Créer un compte','page d\'accueil']]);
        }
        else if ($auth > 0)
        {
            $userRepository = $em->getRepository('App\Entity\Utilisateur');
            $user = $userRepository->find($auth);

            if (is_null($user))
            {
                return $this->render('accueil/menu.html.twig', ['admin' => false, 'produits'=>$totalProduits,
                    'routes' => ['accueil_connexion', 'accueil_creer_compte','accueil'],
                    'onglets' => ['Se connecter', 'Créer un compte','page d\'accueil']]);
            }
            else if ($user->getIsAdmin())
            {
                return $this->render('accueil/menu.html.twig', ['admin' => true, 'produits'=>$totalProduits,
                    'routes' => ['accueil_deconnexion', 'gerer_utilisateur', 'ajouter_produit'],
                    'onglets' => ['Se déconnecter', 'Gérer les utilisateurs', 'Ajouter un produit dans la base']]);
            }
            else
            {
                return $this->render('accueil/menu.html.twig', ['admin' => false, 'produits'=>$totalProduits,
                    'routes' => ['accueil_deconnexion', 'editer_profil', 'lister_magasin', 'gerer_panier'],
                    'onglets' => ['Se déconnecter', 'Editer / Modifier son profil', 'Produits du magasin', 'Gérer son panier']]);
            }
        }
        else
        {
            throw new NotFoundHttpException('Error menuAction : paramètre global d\'authentification incorrect.');
        }
    }

    /**
     * @Route("/connexion", name="accueil_connexion")
     */
    public function connexionAction() : Response
    {
        return $this->render('accueil/connexion.html.twig');
    }

     /**
     * @Route("/accueil", name="accueil")
     */
    public function accueilAction() : Response
    {
        return $this->render('accueil/accueil.html.twig');
    }

    

    /**
     * @Route("/deconnexion", name="accueil_deconnexion")
     */
    public function deconnexionAction() : Response
    {        
        $em = $this->getDoctrine()->getManager();
        $utilisateurRepository = $em->getRepository('App:Utilisateur');
        $id = $this->getParameter('auth');
        $utilisateur = $utilisateurRepository->find($id);
        if($utilisateur->getIsAdmin())
            $nature='administrateur';
        else
            $nature='client';
        $this->addFlash('info', 'Déconnexion réussie');
        return $this->render('accueil/index.html.twig', ['nature'=>$nature]);
    }
}
