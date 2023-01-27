<?php

namespace App\Controller;

use App\Service\DadesPeixos;
use App\Entity\Peix;
use App\Form\PeixType;
use Doctrine\ORM\EntityManager;
use App\Repository\PeixRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
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


    #[Route('/peixos/eliminar/{nom}', name:'eliminar')]
    public function eliminarPeixos(ManagerRegistry $doctrine,$nom){

        $peixos = $doctrine->getRepository(Peix::class)->find($nom);
        $entityManager = $doctrine->getManager();

        $entityManager->remove($peixos);
        
        $entityManager->flush();
        return $this->render('inici.html.twig',array('peixos'=>$peixos));
        
        
    }

    #[Route('/peixos/nou', name:'nou_peix')]
    public function nouPeix(ManagerRegistry $doctrine,Request $request){

        $error = null;
        $peixNou = new Peix();
        $formulari = $this->createForm(PeixType::class, $peixNou);

        $formulari->handleRequest($request);
        if ($formulari->isSubmitted() && $formulari->isValid()) {
            $fitxer = $formulari->get('imatges')->getData();
            if ($fitxer) { 
                $nomFitxer = "imatges/".$fitxer->getClientOriginalName();
                $directori =
                $this->getParameter('kernel.project_dir')."/public/imatges/";
            
                try {
                    $fitxer->move($directori,$nomFitxer);
                } catch (FileException $e) {
                    $error=$e->getMessage();
                    return $this->render('nou_peix.html.twig', array(
                    'formulari' => $formulari->createView(), "error"=>$error));
                }
            
                $peixNou->setImatges($nomFitxer); 
            
            } 
            
            $peixNou->setNom($formulari->get('nom')->getData());
            $peixNou->setNomCientific($formulari->get('nomcientific')->getData());
            $peixNou->setInformacio($formulari->get('informacio')->getData());
            $entityManager = $doctrine->getManager();
            $entityManager->persist($peixNou);
            
            try{
                $entityManager->flush();
                return $this->redirectToRoute('inici');
            } catch (\Exception $e) {
                $error=$e->getMessage();
                return $this->render('nou_peix.html.twig', array(
                'formulari' => $formulari->createView(), "error"=>$error));
            }
        }else{
            return $this->render('nou_peix.html.twig',
            array('formulari' => $formulari->createView(),"error"=>$error));
        }

    }



}

?>