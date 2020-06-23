<?php

namespace App\Controller;

use App\Entity\MembreEglise;
use Doctrine\Persistence\ObjectManager;
use App\Form\FormulaireEnregistrementType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionMembresController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('gestion_membres/acceuil.html.twig');
    }

    /**
     * @Route("/gestion/membres/Apropos", name="page_apropos")
     */
    public function apropos()
    {
        return $this->render('gestion_membres/apropos.html.twig');
    }

    /**
     * @Route("/gestion/membres/Liste", name="liste_membre")
     */
    public function showMembres()
    {
        $repos = $this->getDoctrine()->getRepository(MembreEglise::class);

        $membres = $repos->findAll();

        return $this->render('gestion_membres/liste.html.twig',[
            'membres' => $membres
        ]);
    }

    /**
     * @Route("/gestion/membres/Formulaire", name="form_enregistrement")
     * @Route("/gestion/membres/edit/{id}", name="edit_membre" )
     */
    public function enregistrerEtUpdateMembres(MembreEglise $membre=null, Request $request, ObjectManager $manager)
    {
        if(!$membre){
            $membre = new MembreEglise();
        }

        $formulaire = $this->createForm(FormulaireEnregistrementType::class, $membre);
        $formulaire -> handleRequest($request);

        if ($formulaire -> isSubmitted() && $formulaire -> isvalid()){
            $membre -> setDateEnregistrement(new \DateTime());

            $manager -> persist($membre);
            $manager -> flush();

            return $this -> redirectToRoute('liste_membre',[
                'id'=>$membre->getId()]);

        }
        return $this->render('gestion_membres/formulaire.html.twig',[
            'formulaire' => $formulaire -> createView(),
            'editMode' => $membre -> getId() !== NULL
        ]);
    }

    /**
     * @Route("/gestion/membres/delete/{id}", name="delete_membre" )
     */
    public function supprimer(MembreEglise $membre, ObjectManager $manager)
    {
        
        $manager -> remove($membre);
        $manager -> flush(); 

        return $this -> redirectToRoute('liste_membre');
    }

}
