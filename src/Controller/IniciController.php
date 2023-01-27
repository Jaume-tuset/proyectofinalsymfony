<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Peix;

class IniciController extends AbstractController{

    #[Route('/' ,name:'inici')]
    public function inici(ManagerRegistry $doctrine)
    {
       $repositori = $doctrine->getRepository(Peix::class);
       $peixos = $repositori->findAll();
       return $this->render('inici.html.twig',array('peixos'=>$peixos));
    }

}

?>