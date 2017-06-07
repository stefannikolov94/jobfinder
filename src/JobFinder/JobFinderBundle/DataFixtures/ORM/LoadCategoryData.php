<?php
namespace JobFinder\JobFinderBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use JobFinder\JobFinderBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $design = new Category();
        $design->setName('Design');
        $design->setSlug('test1');
        $programming = new Category();
        $programming->setName('Programming');
        $programming->setSlug('test2');
        $manager = new Category();
        $manager->setName('Manager');
        $manager->setSlug('test3');
        $administrator = new Category();
        $administrator->setName('Administrator');
        $administrator->setSlug('test4');
        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);
        $em->flush();
        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-manager', $manager);
        $this->addReference('category-administrator', $administrator);
    }

    public function getOrder()
    {
        return 1; //the order in which fixtures will be loaded
    }
}
