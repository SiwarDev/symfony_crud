<?php

namespace App\Form;

use App\Entity\Soutenance;
use App\Entity\Enseignant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class SoutenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numjury')
            ->add('dateSoutenance')
            ->add('note')
            ->add('enseignants',EntityType::class,array('class'=>Enseignant::class,'choice_label'=>'Matricule','choice_value'=>'Matricule'));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Soutenance::class,
        ]);
    }
}
