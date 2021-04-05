<?php

namespace App\Repository;

use App\Entity\Panier;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Panier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panier[]    findAll()
 * @method Panier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
    }

    // /**
    //  * @return Panier[] Returns an array of Panier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Panier
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByQuantiteTotale(){
        $em = $this->getDoctrine()->getManager();
        $query= 'SELECT im2021_produits.libelle, im2021_produits.prix,
                SUM(im2021_paniers.quantite) AS quantite_totale,
                SUM(im2021_paniers.quantite*prix) AS prix_total
                FROM im2021_paniers, im2021_produits
                WHERE im2021_produits.id = im2021_paniers.id;';
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
                   
    }

    public function findByPanierElements() : Response
    {
        $query= 'SELECT im2021_paniers.id,im2021_produits.libelle, im2021_produits.prix,
        SUM(im2021_paniers.quantite) AS quantite_totale,
        SUM(im2021_paniers.quantite*prix) AS prix_total
        FROM im2021_paniers, im2021_produits
        WHERE im2021_produits.id = im2021_paniers.id_produit
        GROUP BY im2021_produits.libelle;';

        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $paniers = $statement->fetchAll();

        return $paniers;
    }
}
