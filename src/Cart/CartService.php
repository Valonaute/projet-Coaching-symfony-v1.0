<?php
namespace App\Cart;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService {

protected $session;

protected $productrepository;

public function __construct(RequestStack $session, ProductRepository $productRepository)
{
    $this->session = $session;
    $this->productrepository = $productRepository;
}

    public function add($id)
    {   // [1 => 1] le premier 1 c'est l'id du produit
        // le second 1 est la quantité
        // 1) je récupère le panier dans la session
       $cart =  $this->session->getSession()->get('cart', []);

    

        //2) on verifie les clés du tableau
        if(array_key_exists($id, $cart)) {
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }

   
        // on enregistre la session
        $this->session->getSession()->set('cart', $cart);

    }

    public function getTotal()
    {
        // retourner le total du panier
        $total = 0;

        foreach($this->session->getSession()->get('cart',[]) as $id => $qty) {
            $product = $this->productrepository->find($id);

            $total += $product->getPrice() * $qty;
        }

        return $total;
    }

    public function getDetailedCartItems()
    {
        // retourne les produits ajoutés au panier.
        $detailedCart = [];

        foreach($this->session->getSession()->get('cart',[]) as $id => $qty)
        {
            $product = $this->productrepository->find($id);

            $detailedCart[] = [
                'product' => $this->productrepository->find($id),
                'qty' => $qty
            ];
        }

        return $detailedCart;
    }

    public function remove($id)
    {
        $cart = $this->session->getSession()->get('cart',[]);
        unset($cart[$id]);

        $this->session->getSession()->set('cart', $cart);

    }

    
}