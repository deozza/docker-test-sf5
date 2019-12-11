<?php

namespace App\Controller;

use App\Entity\DummyEntity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PifController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/dummy/new", name="post_dummy")
     */
    public function newDummy()
    {
        $dummy = new DummyEntity();
        $this->em->persist($dummy);
        $this->em->flush($dummy);

        return new Response(
            '<html><body>new dummy : '.$dummy->getId().'</body></html>'
        );

    }

    /**
     * @Route("/dummies", name="get_all_dummies")
     */
    public function listOfDummy()
    {
        $dummies = $this->em->getRepository(DummyEntity::class)->findAll();
        var_dump($dummies);
    }

    /**
     * @Route("/dummy/{id}", name="get_dummy")
     */
    public function getDummy(int $id)
    {
        $dummy = $this->em->getRepository(DummyEntity::class)->find($id);
        if(empty($dummy)) return new Response('<html><body>dummy not found.</body></html>');

        var_dump( $dummy);
    }
}