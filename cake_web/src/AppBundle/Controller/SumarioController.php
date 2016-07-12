<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SumarioController extends Controller{
	

	/**
     * @Route("sumario/resumo", name="resumo")
     */
	public function resumo(){
		return $this->render('sumario/resumo.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
	}
}