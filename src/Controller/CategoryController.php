<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    // /**
    //  * @Route("/category", name="category")
    //  */
    // public function category(): Response
    // {
    //     $category = new Category();
    //     $form = $this->createForm(CategoryType::class, $category);

    //     return $this->render('product.html.twig', [
    //         'CategoryForm' => $form->createView(),
            
    //     ]);
    // }
}
