<?php

namespace PI\Premium_ImmobilierBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PI\Premium_ImmobilierBundle\Entity\TypeBien;
use PI\Premium_ImmobilierBundle\Entity\Localite;
use PI\Premium_ImmobilierBundle\Entity\Bien;
use PI\Premium_ImmobilierBundle\Entity\Image;
use PI\Premium_ImmobilierBundle\Entity\Client;
use PI\Premium_ImmobilierBundle\Entity\Reservation;
use PI\Premium_ImmobilierBundle\Entity\Proprietaire;
use PI\Premium_ImmobilierBundle\Entity\Proreservation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;




class FrontController extends Controller

{

    
    /**
     * @Route("/acceuil")
     */
  public function acceuilAction()
    {   
        /*liste type de bien */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:TypeBien');
        $listtypebien= $repositiry->findAll();

        /*liste localite */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Localite');
         $localite= $repositiry->findAll();

        /*liste  des biens */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien')
        ;
         $listebien= $repositiry->listBien();

        return $this->render('PremiumBundle::acceuil.html.twig',array("types"=>$listtypebien,"localites"=>$localite,"biens"=>$listebien));
    }

    
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction(Request $request )
    {

        $localite=$request->get('localite');
        $type=$request->get('typebien');
        $budjet=$request->get('budjet');

        /*liste type de bien */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:TypeBien');
        $listtypebien= $repositiry->findAll();

        /*liste localite */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Localite');
         $localites= $repositiry->findAll();



        /*liste  des biens par rechercche  */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien') ;
         $listebien= $repositiry->findBiens($localite,$type,$budjet);

        
         /*liste  des biens limit 6  */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien');
         $bien6= $repositiry->list6Biens();


       


         /*Count reservation  */
         
        // $repositiry=$this
        // ->getDoctrine()
        // ->getManager()
        // ->getRepository('PremiumBundle:Reservation')
        // ;
        //  $bien_id=getBien();
        //  $countReservation= $repositiry->countReservation($bien_id);

        return $this->render('PremiumBundle::acceuil.html.twig',array(
        "types"=>$listtypebien,
        "localites"=>$localites,
        "biens"=>$listebien,
        "biens6"=>$bien6));
    }

    /**
     * @Route("/front/bien/reserver")
     */
    public function reserverBienAction(Request $request)
    {
         //reception par post venant du formulaire reservation
         $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST') && isset($_POST['reserver']) ) {
            extract($_POST);
            $client = new Client();
            $client->setNumpiece($numpiece);
            $client->setNomComplet($nomcomplet);
            $client->setTel($tel);
            $client->setAdresse($adresse);
            $client->setEmail($email);
            $em->persist($client);
            $em->flush();
           
            $bien= $em->getRepository(Bien::class)->find($idbienareserver);
           
            $reservation = new Reservation();
            $reservation->setEtat('0');
            $reservation->setBien($bien);
            $reservation->setClient($client);
            $reservation->setDateReservation(new \DateTime('now'));
            $em->persist($reservation);
            $em->flush();
           
            $bien = $this->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:Bien')
            ->FindBienById($idbienareserver);
            return $this->render('PremiumBundle:Front:reserver.html.twig', array(
                'biens' => $bien
            ));
        }
       
        //reception par get (id derriere le path du boutton resrver)
            extract($_GET);
            $bien = $this->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:Bien')
            ->FindBienById($id);
            return $this->render('PremiumBundle:Front:reserver.html.twig', array(
                'biens' => $bien
            // ...
        ));
                 
        
    }   

    public function catalogueBienAction()
  {

    /*liste  des biens */
    $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien');

    $listebien= $repositiry->findBiens();
    return $this->render('PremiumBundle:Front:catalogue.html.twig',
        array("biens"=>$listebien));

  }

  public function confieBienAction(Request $request)
 {
     //reception par post venant du formulaire propritaire
     $em = $this->getDoctrine()->getManager();
     if ($request->isMethod('POST') && isset($_POST['confier']) ) {
         extract($_POST);
         //proprietaire
         $proprietaire = new Proprietaire();
         $proprietaire->setNumPiece($numpiece);
         $proprietaire->setNomComplet($nomcomplet);
         $proprietaire->setTel($tel);
         $proprietaire->setAdresse($adresse);
         $proprietaire->setEmail($email);
         $proprietaire->setCodeBanque($codebanque);
         $em->persist($proprietaire);
         $em->flush();

        //  //localite
         $localit= new Localite();
         $localit->setLibelle($localite);
         $em->persist($localit);
         $em->flush();
         //type
         $typebien= new TypeBien();
         $typebien->setLibelle($type);
         $em->persist($typebien);
         $em->flush();

        //bien
        $bien=new Bien();
        $bien->setNomBien($nomBien);
        $bien->setEtat("-1");
        $bien->setDescription($description);
        $bien->setPrixlocation($prix);
        $bien->setLocalite($localit);
        $bien->setTypeBien($typebien);
        
        //image







         


        //  $bien= $em->getRepository(Bien::class)->find($idbienareserver);
        
        //  $reservation = new Reservation();
        //  $reservation->setEtat('0');
        //  $reservation->setBien($bien);
        //  $reservation->setClient($client);
        //  $reservation->setDateReservation(new \DateTime('now'));
        //  $em->persist($reservation);
        //  $em->flush();
        
        //  $bien = $this->getDoctrine()
        //  ->getManager()
        //  ->getRepository('PremiumBundle:Bien')
        //  ->FindBienById($idbienareserver);
        //  return $this->render('PremiumBundle:Front:reserver.html.twig', array(
        //      'biens' => $bien
        //  ));
     }
     return $this->render('PremiumBundle:Front:proprietaire.html.twig');

 }





 

}
