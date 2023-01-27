<?php
namespace App\Controller;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Jenssegers\Date\Date;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class UserController extends AbstractController
{
    
    #[Route('/user/nou/' ,name:'nou_usuari')]
    public function nou(ManagerRegistry $doctrine, Request $request, UserPasswordHasherInterface $passwordHasher)
    {
     
        $error=null;
        $usuari = new User();
        $formulari = $this->createFormBuilder($usuari)
        ->add('username', TextType::class)
        ->add('roles', HiddenType::class,['mapped' => false,'required' => false])
        ->add('password', PasswordType::class)
        ->add('save', SubmitType::class, array('label' => 'Enviar'))
        ->getForm();
        
        $formulari->handleRequest($request);
        if ($formulari->isSubmitted() && $formulari->isValid()) {
            $usuari->setCorreuElectronic($formulari->get('correuelectronic')->getData());
            $password=$formulari->get('password')->getData();
            
            $hashedPassword = $passwordHasher->hashPassword($usuari,$password);
            $usuari->setPassword($hashedPassword);
            $usuari->setRoles(["ROLE_USER"]);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($usuari);
            try{
            $entityManager->flush();
            return $this->redirectToRoute('usuari');

            }catch (\Exception $e) {

                $error=$e->getMessage();
        return $this->render('nou_usuari.html.twig', array(
            'formulari' => $formulari->createView(), "error"=>$error,"fechacompleta"=>$fechacompleta));

            }

        }else{
            return $this->render('nou_usuari.html.twig',
            array('formulari' => $formulari->createView(),"error"=>$error,"fechacompleta"=>$fechacompleta));
        }
    }

   
    }
    
    
    ?>