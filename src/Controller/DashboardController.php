<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Reservation;
use App\Form\ProductccType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReservationType;


class DashboardController extends AbstractController
{
  /**
   * @Route("/dashboard", name="dashboard")
   */
  public function index()
  {
    $repo = $this->getDoctrine()->getRepository(Reservation::class);
    $reservation = $repo->findAll();
    return $this->render('dashboard/index.html.twig', [
      "controller_name" => `ReservationController`,
      "reservations" => $reservation,
    ]);
  }
  /**
   *  @Route("/dashboard/{id}", name="dashboard-delete")
   */
  public function delete($id)
  {
    $entityManager = $this->getDoctrine()->getManager();
    $reservation = $entityManager->getRepository(Reservation::class)->find($id);

    $entityManager->remove($reservation);
    $entityManager->flush();

    return $this->redirectToRoute('dashboard');
  }

  /**
   *  @Route("/dashboard/edit/{id}", name="dashboard-edit")
   */
  public function edit($id, Request $request)
  {
    $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
    $form = $this->createForm(ReservationType::class, $reservation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->flush();

      $this->addFlash("reservation_edit_success", "Réservation modifiée avec succès");
      return $this->redirectToRoute('dashboard');
    }

    return $this->render('dashboard/edit.html.twig', [
      "form" => $form->createView()
    ]);
  }
}
