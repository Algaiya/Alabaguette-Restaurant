<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement", name="paiement")
     */
    public function paiement()
    {
        return $this->render('paiement/paiement.html.twig', [
        'controller_name' => 'PaiementController'
        ] );
    }

    /**
     * @Route("/paiementSuccess", name="paiementSuccess")
     */
    public function paiementSuccess()
    {
        return $this->render('paiement/paiementSuccess.html.twig', [

        ] );
    }

    /**
     * @Route("/paiementFailed", name="paiementFailed")
     */
    public function paiementFailed()
    {
        return $this->render('paiement/paiementFailed.html.twig', [

        ] );
    }

   
    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout(){
        \Stripe\Stripe::setApiKey('sk_test_51IF5egHLEMh2ff6YEuSQnT4mOrpNEu4pnyfrh89FEwLf0POGnLAjHaY1Q76Z5Z5yy6xkaKbygKQqO242o0ozXI8x00unZBD45n');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'product',
                ],
                'unit_amount' => 2000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('paiementSuccess', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('paiementFailed', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);
        
        return new JsonResponse(['id' => $session->id]);
        }
}

// http://127.0.0.1:8000/paiementFailed