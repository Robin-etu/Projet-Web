<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

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
                'routes' => ['connexion', 'creer_compte'],
                'onglets' => ['Se connecter', 'Créer un compte']]);
        }
        else if ($auth > 0)
        {
            $userRepository = $em->getRepository('App\Entity\Utilisateur');
            $user = $userRepository->find($auth);

            if (is_null($user))
            {
                return $this->render('accueil/menu.html.twig', ['admin' => false, 'produits'=>$totalProduits,
                    'routes' => ['accueil_connexion', 'accueil_creer_compte'],
                    'onglets' => ['Se connecter', 'Créer un compte']]);
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
        $this->render('accueil/connexion.html.twig');
    }

    /**
     * @Route("/creercompte", name="accueil_creer_compte")
     */
    public function creerCompteAction() : Response
    {
        $this->render('accueil/connexion.html.twig');
    }

    /**
     * @Route("/deconnexion", name="accueil_deconnexion")
     */
    public function deconnexionAction() : Response
    {
        $this->addFlash('info', 'Déconnexion réussie');

        $this->redirectToRoute('accueil_index');
    }
}
