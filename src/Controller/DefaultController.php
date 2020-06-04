<?php

namespace App\Controller;


use App\Entity\Education;
use App\Entity\Skill;
use App\Entity\Work;
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
        $workRepository = $em->getRepository(Work::class);
        $skillRepository = $em->getRepository(Skill::class);

        $Educations = $educationRepostitory->findAll();
        $Works = $workRepository->findAll();
        $Skills = $skillRepository->findAll();

        return $this->render('base.html.twig',array(
            'educations' => $Educations,
            'works' => $Works,
            'skills' => $Skills
        ));
    }
}