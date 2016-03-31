<?php // src/AppBundle/DataFixtures/ORM/LoadSerieData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SerieBundle\Entity\Episode;
use SerieBundle\Entity\Language;
use SerieBundle\Entity\Season;
use SerieBundle\Entity\Serie;
use SerieBundle\Entity\Genre;
use SerieBundle\Entity\Country;
use SerieBundle\Entity\Rate;
use SerieBundle\Entity\Person;
use AppBundle\Entity\User;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$series = [
                    ["Breaking Bad", "Anglais","Créée par Vince Gilligan, Breaking Bad est une série américaine de la chaîne AMC diffusée du 20 janvier 2008 au 29 septembre 2013. En France, les téléspectateurs ont pu la suivre à partir du 20 octobre 2009 sur Orange Cinémax et du 9 octobre 2010 sur Arte.SynopsisWalter White est professeur de chimie. Sa femme est enceinte, son fils est handicapé. Le professorat ne suffisant pas à payer les factures, Walter doit consentir à laver des voitures dans une station. Mais à 50 ans à peine, le voilà broyé par la vie quand la mort le rattrape : il apprend qu'il est atteint d'un cancer des poumons, incurable, alors qu'il n'a jamais fumé?L'ombre de la mort qui plane sur sa tête va permettre au père White de tout remettre en question et de balayer 50 années de vie morne. Mais, plus que l'auréole, c'est la fourche du diable qu'il va emprunter. En effet, ce bon père de famille, afin de mettre les siens à l'abri du besoin une fois son heure sonnée, se lance dans la fabrication de méthamphétamines avec un de ses anciens éléves : Jesse Pinkman. Un business on ne peut plus lucratif mais on ne peut plus dangereux, surtout quand son beau-frère travaille pour les stups.ProductionTournée à Albuquerque au Nouveau-Mexique, la série remporte un immense succès partout où elle est diffusée. Avec un budget de 3,2 millions de dollars par épisode, la série est composée de 62 épisodes de 52 minutes répartis en 5 saisons. Auréolée par la critique, elle remporte de nombreux prix.RécompensesEmmy Awards- Bryan Cranston décroche trois Emmy Awards du Meilleur acteur dans une série dramatique (2008, 2009 et 2010).- Aaron Paul deux Emmy Awards du Meilleur acteur pour un second rôle dans une série dramatique (2010 et 2012).- Anna Gunn remporte de son côté l'Emmy Award de la Meilleure actrice pour un second rôle dans une série dramatique (2013)- La série remporte l'Emmy Award de la Meilleure série dramatique (2013)Golden GlobesLors des Golden Globes 2014, la série remporte 2 récompenses : Meilleure série dramatique et Meilleur acteur dans une série dramatique pour Bryan Cranston.",5,20,["drame"],["USA"],3,["Bryan Cranston","Anna Gunn","Aaron Paul","Dean Norris","Betsy Brandt"],"breakingBad.jpg"], 
                    ["Game of Thrones","Anglais","A l’approche d’un hiver qui s’annonce très rude, le Royaume des Sept Couronnes semble sorti de la guerre qui l’a embrasé pour le contrôle du trône de fer. Pourtant sa stabilité n'a jamais été aussi précaire. En cartes et en cinq minutes, Le Monde vous propose un nouveau décryptage des forces en présence. Attention cependant : cette vidéo dévoile les principaux éléments clés des quatre premières saisons.",6,20,["Fantasy médiévale"],["USA"],5,["Peter Dinklage","Kit Harington","Emilia Clarke","Lena Headey","Maisie Williams","Sophie Turner","Nikolaj Coster-Waldau","Alfie Allen"],"gameOfThrone.jpg"], 
                    ["Utopia","Anglais","Becky, Ian, Grant, Wilson et Bejan sont membres d'un forum de discussion regroupant des personnes en possession d'une bande dessinée intitulée Utopia, partie 1 ; Quand Bejan annonce qu'il possède la partie 2 d’Utopia « jamais publiée », leurs vies basculent. Ils sont alors pourchassés par une organisation secrète, le Réseau (The Network en version originale), qui semble prête à tout pour remettre la main sur cette seconde partie. Celle-ci renfermerait non pas de la science fiction écrite par un fou, mais des secrets bien véritables ; ils devront alors fuir pour survivre.",2,6,["Thriller"],["Royaume-Uni"],4,["Alistair Petrie","Stephen Rea","James Fox","Ruth Gemmell","Emilia Jones","Geraldine James","Rose Leslie","Michael Smiley","Mark Stobbart","Simon McBurney","Tom Burke"],"utopia.jpg"], 
                    ["Friends","Anglais","Monica Geller, une jeune cuisinière d'environ 25 ans, vit dans un appartement situé à Manhattan, dans le Greenwich Village. Un jour, son amie d'enfance, Rachel Green, qu'elle n'avait plus vue depuis des années, lui rend visite après avoir rompu avec son fiancé le jour de leur mariage. Rachel devient alors la nouvelle colocataire de Monica et s’intègre sans problème à son groupe d'amis, composé de : Phoebe Buffay (l'ancienne colocataire de Monica), Ross Geller (le frère de Monica, qui est secrètement amoureux de Rachel depuis le lycée), Chandler Bing (qui est le meilleur ami de Ross depuis l'université) et Joey Tribbiani (le colocataire actuel de Chandler). Ces deux derniers vivent dans l'appartement juste en face de celui de Monica, sur le même palier. La série raconte la vie quotidienne de ces six amis, ainsi que l'évolution de leur vie professionnelle et affective pendant onze ans.",10,24,["Comédie"],["usa"],3,["Jennifer Aniston","Courteney Cox","Lisa Kudrow","Matt LeBlanc","Matthew Perry","David Schwimmer"],"friends.jpg"], 
                    ["Dallas","Anglais","Ce feuilleton raconte la vie malheureuse de la richissime famille Ewing, exploitants pétroliers et éleveurs de bétail, vivant dans un luxueux ranch au Texas non loin de Dallas nommé Southfork Ranch. Tout débute lorsque Bobby Ewing (l'un des trois fils) qui vient à peine de se marier avec une femme appelée Pamela souhaite la faire connaître à sa famille. Cette union déplaira fortement à Jock Ewing (son père) et un de ses frères (John Ross Ewing, plus connu sous le pseudonyme JR) qui fera tout son possible pour se débarrasser d'elle car Pamela est en fait la fille de Digger Barnes (un ennemi de Jock qui était autrefois son associé dont il estime qu'il a été volé par le patriarche Ewing) et la sœur de Cliff Barnes (un ennemi du clan des Ewing). Dès lors, les Ewing et les Barnes seront constamment en conflit.",14,23,["Drame"],["usa"],1,["John Ross Ewing","Larry Hagman","Patrick Duffy","Ken Kercheval","Don Starr","Linda Gray"],"dallas.jpg"], 
                    ["Chips","Anglais","La série raconte la vie d'une patrouille autoroutière de la California Highway Patrol, dans la région de Los Angeles, à travers deux motards de la police, Jonathan Baker (Jon), blond, sérieux et Francis Poncherello (Ponch), policier en période probatoire, casse-cou. Chaque épisode comporte une séquence avant générique, durant laquelle est souvent entamée l'intrigue qui va durer pendant l'épisode (chauffards, voleurs des autoroutes, etc.) et qui sera résolue à la fin. Durant l'épisode, d'autres histoires viennent se greffer, ainsi que la vie personnelle des héros et des seconds rôles.",6,14,["Policier"],["usa"],1,["Larry Wilcox","Erik Estrada","Robert Pine","Lew Saunders","Brodie Greer","Paul Linke","Lou Wagner"],"chips.jpg"], 
                    ["Doctor Who","Anglais","Doctor Who relate les aventures de son personnage principal, un extraterrestre de la race des Seigneurs du Temps (Time Lords), appelé le Docteur. Il est originaire de la planète Gallifrey et voyage à bord d'un TARDIS (Time And Relative Dimension In Space, ou Temps À Relativité Dimensionnelle Inter-Spatiale en français6), une machine pouvant voyager dans l'espace et dans le temps. Particulièrement attaché à la Terre, il est régulièrement accompagné dans ses voyages par des compagnons, pour la plupart humains et féminins. Le TARDIS du Docteur a l'apparence d'une cabine téléphonique de police bleue britannique des années 1960, le système de camouflage (permettant de se fondre au lieu et à l'époque où il se pose) étant resté bloqué lors du tout premier épisode de la première série. L'intérieur est plus grand que l'objet à l'extérieur, suscitant l'étonnement de ceux qui y entrent. Il est également équipé d'un tournevis sonique, un outil qui possède plusieurs fonctions, tel que le déverrouillage ou la réparation d'objets. Dans la première série (1963-1989) le Docteur est un Seigneur du Temps parmi d'autres, alors que dans la seconde série (depuis 2005), il se présente comme le dernier survivant de sa race. Il aurait mis fin à la Guerre du Temps entre les Daleks et les Seigneurs du Temps, perdant ces derniers dans une autre dimension. Comme tous les Seigneurs du Temps, le Docteur a le pouvoir de se régénérer lorsqu'il est mortellement blessé. Cette régénération s'accompagne de changements : il s'agit de la même personne, possédant les mêmes souvenirs, mais avec un corps et un caractère transformés. Traditionnellement, les différentes incarnations du Docteur sont désignées par leur place dans l'ordre chronologique. Par exemple, le « sixième Docteur » fait référence à la sixième incarnation du personnage.",9,26,["science-fiction"],["Royaume-Uni"],4,["Peter Tyler","Harriet Jones","Face de Boe","Lady Cassandra","Francine Jones","Sylvia Noble","Jake Simmonds"],"drWho.jpg"], 
                    ["K2000","Anglais","Cette série met en scène les aventures de Michael Knight, un aventurier des temps modernes au service d'une fondation, et de sa voiture perfectionnée équipée d'un ordinateur de bord dotée d'intelligence artificielle. Dans l'épisode pilote, un policier du nom de Michael Long se fait tirer dessus par Tanya Walker (Phyllis Davis (en)) qui le blesse gravement à la tête. La F.L.A.G. (Foundation for Law And Government), F.L.E.G en français pour Fondation pour la loi et le gouvernement), prend en charge ses soins médicaux. Il s'agit d'une organisation privée, fondée par un milliardaire en fin de vie (Wilton Knight, joué par Richard Basehart), dont la mission est de lutter contre le crime. Michael Long est officiellement déclaré mort. Il se remet après plusieurs opérations, dont une de chirurgie plastique où son visage est façonné à l'image de celui du fils de Wilton Knight, Garth Knight, un criminel psychopathe en froid avec son père (on le comprendra lors de l'épisode Goliath). Michael Long devient alors un combattant du crime sous le nom de Michael Knight. Il est aidé dans cette mission d'une voiture nommée KITT (acronyme de Knight Industries Two Thousand). Article détaillé : KITT. La voiture est contrôlée par une intelligence artificielle, qui est suffisamment développée pour se conduire, réfléchir et parler comme un être humain. De plus, la voiture est résistante aux tirs de toutes les armes connues grâce à son « armure moléculaire »[réf. souhaitée]. Son moteur lui permet de rouler très vite (200 Mph, soit 320 km/h et 300 Mph, soit 480 km/h pour la dernière saison). Elle est dotée de nombreux autres gadgets : elle peut par exemple sauter par-dessus des obstacles ou des précipices grâce au Turbo Boost, éjecter ses occupants (à leur demande ou contre leur gré, avec un système de siège éjectable) ou encore limiter ses émissions sonores grâce au Silent Mode, ou même rouler sur deux roues grâce au ski mode.",4,22,["science-fiction"],["usa"],3,["David Hasselhoff","William Daniels","Patricia McPherson","Rebecca Holden","Edward Mulhare","Peter Parros","Richard Basehart"],"k2000.jpg"], 
                    ["L'agence tout-risque","Anglais","Pendant la guerre du Viêt Nam, le chef hiérarchique de l'Agence tous risque, le général Morrison, leur a donné l'ordre de voler la banque de Hanoï afin de précipiter la fin de la guerre. La mission est un succès, mais quatre jours après la fin de la guerre, ils retrouvent le général assassiné par les Viet Cong, le quartier général étant entièrement brûlé. Par conséquent, aucune preuve indiquant que l'Agence tous risques agissait sur ordre n'existe. Les membres passent alors devant une cour de justice militaire, celle-ci les condamnant à la prison. Incarcérés aux États-Unis, ils s'évadent rapidement et mènent désormais une vie de mercenaires au service « de la veuve et de l'orphelin », combattant les injustices locales.",5,23,["action"],["usa"],2,["George Peppard","Dirk Benedict","Dwight Schultz","Mister T","Melinda Culea","Robert Vaughn","Eddie Velez "],"agence.jpg"], 
                    ["MacGyver","Anglais","Angus MacGyver est un agent secret immatriculé DXSID N°XC4479 au département des services externes, puis employé de la Fondation Phoenix, une société privée à but non lucratif. À partir de l'épisode 11, son chef de service, qui est aussi son ami, est Peter Thornton. C'est d'ailleurs lui qui va lui proposer d'entrer à la Fondation Phoenix par la suite. MacGyver est « héros sans violence » et n'utilise pas les armes à feu, qui lui répugnent au plus haut degré, sauf pour assommer ses ennemis avec la crosse, ou s'en servir comme clef anglaise. Ce bricoleur de génie ne quitte jamais son fidèle couteau suisse grâce auquel il fabrique toutes sortes d'inventions pour se sortir du pétrin : il pourra tout aussi bien colmater une fuite d'eau avec un chewing-gum, boucher une fuite d'acide avec du chocolat, ou fabriquer un hyper-propulseur avec un nettoyeur haute pression accroché à son dos.",7,22,["aventure"],["usa"],5,["Richard Dean Anderson","Dana Elcar"],"mcgyver.jpg"], 
                    ["Supercopter","Anglais","Springfellow (Stringfellow en version originale) Hawke est un solitaire qui vit dans une cabane au milieu des montagnes, avec pour seule compagnie son chien Ted. Il possède une collection de tableaux inestimables note 1, héritage de sa famille, ainsi qu'un violoncelle Stradivarius. Son seul ami est Dominic Santini, patron d'une compagnie d'hélicoptères, la « Santini Air », spécialisée dans les cascades de films hollywoodiens. Hawke était un pilote d'essai de Supercopter, un prototype unique d'hélicoptère militaire, capable d'atteindre des vitesses supersoniques. Construit par la « F.I.R.M. » (ou « l'Agence »), une société proche de la CIA, il est volé par son créateur, le docteur Charles Henry Moffet, qui veut le vendre à la Libye. Hawke est alors appelé par un dénommé Archangel, qui dirige l'Agence, pour retrouver Supercopter. Hawke, aidé de Santini, récupère l'appareil mais refuse de le rendre, le cachant dans un volcan éteint de la vallée des Dieux (en)note 2. Ils accomplissent alors des missions ponctuelles pour la CIA. En échange, cette dernière doit aider Hawke à retrouver son frère, Saint John, disparu lors de la guerre du Viêt Nam. Hawke et Santini sont ensuite rejoints par Caitlin O'Shannessy. Elle travaille pour Santini Air et sert de pilote de remplacement pour Supercopter. Au bout de plusieurs annéesnote 3, Hawke finit par retrouver son frère Saint John. Ce dernier prend la place de Dominic lorsque celui-ci est tué dans l'explosion d'un l'hélicoptère de la Santini Air, au cours d'un attentat perpétré contre Springfellow, qui décide alors de laisser Supercopter à son frère.",4,24,["action"],["usa"],4,["Ernest Borgnine","Jan-Michael Vincent","Alex Cord","Jean Bruce Scott","Deborah Pratt","Barry Van Dyke","Michele Scarabelli"],"supercopter.jpg"],
                    ["Kaamelott","Francais","Deuxième moitié du ve siècle, île de Bretagne. Alors que l’Empire romain s’effondre et que le christianisme s’impose peu à peu face aux dieux païens, le royaume de Kaamelott s’organise autour de son souverain, le roi Arthur ; entouré de ses fidèles chevaliers, il s’attelle à la mission que les Dieux lui ont confiée : rechercher le Saint Graal. Mais cette quête s’annonce plus que difficile, car Arthur est très mal entouré. Ses chevaliers de la Table Ronde sont un faible renfort contre les défis qui se dressent sur la route : peureux, naïfs, stupides ou au contraire violents, archaïques et désordonnés, les troupes de Bretagne ne comprennent pas l’enjeu de la quête du Graal et peinent à se rendre utiles. L’entourage familial du roi n’est guère plus sensé : son quotidien déjà bien chargé est parsemé de conflits avec sa femme Guenièvre ou sa belle-famille. Pour couronner le tout, le pays est régulièrement la cible d’incursions barbares. Les premiers jours de paix après la construction de Kaamelott et les débuts de la Quête du Graal cèdent vite la place à un quotidien plus difficile et morose pour le roi, qui doit maîtriser à la fois son caractère dépressif et les incessantes bourdes de son entourage tout en essayant de gouverner son royaume à sa manière, moderne et progressiste. Un combat de tous les jours où le roi légendaire va connaître bien des déboires.",3,24,["fantasy historique"],["France"],5,["Alexandre Astier","Lionnel Astier","Franck Pitiot","Jean-Christophe Hembert","Anne Girouard","Thomas Cousseau","Nicolas Gabion"],"kaamelott.jpg"]
                ]

                    ;

        $user = new User();
        $user->setBirthDate(new Date());
        $user->setUsername('test');

        for($i=0; $i<count($series); $i++) {
            // Getting all languages in DB
            $languages = $manager->getRepository('SerieBundle:Language')->findAll();
            $isInDb = false;
            // Checking if language of the selected serie is already in DB
            for ($z=0; $z < count($languages); $z++) { 
              if ($series[$i][1] === $languages[$z]->getName()) {
                    $isInDb = true;
                    $lang = $languages[$z];
                break;
               }
            }
            // If the language doesn't exist, create it!
            if ($isInDb === false) {
                $lang = new Language();
                $lang->setName($series[$i][1]);
            }

            $manager->persist($lang);


            // Getting all genres in DB
            $genres = $manager->getRepository('SerieBundle:Genre')->findAll();
            // Checking if genre of the selected serie is already in DB
            $serieGenres = [];
            for ($y=0; $y < count($series[$i][5]); $y++) {
                $isInDb = false;
                for ($z=0; $z < count($genres); $z++) { 
                  if ($series[$i][5][$y] === $genres[$z]->getName()) {
                        $isInDb = true;
                        $gen = $genres[$z];
                    break;
                   }
                }
                // If the genre doesn't exist, create it!
                if ($isInDb === false) {
                    $gen = new Genre();
                    $gen->setName($series[$i][5][$y]);
                }
                $serieGenres[] = $gen;
                $manager->persist($gen);
            }



            // Getting all countries in DB
            $countries = $manager->getRepository('SerieBundle:Country')->findAll();
            // Checking if country of the selected serie is already in DB
            $serieCountries = [];
            for ($y=0; $y < count($series[$i][6]); $y++) {
                $isInDb = false;
                for ($z=0; $z < count($countries); $z++) { 
                  if ($series[$i][6][$y] === $countries[$z]->getName()) {
                        $isInDb = true;
                        $cou = $countries[$z];
                    break;
                   }
                }
                // If the country doesn't exist, create it!
                if ($isInDb === false) {
                    $cou = new Country();
                    $cou->setName($series[$i][6][$y]);
                }
                $serieCountries[] = $cou;
                $manager->persist($cou);
            }


            // Getting all persons in DB
            $persons = $manager->getRepository('SerieBundle:Person')->findAll();
            // Checking if person of the selected serie is already in DB
            $seriePersons = [];
            for ($y=0; $y < count($series[$i][8]); $y++) {
                $isInDb = false;
                for ($z=0; $z < count($persons); $z++) { 
                  if ($series[$i][8][$y] === $persons[$z]->getName()) {
                        $isInDb = true;
                        $pers = $persons[$z];
                    break;
                   }
                }
                // If the person doesn't exist, create it!
                if ($isInDb === false) {
                    $pers = new Person();
                    $pers->setName($series[$i][8][$y]);
                }
                $seriePersons[] = $pers;
            $manager->persist($pers);
            }





            $serie = new Serie();
            $serie->setName($series[$i][0]);
            $serie->setLanguage($lang);
            foreach ($serieGenres as $g) {
                $serie->addGenre($g);
            }
            foreach ($serieCountries as $c) {
                $serie->addCountry($c);
            }
            foreach ($seriePersons as $p) {
                $serie->addCasting($p);
            }
            $serie->setSummary($series[$i][2]);

            $manager->persist($serie);

            for($j=1; $j <= $series[$i][3]; $j++) {
                $season = new Season();
                $season->setNumber($j);
                $season->setSerie($serie);

                $manager->persist($season);
                $episodes = [];
                for($k=1; $k <= $series[$i][4]; $k++) {
                    $episode = new Episode();
                    $episode->setName('Episode ' . $k);
                    $episode->setNumber($k);
                    $episode->setSeason($season);
                    $episodes[] = $episode;

                    $manager->persist($episode);
                    $manager->flush();
                }

                $manager->flush();
            }


            $rate = new Rate();
            $rate->setSerie($serie);
            $rate->setValue($series[$i][7]);
            $rate->setUser($user);

            $serie->setPoster($series[$i][9]);

            $manager->flush();
        }
    }
}
