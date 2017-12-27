<?php
/**
 * Created by IntelliJ IDEA.
 * User: kai
 * Date: 27.12.17
 * Time: 12:17
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecondController extends BaseController
{
    /**
     * @Route("/index2", name="homepage2")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}