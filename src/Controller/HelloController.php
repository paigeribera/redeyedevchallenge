<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index()
    {

      $output_msg = "Hi. Please hire me!";


      return new Response(
        '<html><head><body><title>Hi RedEye!</title>'.$output_msg.'</body></html>'
      );


    }

}
