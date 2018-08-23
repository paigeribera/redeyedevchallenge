<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MeController extends AbstractController
{
    /**
     * @Route("/aboutme", name="aboutme")
     */

    public function index()
    {

      return new Response(
        '<html><body><title>Hi RedEye!</title><table border=1><tr><th>Hobbies</th></tr></table></body></html>'
      );


    }

}
