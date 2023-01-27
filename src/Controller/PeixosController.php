<?php

namespace App\Controller;

use App\Service\DadesPeixos;
use App\Entity\Peix;
use Doctrine\ORM\EntityManager;
use App\Repository\PeixRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PeixosController extends AbstractController{

    
    private $peixos;

    public function __construct($dadesPeixos){
        $this->peixos = $dadesPeixos->get();
    }

    #[Route('/peixos/recarrega/', name:'recarrega')]
    public function recarregaPeixos(ManagerRegistry $doctrine){

        $repositori = $doctrine->getRepository(Peix::class);
        $peixos = $repositori->findAll();
        //subir datos a la base de datos o eliminar con remove
        $entityManager = $doctrine->getManager();
        
        foreach ($peixos as $peix) {
            $entityManager->remove($peix);
        }
        
        foreach ($this->peixos as $peix) {
            $nouPeix = new Peix();
            $nouPeix->setNom($peix['nom']);
            $nouPeix->setNomCientific($peix['nomcientific']);
            $nouPeix->setImatges($peix['img']);
            $nouPeix->setInformacio($peix['informacio']);
            $entityManager->persist($nouPeix);
            
        }

        try {
            $entityManager->flush();    
        } catch (\Throwable $th) {
            return $this->render('inici.html.twig',array('peixos'=>$peixos));
        }
        return $this->render('inici.html.twig',array('peixos'=>$peixos));
        
    }


    #[Route('/peixos/eliminar/{nom}', name:'eliminar/',requirements:['codi'=>'\d+'])]
    public function eliminarPeixos(ManagerRegistry $doctrine,$nom){

        /*$repositori = $doctrine->getRepository(Peix::class);
        $peixos = $repositori->find($nom);
        $entityManager = $doctrine->getManager();

        foreach ($peixos as $peix) {
            $entityManager->remove($peix);
        }

        foreach ($this->peixos as $peix) {
            $nouPeix = new Peix();
            $nouPeix->setNom($peix['nom']);
            $nouPeix->setNomCientific($peix['nomcientific']);
            $nouPeix->setImatges($peix['img']);
            $nouPeix->setInformacio($peix['informacio']);
            $entityManager->persist($nouPeix);
            
        }


        try {
            $entityManager->flush();    
        } catch (\Exception $e) {
            return $this->render('inici.html.twig',array('peixos'=>$peixos));
        }
        return $this->render('inici.html.twig',array('peixos'=>$peixos));

        $em = $doctrine->getManager();
        $peixos = $em->getRepository(Peix::class)->find($nom);
        $em->remove($peixos);
        $em->flush();
        
        */
        
    }

    #[Route('/peixos/nou', name:'nou')]
    public function nouPeix(ManagerRegistry $doctrine){

        $error = null;
        $equip = new Equip();
        $formulari = $this->createForm(EquipNouType::class, $equip);

        $formulari->handleRequest($request);
        if ($formulari->isSubmitted() && $formulari->isValid()) {
            $fitxer = $formulari->get('imatge')->getData();
            if ($fitxer) { 
                $nomFitxer = "assets/img/equipos/".$fitxer->getClientOriginalName();
                $directori =
                $this->getParameter('kernel.project_dir')."/public/assets/img/equipos/";
            
                try {
                    $fitxer->move($directori,$nomFitxer);
                } catch (FileException $e) {
                    $error=$e->getMessage();
                    return $this->render('nou_equip.html.twig', array(
                    'formulari' => $formulari->createView(), "error"=>$error));
                }
            
                $equip->setImatge($nomFitxer); 
            
            } else {
                $equip->setImatge('assets/img/equipos/equipPerDefecte.jpeg');
            }
            
            $equip->setNom($formulari->get('nom')->getData());
            $equip->setCicle($formulari->get('cicle')->getData());
            $equip->setCurs($formulari->get('curs')->getData());
            $equip->setNota($formulari->get('nota')->getData());
            $entityManager = $doctrine->getManager();
            $entityManager->persist($equip);
            
            try{
                $entityManager->flush();
                return $this->redirectToRoute('inici');
            } catch (\Exception $e) {
                $error=$e->getMessage();
                return $this->render('nou_equip.html.twig', array(
                'formulari' => $formulari->createView(), "error"=>$error));
            }
        }else{
            return $this->render('nou_equip.html.twig',
            array('formulari' => $formulari->createView(),"error"=>$error));
        }

    }



}

?>