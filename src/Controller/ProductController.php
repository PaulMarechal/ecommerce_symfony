<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Conntroller\CartController;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

class ProductController extends AbstractController
{
    
    /**
     * @Route("/product", name="create_product")
     * Add a new product
     */
    public function createProduct(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrix(1999);
        $product->setDescription('Ergonomic and stylish!');
        $product->setQuantité(5);
        $product->setImage('');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show(ManagerRegistry $doctrine): Response
    {
        //$product = $doctrine->getRepository(Product::class)->find($id);

        $product = $doctrine->getRepository(Product::class)->findAll();


        if (!$product) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }

        // return new Response('Check out this great product: '.$product->getName());

        // or render a template
        // in the template, print things with {{ product.name }}
        return $this->render('product/show.html.twig', ['product' => $product]);
    }   

    
    #[Route('/product', name: 'product')]
    public function index(): Response
    {

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    
}
