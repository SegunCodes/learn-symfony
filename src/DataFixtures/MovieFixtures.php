<?php

namespace App\DataFixtures;

use App\Entity\Movies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movies();
        $movie->setTitle('Black Panther 2: Wakander Forever');
        $movie->setReleaseYear(2022);
        $movie->setDescription('New Black Panther movie after death of Chadwick Boseman');
        $movie->setImagePath('https://assets-prd.ignimgs.com/2022/10/03/wakanda-forever-poster-button-1664815714839.jpg');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_3'));
        $manager->persist($movie);

        $movie2 = new Movies();
        $movie2->setTitle('House of the Dragon');
        $movie2->setReleaseYear(2022);
        $movie2->setDescription('Set 170 years before the events of Game of thrones, when the Targaryan dynasty was at full strength');
        $movie2->setImagePath('https://static.dw.com/image/62850747_101.jpg');
        $movie->addActor($this->getReference('actor_2'));
        $movie->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
