<?php

namespace App\Controller\HelloController;

use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Entity\User;
use App\Entity\UserProfile;
use App\Repository\CommentRepository;
use App\Repository\UserProfileRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
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

     #[Route('/', name: 'app_index')] // Rutas via atributos
     public function index(EntityManagerInterface $entityManager): Response
     {
        /* $user = new User();
        $user->setEmail('email@email.com');
        $user->setPassword('12345');



        $profile = new UserProfile();
        $profile->setUser($user);
        $profile->setName('Symfony Developer');
        $profile->setBio('Hello, I am a Symfony Developer');
        $profile->setWebsiteUrl('https://symfony.com');
        $profile->setTwitterUsername('symfony');
        $profile->setCompany('Symfony');
        $profile->setLocation('Mexico City');
        $profile->setDateOfBirth(new \DateTime('1994-01-01'));

        $entityManager->persist($profile);
        $entityManager->flush(); */

       /*  $profile = $entityManager->getRepository(UserProfile::class)->find(1);
        $entityManager->remove($profile);
        $entityManager->flush(); */


        /* $post = new MicroPost();
        $post->setTitle('Hello');
        $post->setText('Hello');
        $post->setCreated(new DateTime()); */

        // $post = $entityManager->getRepository(MicroPost::class)->find(14);
        // $post->getComments()->count();
        /* $comment = $post->getComments()[1];
        $post->removeComment($comment);
        $entityManager->persist($post);
        $entityManager->flush(); */

        /* $comment = $post->getComments()[0];
        $comment->setPost(null); */
        /* $comment = new Comment();
        $comment->setText('Otro Hello V2');
        $comment->setPost($post); */
        // $post->addComment($comment);


        /* $entityManager->persist($comment);
        $entityManager->flush(); */

         return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
                'limit' => 3,
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
