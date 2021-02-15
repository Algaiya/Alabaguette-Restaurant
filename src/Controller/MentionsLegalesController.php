<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MentionsLegalesController extends AbstractController
{

  /**
   * @Route("/mentionslegales", name="mentionslegales")
   */
  public function mentionslegales()
  {
    return $this->render('mentionslégales/mentionslegales.html.twig');
  }
}
