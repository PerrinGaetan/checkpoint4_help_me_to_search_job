<?php

namespace App\Repository;

use App\Entity\JobOffer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JobOffer|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobOffer|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobOffer[]    findAll()
 * @method JobOffer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobOfferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobOffer::class);
    }

    /**
     * @return JobOffer[] Returns an array of JobOffer objects
     */
    public function findByFilter($data)
    {
        $job = "";
        $city = "";
        $contractType = "";
        if ($_POST['search_filter']) {
            if ($_POST['search_filter']['job']) {
                $job = $data->getJob();
            }
            if ($_POST['search_filter']['city']) {
                $city = $data->getCity();
            }
            if ($_POST['search_filter']['typeOfContract']) {
                $contractType = $data->getTypeOfContract();
            }
        }
        if (isset($_POST['myFilter'])) {
            if (null !== $data->getJob()) {
                $job = $data->getJob();
            }
            if (null !== $data->getCity()) {
                $city = $data->getCity();
            }
            if (null !== $data->getTypeOfContract()) {
                $contractType = $data->getTypeOfContract();
            }
        }

        return $this->createQueryBuilder('j')
            ->andWhere('j.job LIKE :job')
            ->andWhere('j.city LIKE :city')
            ->andWhere('j.contractType LIKE :contractType')
            ->setParameter('job', "%$job%")
            ->setParameter('city', "%$city%")
            ->setParameter('contractType', "%$contractType%")
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?JobOffer
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
