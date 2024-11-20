<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class AdvertisementController extends AbstractController
{
    #[Route('/advertisement', name: 'recipe.show')]
    public function index(Request $request): Response
    {
        // return $this->render('advertisement/index.html.twig', [
        //     'controller_name' => 'AdvertisementController',
        // ]);

        // dd($slug , $id);

        return new Response('mobili');
    }

    #[Route('/advertisement/{slug}-{id}', name: 'recipe.show' , requirements:['id' => '\d+',  'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        // return $this->render('advertisement/index.html.twig', [
        //     'controller_name' => 'AdvertisementController',
        // ]);

        return $this-> render('advertisement/show.html.twig', [

            'slug' => $slug,
            'id' => $id

        ]) ;
        // dd($slug , $id);
    }
}
