<?php 

namespace App\Controller;

use Twig\Environment;
use App\Entity\Adress;
use App\Form\AdressFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\component\HttpFoundation;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\Date;



class AdressController extends AbstractController
{
     /**
     * @Route("/adress", name="new_adress")
     * Add a new adress
     */
    public function show(Environment $twig, ProductRepository $productRepository, Request $request, EntityManagerInterface $entityManager, SessionInterface $session)
    {
        $adressUser = new Adress();
        $userEmail = $session->get('_security.last_username');
        $adressUser->setIdUser($userEmail);
        $date = new Date;
        $date = date_create_from_format('j-M-Y', '28-Feb-2022');

        $adressUser->setDate($date);
        
        $panier = $session->get("panier", []);

        foreach($panier as $id => $quantite){
            $product = $productRepository->find($id);
           
            $dataPanier[] = [
                "product" => $product->getName(),
                "quantity" => $quantite
            ];
        }

        $produitPanierUser = json_encode($dataPanier);
        
        $adressUser->setProducts($produitPanierUser);

        $form = $this->createForm(AdressFormType::class, $adressUser);
        $form->handleRequest($request);
        $total = 0;

        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($adressUser);
            $entityManager->flush();
            $session->set("panier", []);

            return new Response($twig->render('user_adress/thanks.html.twig'));

        }

        return new Response($twig->render('user_adress/index.html.twig', [
            'adress_form' => $form->createView(), "dataPanier"=>$dataPanier, "session" => $session
        ]));

    }

    // /**
    //  * @Route("/adress", name="create_adress")
    //  */
    // public function createAdress(ManagerRegistry $doctrine): Response
    // {
    //     $entityManager = $doctrine->getManager();

    //     $adress = new Adress();
    //     $adress->getIdUser();
    //     $adress->getCity();
    //     $adress->getState();
    //     $adress->getZip();
    //     $adress->getAdress();
    //     $adress->getAdress2();
    //     $adress->getDate();
    //     $adress->getProducts();

    //     // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //     $entityManager->persist($adress);

    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();

    //     return new Response('Saved new product with id '.$adress->getId());
    
}
