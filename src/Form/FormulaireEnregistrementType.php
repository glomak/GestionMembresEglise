<?php

namespace App\Form;

use App\Entity\MembreEglise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireEnregistrementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('postnom')
            ->add('prenom')
            ->add('fonctionAssumee')
            ->add('sexe')
            ->add('EtatCivil')
            ->add('telephone')
            ->add('adresseAvenue')
            ->add('adresseNumero')
            ->add('adresseQuartier')
            ->add('adresseCommune')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MembreEglise::class,
        ]);
    }
}
