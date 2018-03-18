<?php

namespace PI\Premium_ImmobilierBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PI\Premium_ImmobilierBundle\Entity\TypeBien;
use PI\Premium_ImmobilierBundle\Entity\Localite;
use PI\Premium_ImmobilierBundle\Entity\Bien;
use PI\Premium_ImmobilierBundle\Entity\Image;
use PI\Premium_ImmobilierBundle\Entity\Reservation;
use PI\Premium_ImmobilierBundle\Entity\Paiement;
use PI\Premium_ImmobilierBundle\Entity\Contrat;
use PI\Premium_ImmobilierBundle\Entity\Client;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Dompdf\Options;
use Dompdf\Dompdf;

class AdminController extends Controller
{
  public function listBienAction()
  {

    /*liste  des biens */
    $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien')
    ;

    //  $repositiry=$this
    //     ->getDoctrine()
    //     ->getManager()
    //     ->getRepository('PremiumBundle:Bien')
    //     ;
    //      $listebien= $repositiry->findBienWhitoutEtat(); 

    $listebien= $repositiry->findBienWhitoutEtat();
    return $this->render('PremiumBundle:Admin:listBien.html.twig',
        array("biens"=>$listebien));

  } 

 public function listReservationAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Reservation');

        $listeReservation = $repository->listReservation();

        return $this->render('PremiumBundle:Admin:reservation.html.twig',
        array('reservations' => $listeReservation));
    }
    

    /*****afficher les information d'une reservation  */
    public function reservationInfoAction(Request $request){

      extract($_GET);
           $reservation = $this->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:Reservation')
            ->findReservationById($id);
            return $this->render('PremiumBundle:Admin:reservationinfo.html.twig', array(
                'reservationsinfo' => $reservation
            // ...
        ));
    }
        

  /*public function  printContratAction (Request $request){
  
            // On récupère l'objet à afficher (rien d'inconnu jusque là)
        $objectsRepository = $this->getDoctrine()
        ->getRepository('PremiumBundle:Bien');
        $object = $objectsRepository->findBy(array('id'=>1)); 
        // On crée une instance pour définir les options de notre fichier pdf
        $options = new Options();
        // Pour simplifier l'affichage des images, on autorise dompdf à utiliser 
        // des url pour les nom de fichier
        $options->set('isRemoteEnabled', TRUE);
        // On crée une instance de dompdf avec les options définies
        $dompdf = new Dompdf($options);
        // On demande à Symfony de générer le code html correspondant à 
        // notre template, et on stocke ce code dans une variable
        
        // On envoie le code html à notre instance de dompdf
        $dompdf->loadHtml('<h1>okkk</h1>'); 
        $dompdf->setPaper('A4', 'landscape'); 

        // On demande à dompdf de générer le pdf
        $dompdf->render();
        // On renvoie le flux du fichier pdf dans une Response pour l'utilisateur
        return new Response ($dompdf->stream('Contrat',array('Attachement'=>0)));



  }*/

 

        public function contratReservationAction(Request $request)
        {
        
        $reservation=new Reservation();
        $em = $this->getDoctrine()->getManager();
        if($request->isMethod('POST')) {
        extract($_POST);
        $client= $em->getRepository(Client::class)->find($idclient);
        $bien = $em->getRepository(Bien::class)->find($idbien);
        
        $contrat = new Contrat();
        $contrat->setDateContrat(new \DateTime('now'));
        $contrat->setCaution($caution);
        $contrat->setDuree("1ans");

        $contrat->setClient($client);
        $contrat->setBien($bien);
        //$contrat->setBien($bien);
        $em->persist($contrat);
        $em->flush();

        $paiement = new Paiement();
        $paiement->setMontant($montant);
        $paiement->setDatePaiement(new \DateTime());
        $paiement->setPeriode(date('m-Y'));
        $paiement->setContrat($contrat);

        $em->persist($paiement);
        $em->flush();

        //update etat du bien en 0 ce qui veut dire non disponible
        $UdateBien = $this->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien')
        ->updateEtatBien($idbien);

        return $this->redirectToRoute('print_reservation' ,array('id' =>$idreservation));

        
        }
        if ($request->isMethod('GET')) {
        extract($_GET);

        $reservation= $em->getRepository(Reservation::class)->FindBy(array('id' => $id,'etat'=>0 ));
        $reservation[0]->setEtat("1");
        $em->persist($reservation[0]);
        $em->flush();


        
        $text = $this->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:textContrat')
            ->findAll();


        

        return $this->render('PremiumBundle:Admin:contrat.html.twig', array(
        'reservations' => $reservation,
        'textcontrat' => $text
        

        ));
    }
        }


        public function  printContratAction (Request $request){
            extract($_GET);
            // $contrat = $this->getDoctrine()
            // ->getManager()
            // ->getRepository('PremiumBundle:Contrat')
            // ->find($id);
            $reservation = $this->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:Reservation')
            ->findReservationById($id);


        $snappy=$this->get("knp_snappy.pdf");
        
        $html=$this->renderView("default/print.html.twig",array(
            "title"=>"Contat location",
            'contrats'=>$reservation
         ));
        $filename="custom_pdf_from_twig";


        return new Response ($snappy->getOutputFromHtml($html),
        200,
        array(
            'content-Type'=>'application/pdf',
            'content-Disposition'=>'inline; filename"'.$filename.'.pdf"',
            
 
        ));


  }

  /*****login admin  */
    public function loginAction(Request $request){

      
            return $this->render('PremiumBundle:Admin:loginadmin.html.twig', array(
                
            // ...
        ));
    }


    /*****afficher la vue admin  */
    public function adminAction(Request $request){
             if($request-> isMethod('POST')){

            return $this->render('PremiumBundle::acceuiladmin.html.twig', array(
                
            // redirige ver la lgin page si la methode es get
        ));
              }
            return $this->redirectToRoute('login_admin');

            
    }

    /*****ajouter un bien par formulaire  */
     public function formbienAction(){
        return $this->render('PremiumBundle:Admin:formbien.html.twig',array());
    }
   
    public function proreservationAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Proreservation');

        $reservationpro = $repository->lisReservation();

        return $this->render('PremiumBundle:Admin:proreservation.html.twig',
        array('proreservations' => $reservationpro));
    }

   
}
