<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 05.08.18
 * Time: 22:55
 */

namespace AppBundle\Form;

use AppBundle\Entity\Auction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuctionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("title", TextType::class, ['label' => "Tytuł"])
            ->add("description", TextareaType::class, ["label" => 'Opis'])
            ->add("price", NumberType::class, ["label" => "Cena"])
            ->add("startingPrice", NumberType::class, ["label" => "Cena początkowa"])
            ->add("expiresAt",DateTimeType::class, ["label" => "Data zakończenia aukcji"])
            ->add("submit", SubmitType::class, ["label" => "Zapisz"])
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults(["data_class" => Auction::class]);
    }
}