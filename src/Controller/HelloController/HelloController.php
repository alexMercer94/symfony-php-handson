<?php

namespace App\Controller\HelloController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

 class HelloController extends AbstractController
 {
    private array $messages = [
        ['message' => 'Hello', 'created' => '2025/06/12'],
        ['message' => 'Hi', 'created' => '2025/04/12'],
        ['message' => 'Bye!', 'created' => '2024/05/12'],
    ];

     #[Route('/{limit<\d+>?3}', name: 'app_index')] // Rutas via atributos
     public function index(int $limit): Response
     {
         return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
                'limit' => $limit,
            ]
        );
     }



     #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
     public function showOne(int $id): Response
     {
        return $this->render(
            'hello/show_one.html.twig',
            ['message' => $this->messages[$id]]
        );
     }
 }
