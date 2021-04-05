<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CreerCompteType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Entity\Utilisateur;

class UtilisateurController extends AbstractController
{
     /**
     * @Route("/creercompte", name="accueil_creer_compte")
     */
    public function creerCompteAction(Request $request) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = new Utilisateur();
        $form = $this->createForm(CreerCompteType::class, $utilisateur);
        $form->add('Valider', SubmitType::class, ['label' => 'creer']);
        $form->add('Annuler', ResetType::class, ['label' => 'Annuler']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($utilisateur);
            $em->flush();
            $this->addFlash('info', 'Nouvel Utilisateur créé');
            return $this->render('accueil/accueil.html.twig', ['nature'=>'client']);
        }
        else if ($form->isSubmitted())
        {
            $this->addFlash('info', 'erreur creation');
            $args = array('creationCompteForm' => $form->createView());
            return $this->render('utilisateur/creation.html.twig', $args);
        }
            
        $args = array('creationCompteForm' => $form->createView());
        return $this->render('utilisateur/creation.html.twig', $args);
        
    }


    /**
     * @Route("/editer", name="editer_profil")
     */
    public function editerProfilAction(Request $request) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurRepository = $em->getRepository('App:Utilisateur');
        $id = $this->getParameter('auth');
        $utilisateur = $utilisateurRepository->find($id);
        $form = $this->createForm(CreerCompteType::class, $utilisateur);
        $form->add('Modifier', SubmitType::class, ['label' => 'Modifier']);
        $form->add('Annuler', ResetType::class, ['label' => 'Annuler']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($utilisateur);
            $em->flush();
            $this->addFlash('info', 'Modification effectuée avec succès');
            return $this->redirectToRoute('lister_magasin');
        }
        else if ($form->isSubmitted())
        {
            $this->addFlash('info', 'erreur lors ded la modification');
            $args = array('creationCompteForm' => $form->createView());
            return $this->render('accueil/editer.html.twig', $args);
        }
            
        $args = array('creationCompteForm' => $form->createView());
        return $this->render('accueil/editer.html.twig', $args);
        
    }

    /**
     * @Route("/gererUtilisateur", name="gerer_utilisateur")
     */
    public function gererUtilisateurAction() : Response
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurRepository = $em->getRepository('App\Entity\Utilisateur');
        $utilisateurs=$utilisateurRepository->findAll();
        return $this->render('utilisateur/list.html.twig',['utilisateurs'=>$utilisateurs]);
    }
}
