<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        
        $test = new \AppBundle\Entity\test();
        $test->setTest("ble");
        
         $em = $this->getDoctrine()->getManager();
         
         $em->persist($test);
         $em->flush();
         
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/esis", name="page")
     */
    public function esisAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/esis.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    public function esiAction(Request $request, $twig) {
        
        $twigName = $twig;
        
        $keyName = str_replace("/", "___", $twig); 
        $keyName = str_replace("\\", "___", $keyName); 
        $keyName = str_replace(".twig", "", $keyName); 
        
        if (!$this->getParameter('esi')) {
            
            $response = new \Symfony\Component\HttpFoundation\Response();
            $response->setContent($this->render($twigName)->getContent());

            return $response;
        }
        
        try {
           
            $fh = $keyName;
            if (!is_file($fh)) {
                file_put_contents($fh, $this->render($twigName)->getContent());
            }

            if (is_file($fh)) {

                $response = new \Symfony\Component\HttpFoundation\Response();
                $response->setContent(file_get_contents($fh));

                return $response;
            }
        } catch (Exception $e) {
            echo "Error (File: " . $e->getFile() . ", line " .
            $e->getLine() . "): " . $e->getMessage();
        }
        
    }

}
