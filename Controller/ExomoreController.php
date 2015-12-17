<?php

namespace CPASimUSante\ExomoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class ExomoreController extends Controller
{
    /**
     * @EXT\Route("/index", name="cpasimusante_exomore_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
