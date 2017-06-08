<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller {

    /**
     * @Route("/lucky/number/{n}")
     */
    public function numberAction($n) {
        // convierte $n a numero
        $n = intval($n);
        
        $number = mt_rand(0, $n);

        return $this->render('lucky/number.html.twig', array(
            'number'    => $number,
            'n'         => $n
        ));
    }

}
