<?php

namespace App\Controller;


use App\Entity\Education;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $educationRepostitory = $em->getRepository(Education::class);

        $Educations = $educationRepostitory->findAll();

        return $this->render('base.html.twig',array(
            'educations' => $Educations
        ));
    }
}