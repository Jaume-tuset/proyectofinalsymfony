<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PeixType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('nom', TextType::class)
->add('nomcientific', TextType::class)
->add('imatges',FileType::class,array('required' => false))
->add('informacio', TextType::class)
->add('save', SubmitType::class, array('label' => 'Enviar'));
}
}
?>