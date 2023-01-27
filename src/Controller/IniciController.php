<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/admin', name:'admin')]
    public function admin(){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        return new Response("Benvingut/da Admin" . $user->getUserIdentifier());
    }

}

?>