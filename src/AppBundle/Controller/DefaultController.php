<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

use AppBundle\Entity\Producto;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * 
     * @param Request $request
     * @Route("/orm", name="orm")
     */
    public function crearAction(Request $request, EntityManagerInterface $em) {
        $producto = new Producto();
        $producto->setNombre("Correo perro");
        $producto->setPrecio(10000);
        $producto->setDescripcion("Correa de paseo para perros, material cuero sintético.");
        
        $em->persist($producto);
        $em->flush();
        return new Response("Se guardó correctamente el producto con ID:".$producto->getId());
    }

}
