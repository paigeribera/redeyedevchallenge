<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ExperienceController extends AbstractController
{
    /**
     * @Route("/experience", name="experience")
     */

    public function index()
    {

      return new Response(
        '<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>RedEye Coding Challenge</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="../style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </head>
        <body>

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/aboutme">About Me</a></li>
                <li><a href="/experience">Experience</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid text-center">
            <center>



              <h1>Experience</h1>


          </div>
        </center>
        </div>

        <footer class="container-fluid text-center">
          <p>I have completed two software engineering internships. I am most comfortable with C++ and Python, but I love learning new languages.</p>
        </footer>

        </body>
        </html>
        '
      );


    }

}
