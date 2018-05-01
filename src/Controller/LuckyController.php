<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{

// NOTE: even though it's all in commentry, the stuff just below actually creates the /lucky/number route. changing the commentry syntax destroys the route, for example.

 /**
 * @Route("/lucky/number")
 */
    public function number()
    {
      $number = mt_rand(0, 100);

      return $this->render('lucky/number.html.twig', array(
        'number' => $number
      ));
    }
}
