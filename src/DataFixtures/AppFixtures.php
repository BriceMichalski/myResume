<?php

namespace App\DataFixtures;

use App\Entity\Education;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $education1 = new Education();
        $education1->setSchoolName('Paul Sabatier University');
        $education1->setDegreeName('Bachelor of Applied Fundamental Physics ');
        $education1->setDate(new \DateTime('2016-06-20'));
        $education1->setDescription("This degree provides, over the 3 years, a training in fundamental physics supplemented by solid teaching in mathematics, chemistry and computer science. In the second and third years, openings to the sciences of the universe (astrophysics) and the environment (atmospheric physics and renewable energies) are offered, in particular through lectures, tutorials, practical work and internships.
                                                The objective is to train students who wish to continue their studies up to the master's level (or even doctorate) to pursue a scientific career with responsibilities. 
                                                ");

        $manager->persist($education1);

        $manager->flush();
    }
}
