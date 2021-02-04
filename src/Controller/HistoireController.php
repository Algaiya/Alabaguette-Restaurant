<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HistoireController extends AbstractController
{

  /**
   * @Route("/histoire", name="histoire")
   */
  public function histoire()
  {
    return $this->render('histoire.html.twig');
  }
}
