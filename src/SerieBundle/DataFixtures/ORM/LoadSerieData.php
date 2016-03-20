<?php // src/AppBundle/DataFixtures/ORM/LoadSerieData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SerieBundle\Entity\Episode;
use SerieBundle\Entity\Language;
use SerieBundle\Entity\Season;
use SerieBundle\Entity\Serie;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0; $i<20; $i++) {
            $lang = new Language();
            $lang->setName('Language' . $i);

            $serie = new Serie();
            $serie->setName('Serie' . $i);
            $serie->setLanguage($lang);
            $serie->setSummary('asrnuiernausietnurasetanusriet auisrnet usrne utnsreta aut esrnt ' . $i);


            $manager->persist($lang);
            $manager->persist($serie);

            for($j=0; $j<4; $j++) {
                $season = new Season();
                $season->setNumber($j);
                $season->setSerie($serie);

                $manager->persist($season);
                $episodes = [];
                for($k=0; $k<4; $k++) {
                    $episode = new Episode();
                    $episode->setName('Episode' . $k);
                    $episode->setNumber($k);
                    $episode->setSeason($season);
                    $episodes[] = $episode;

                    $manager->persist($episode);
                    $manager->flush();
                }

                $manager->flush();
            }

            $manager->flush();
        }
    }
}