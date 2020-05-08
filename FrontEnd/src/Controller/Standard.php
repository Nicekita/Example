<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Standard extends AbstractController
{
  public function start()
 {
     $number = random_int(0, 100);
     return $this->render('standart.html.twig', [
         'number' => $number,]);
     header('Access-Control-Allow-Origin: *');
 }

    public function starting()
    {
        $number = random_int(0, 50);
        return $this->render('standart.html.twig', [
            'number' => $number,]);
    }
}