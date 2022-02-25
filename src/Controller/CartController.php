<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Products;
use App\Repository\ProductRepository;


class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart')]
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
    {
         $panier = $session->get("panier", []);

        // // On "fabrique" les données
         $dataPanier = [];
         $total = 0;

        foreach($panier as $id => $quantite){
            $product = $productRepository->find($id);
            $dataPanier[] = [
                "product" => $product,
                "quantity" => $quantite
            ];
            $total += $product->getPrix() * $quantite;
        }

        return $this->render('cart/index.html.twig', compact("dataPanier", "total"));
    }

    #[Route('/add/{id}', name: 'cart_add')]
    //public function add(ProductController $product, SessionInterface $session){
    public function add($id, SessionInterface $session){
        
        // on recupere le panier actuel 
        $panier = $session->get("panier", [] );
        // $id = $product->getId();
        
        
        if(!empty($panier[$id])){
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        
        // on sauvegarde dans la session 
        $session->set("panier", $panier);

        // dd($panier);
        return $this->redirectToRoute("cart");

        return $this->render('cart/index.html.twig', [
            // 'controller_name' => 'CartController'
            'panier' => $panier
        ]);
    }

    #[Route('/remove/{id}', name: 'remove')]
    public function remove($id, SessionInterface $session){
        
        // on recupere le panier actuel 
        $panier = $session->get("panier", [] );
        //$id = $product->setId();
        
        
        if(!empty($panier[$id])){
            if($panier[$id]>1){
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        } 
        
        // on sauvegarde dans la session 
        $session->set("panier", $panier);

        // dd($panier);
        return $this->redirectToRoute("cart");

        return $this->render('cart/index.html.twig', [
            // 'controller_name' => 'CartController'
            'panier' => $panier
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete($id, SessionInterface $session){
        
        // on recupere le panier actuel 
        $panier = $session->get("panier", [] );
        //$id = $product->setId();
        
        if(!empty($panier[$id])){
            unset($panier[$id]);
        } 
        
        // on sauvegarde dans la session 
        $session->set("panier", $panier);

        // dd($panier);
        return $this->redirectToRoute("cart");

        return $this->render('cart/index.html.twig', [
            // 'controller_name' => 'CartController'
            'panier' => $panier
        ]);
    }
}
