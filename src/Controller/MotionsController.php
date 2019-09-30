<?php
namespace App\Controller;

use App\Entity\Motions;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MotionsController extends AbstractController
{
/**
 * @Route("/motions/index")
 */
public function index(){
    // Hakee kaikki aloitteet tietokannasta
    $motionss = $this->getDoctrine()->getRepository(Motions::class)->findAll();


    // Pyydetään näkymää näyttämään kaikki aloitteet
    return $this->render('motions/index.html.twig',[
        'motionss'    => $motionss,
    ]);
}
}

?>