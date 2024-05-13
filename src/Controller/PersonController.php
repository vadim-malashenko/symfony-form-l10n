<?php

namespace App\Controller;

use App\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Translation\LocaleSwitcher;

class PersonController extends AbstractController
{
    private LocaleSwitcher $localeSwitcher;

    public function __construct(LocaleSwitcher $localeSwitcher)
    {
        $this->localeSwitcher = $localeSwitcher;
    }

    #[Route('/', name: 'app_home')]
    public function create(): Response
    {
        $this->localeSwitcher->setLocale($this->getParameter('app.language'));
        $form = $this->createForm(PersonType::class);

        return $this->render('person/create.html.twig', [
            'person' => $form
        ]);
    }
}
