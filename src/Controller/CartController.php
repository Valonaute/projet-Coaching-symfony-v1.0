<?php

namespace App\Controller;

use App\Cart\CartService;
use App\Form\CartConfirmationType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{

    protected $cartservice;
    protected $productRepository;

    public function __construct(CartService $cartservice, ProductRepository $productRepository)
    {
        $this->cartservice = $cartservice;
        $this->productRepository = $productRepository;
    }
  
    public function add($id)
    {
        // Récupération de la fonction dans les services Cart 
        $this->cartservice->add($id);
        // redirection vers la fiche produit avec ajout message flash 
        $this->addFlash('success',"Le produit a bien été ajouté au panier");
        return $this->redirectToRoute('productfront', [
            'id' => $id
        ]);
    }

    public function cartshow()
    {

        $form = $this->createform(CartConfirmationType::class);

        // représente l'affichage visuel  du panier
        $detailedCart = $this->cartservice->getDetailedCartItems();
        $total = $this->cartservice->getTotal();

        return $this->render('cart/index.html.twig', [
            'items' => $detailedCart,
            'total' => $total,
            'confirmationform' => $form->createView()
        ]);
    }

    public function delete($id)
    {
        $product = $this->productRepository->find($id);

        if(!$product) {
            throw $this->createNotFoundException("Le produit $id n'existe pas et ne epeut être supprimé");
        }

        $this->cartservice->remove($id);
        $this->addFlash("success", "Le produit a bien été supprimé du panier");
        return $this->redirectToRoute("cart_show");
    }
}
