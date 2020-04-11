<?php

namespace App\Controller;

use App\Repository\SpeakerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SpeakerController extends AbstractController
{
    /**
     * @Route("/speakers", name="speaker_lista" , methods={"GET"})
     */
    public function index(SpeakerRepository $speaker_repository) : Response
    {
        return $this->render('speaker/index.html.twig', [
        "lista"=> $speaker_repository->findAll(),
            ]);
    }
}
