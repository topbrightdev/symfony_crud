<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Blog;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 4; ++$i) {
            $blog = new Blog();
            $blog->setTitle('Lorem ipsum');
            $blog->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Proin sodales, arcu non commodo vulputate, neque lectus luctus metus, 
              ac hendrerit mi erat eu ante. Nullam blandit arcu erat,
              vitae pretium neque suscipit vitae. 
              Pellentesque sit amet lacus in metus placerat posuere. Aliquam hendrerit risus elit, non commodo nulla cursus id. 
              Vivamus tristique felis leo, vitae laoreet sapien eleifend vitae. Etiam varius sollicitudin tincidunt');
            $blog->setShortDescription('Lorem ipsum description');
        }
        $manager->flush();
    }
}
