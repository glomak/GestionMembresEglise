<?php

namespace App\DataFixtures;

use App\Entity\MembreEglise;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MembreFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i <= 10; $i++){
            $membre = new MembreEglise();
            $membre -> setNom("nom numero $i")
                    -> setPostnom("postnom numero $i")
                    -> setPrenom("prenom numero $i")
                    -> setFonctionAssumee("fonction numero $i")
                    -> setSexe("sexe numero $i")
                    -> setEtatCivil("etat civil $i")
                    -> setTelephone($i)
                    -> setAdresseAvenue("avenu $i")
                    -> setAdresseNumero("numero $i")
                    -> setAdresseQuartier("quartier $i")
                    -> setAdresseCommune("commune $i")
                    -> setDateEnregistrement(new \DateTime());
                   
            $manager->persist($membre);

        }
        
        $manager->flush();
    }
}
