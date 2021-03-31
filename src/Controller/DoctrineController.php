<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/doctrine")
 */

class DoctrineController extends AbstractController
{
    /**
     * @Route("/ajouterendur", name="doctrine_ajouterEnDur")
     */
    public function ajouterEnDurAction() : Response
    {
        $em = $this->getDoctrine()->getManager();

        $admin = new Utilisateur();
        $admin->setLogin('admin')
            ->setMotDePasse('nimda')
            ->setIsAdmin(true);
        $em->persist($admin);

        $gilles = new Utilisateur();
        $d1 = new \DateTime();
        $d1->setDate(2001, 01,01);

        $gilles->setLogin('gilles')
            ->setMotDePasse('sellig')
            ->setNom('Subrenat')
            ->setPrenom('Gilles')
            ->setAnniversaire($d1);
        $em->persist($gilles);

        $rita = new Utilisateur();
        $d2 = new \DateTime();
        $d2->setDate(2001, 01,02);

        $rita->setLogin('rita')
            ->setMotDePasse('atir')
            ->setNom('Zrour')
            ->setPrenom('Rita')
            ->setAnniversaire($d2);
        $em->persist($rita);

        $em->flush();

        return new Response('<body>Ajout des 3 utilisateurs donnés dans le sujet</body>');
    }
}
