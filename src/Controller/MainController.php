<?php

namespace App\Controller;

use App\Form\SatisfactionRatingFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(SatisfactionRatingFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }

        return $this->render('main/index.html.twig', [
            'form' => $form,
        ]);
    }
}
