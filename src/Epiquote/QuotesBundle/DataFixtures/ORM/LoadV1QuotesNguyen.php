<?php
// src/Epiquote/QuotesBundle/DataFixtures/ORM/LoadV1Quotes.php
namespace Epiquote\QuotesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Epiquote\QuotesBundle\Entity\Quote;

class LoadV1QuotesNguyen implements FixtureInterface
{
    public function load($manager)
    {
        foreach ($this->getQuotesArray() as $quote)
        {
            $q = new Quote();
            $q->setAuthor($quote['author']);
            $q->setRank($quote['rank']);
            $q->setContext($quote['context']);
            $q->setContent($quote['content']);
            
            $manager->persist($q);
        }
        
        $manager->flush();
    }
    
    private function getQuotesArray()
    {
        // These quotes are courtesy of Vincent Nguyen, creator
        // and former maintainer of epiquote.fr
        
        return array
        (
           array
            (
              'id' => '1',
              'rank' => '-2',
              'author' => 'M. Marwan Burelle',
              'context' => '',
              'content' => 'Oui mais avec CAML... c\'est différent.',
            ),
            array
            (
              'id' => '2',
              'rank' => '-5',
              'author' => 'M. Nadjim Benali',
              'context' => 'Durant l\'appel des SPE-B2 (what else?).',
              'content' => '(Benali): Pham ?<br/><br/>(Elève) : Je vous aime...',
            ),
            array
            (
              'id' => '3',
              'rank' => '23',
              'author' => 'M. Yves-Jean Daniel',
              'context' => '',
              'content' => 'Nous ne ferons pas la preuve de ce théorème... il ne le mérite même pas.',
            ),
            array
            (
              'id' => '4',
              'rank' => '29',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Certains voudront se rebeller en mettant des variables globales. Bah qu\'ils se rebellent, je leur mettrai zéro. Ils se rebellent, zéro. Ils se rebellent, zéro. Ils se rebellent, zéro...<br/>Curieusement ils se lassent toujours avant moi...',
            ),
            array
            (
              'id' => '5',
              'rank' => '-3',
              'author' => 'M. Steve Franck',
              'context' => '',
              'content' => 'Harraps? Harraps is shit!',
            ),
            array
            (
              'id' => '6',
              'rank' => '-27',
              'author' => 'Lalien',
              'context' => '',
              'content' => '\'tain la honte il utilise IE... vas te pendre !',
            ),
            array
            (
              'id' => '7',
              'rank' => '12',
              'author' => 'M. Stéphane Nicolet',
              'context' => 'Le cours se déroule tranquillement, pas un bruit à l\'horizon... sauf peut-être, oui c\'est bien ça : une mouche qui bourdonne quelque part en Sibérie... Stéphane nous lance alors d\'un ton accusateur d\'une férocité ravageuse :',
              'content' => 'Vous commencez sérieusement... À ME LES BROUTER ! Euh oui, bon, ça va hein !',
            ),
            array
            (
              'id' => '8',
              'rank' => '4',
              'author' => 'M. Christian Viallet',
              'context' => '',
              'content' => 'Ça marche comme sur du papier à roulette !',
            ),
            array
            (
              'id' => '9',
              'rank' => '-4',
              'author' => 'Saadik',
              'context' => '',
              'content' => 'Le problème c\'est que Bistinct a le physique d\'ephialtès.',
            ),
            array
            (
              'id' => '10',
              'rank' => '-8',
              'author' => 'Bistinct',
              'context' => '',
              'content' => 'Le problème c\'est que Saadik\' on dirait un Beegees.',
            ),
            array
            (
              'id' => '11',
              'rank' => '13',
              'author' => 'Saadik',
              'context' => '',
              'content' => 'Tu me laches dans un club Mickey, c\'est comme lacher Marc Dutroux dans une maternelle, comme lacher Dark Vador dans une garnison d\'Ewooks, comme une vache dans une piscine de pirañas, cmb dtc : ça va être un carnage.',
            ),
            array
            (
              'id' => '12',
              'rank' => '11',
              'author' => 'MiDU',
              'context' => 'Sur le forum epita2010.',
              'content' => 'Et puis commence pas à jouer ton CousCous, t\'es plus dans l\'école, t\'as plus d\'autorité.',
            ),
            array
            (
              'id' => '13',
              'rank' => '-3',
              'author' => 'M. Nadjim Benali',
              'context' => 'Lors de l\'appel, la totalité de la spé B2 se met à chanter "Joyeux Anniversaire" à M. Benali qui se met alors à rigoler et attend la fin du chant.',
              'content' => 'C\'est gentil, mais ce n\'est pas mon anniversaire !',
            ),
            array
            (
              'id' => '14',
              'rank' => '0',
              'author' => 'Goulagman',
              'context' => 'Goulag me fait une blague bien pourrie. Moi par compassion je lui sors un p\'tit "lol".',
              'content' => 'T\'es pas obligé de dire "lol" à mes blagues foireuses hein ! Je suis plus ton ACD.',
            ),
            array
            (
              'id' => '15',
              'rank' => '12',
              'author' => 'Goulagman',
              'context' => 'Parti manger un morceau, notre cher ACD revient sur MSN.',
              'content' => '*regarde sa vaisselle sale avec des bébêtes qui courent dedans*<br/><br/>J\'ai créé LA VIE!',
            ),
            array
            (
              'id' => '16',
              'rank' => '25',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Tu leur as fait une blague à deux octets ?',
            ),
            array
            (
              'id' => '17',
              'rank' => '1',
              'author' => 'Mme. Christel Trémoulet',
              'context' => '',
              'content' => 'J\'suis pas douée dans R3 moi !',
            ),
            array
            (
              'id' => '18',
              'rank' => '7',
              'author' => 'M. Stéphane Nicolet',
              'context' => '',
              'content' => 'Euh c\'est marqué dans l\'énoncé que c\'est un R-ev... Non mais j\'veux qu\'on le démontre, on va pas les croire comme ça !',
            ),
            array
            (
              'id' => '19',
              'rank' => '3',
              'author' => 'M. O.R',
              'context' => 'En parlant d\'une méthode de Christel Tremoulet sur une démo.',
              'content' => 'Elle fait comment elle ? Moi j\'y vais à la barbare !',
            ),
            array
            (
              'id' => '20',
              'rank' => '14',
              'author' => 'M. Christophe Boullay',
              'context' => 'En parlant du son de recul d\'un engin de chantier dehors.',
              'content' => 'Vous voulez pas qu\'on aille le buter le gars dehors là ?',
            ),
            array
            (
              'id' => '21',
              'rank' => '18',
              'author' => 'Mme. Assia Zellagui',
              'context' => 'À deux élèves qui parlent plus fort que les autres.',
              'content' => 'Taisez vous, vous allez réveiller votre voisin qui dort !',
            ),
            array
            (
              'id' => '22',
              'rank' => '33',
              'author' => 'M. Christophe Boullay',
              'context' => 'Deux minutes avant le cours d\'algo, Junior arrive dans la salle avec Krisboul.',
              'content' => 'Junior : T\'as vu, moi ils me disent bonjour !<br/><br/>Krisboul : C\'est pas grave, je les emmerde.',
            ),
            array
            (
              'id' => '23',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => 'En parlant d\'un sous-arbre vide.',
              'content' => 'Si vous lui demandez ca, il va apprécier avec beaucoup de modération.',
            ),
            array
            (
              'id' => '24',
              'rank' => '14',
              'author' => 'M. O.R',
              'context' => 'S\'arrêtant en pleine phrase, regardant par la fenêtre, un regard béat sur son visage.',
              'content' => 'Vous vous rendez compte ? Il y a quelques milliers d\'années ici (designant l\'extérieur) il n\'y avait que des forêts !',
            ),
            array
            (
              'id' => '25',
              'rank' => '9',
              'author' => 'M. Christophe Boullay',
              'context' => 'Pendant l\'appel des B1 et B2.',
              'content' => 'Seine ! (pas de réponse)<br/><br/>Soula ! ... Seine ? Sous la Seine...',
            ),
            array
            (
              'id' => '26',
              'rank' => '20',
              'author' => 'Michel Ruckebush',
              'context' => 'Sur le forum Epita2010, à propos des vacances de Noël et de l\'hypothétique projet qui va nous (promo 2010) tomber dessus durant cette période.',
              'content' => 'Pheteon > Noël, c\'est pas censé être la période 42sh?<br/><br/>Mech > Non, en fait Noël est une célébration religieuse en rapport avec la naissance de Jésus de Nazareth.',
            ),
            array
            (
              'id' => '27',
              'rank' => '5',
              'author' => 'guilbe_p',
              'context' => 'À la coupe de robotique, ayant très peu dormi et admirant le paysage.',
              'content' => 'C\'est beau comme un wallpaper !',
            ),
            array
            (
              'id' => '28',
              'rank' => '6',
              'author' => 'Benjamin Michel',
              'context' => 'À propros de la techno-parade.',
              'content' => 'Comment j\'me suis niqué mon coup avec une meuf :<br/><br/> - J\'en ai marre de mon mec.<br/><br/> - Ah ouais pourquoi ?<br/><br/> - Il fait que de jouer à WoW.<br/><br/> - Ah merde c\'est con.<br/><br/> - J\'veux changer de mec...<br/><br/> - Il est à quel level ?',
            ),
            array
            (
              'id' => '29',
              'rank' => '7',
              'author' => 'Benjamin Michel',
              'context' => 'Sur la shoutbox des 2012.',
              'content' => 'Promethe c\'est un peu un croisement entre Alain Delon et Jamel Debouzze mais en moins drôle.',
            ),
            array
            (
              'id' => '30',
              'rank' => '-2',
              'author' => 'perill_a',
              'context' => 'Pendant que M. Burelle nous révèle l\'existance du CAML impératif.',
              'content' => 'Rien que d\'y penser, je bande!',
            ),
            array
            (
              'id' => '31',
              'rank' => '2',
              'author' => 'Redox (ACU)',
              'context' => 'À propos d\'un exercice de piscine dont seul le 3ème exercice est noté.',
              'content' => 'philip_o : En gros, tu codes toute la nuit jusqu\'à l\'exo 3 et puis t\'as zéro quand même.<br/><br/>Redox : Au moins, tu auras appris quelque chose...',
            ),
            array
            (
              'id' => '32',
              'rank' => '-1',
              'author' => 'M. Fabrice Bardeche',
              'context' => 'Lors du discours d\'ouverture d\'ING1.',
              'content' => 'Lors de la piscine, vous n\'allez pas beaucoup dormir donc vous allez eêtre fatigués.',
            ),
            array
            (
              'id' => '33',
              'rank' => '18',
              'author' => 'Cédric R. - spycAm',
              'context' => 'Piscine-j04 / 2:04',
              'content' => 'Et voila, un Makefile qui part en boucle infinie...<br/><br/>/*...après quelques instants... */<br/><br/>Ah non, c\'est les erreurs !',
            ),
            array
            (
              'id' => '34',
              'rank' => '3',
              'author' => 'Warren Seine',
              'context' => 'Piscine-j04 (sur les Makefile) - 4:51',
              'content' => 'Putain comme password je mets Makefile...',
            ),
            array
            (
              'id' => '35',
              'rank' => '-3',
              'author' => 'Jean-Marc Le-Roux',
              'context' => 'Piscine-j05 : Memory Manager',
              'content' => 'Un champ de bits est un champ de bits...',
            ),
            array
            (
              'id' => '36',
              'rank' => '13',
              'author' => 'Warren Seine',
              'context' => 'Debuggant un programme à 3h du matin.',
              'content' => 'Non mais j\'ai fait le test avec les doigts, ça marche.',
            ),
            array
            (
              'id' => '37',
              'rank' => '13',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Pendant un TP d\'algo de sup.',
              'content' => 'T\'es too many arguments alors maybe si t\'en enlevais un...',
            ),
            array
            (
              'id' => '38',
              'rank' => '2',
              'author' => 'Jerome Respaut',
              'context' => 'Piscine-j6 : ABR',
              'content' => 'Là tu as ta tête, là tu as ta queue, et tu  enfiles la queue.',
            ),
            array
            (
              'id' => '39',
              'rank' => '25',
              'author' => 'Warren Seine',
              'context' => 'Piscine-J7 : 20 minutes avant la deadline.',
              'content' => 'Est-ce qu\'on rend les fichiers .c ?',
            ),
            array
            (
              'id' => '40',
              'rank' => '5',
              'author' => 'M. Christophe Boullay',
              'context' => 'À un élève qui parlait pendant le cours.',
              'content' => 'Tu fais des sons... des trucs qu\'on entend avec les oreilles.',
            ),
            array
            (
              'id' => '41',
              'rank' => '6',
              'author' => 'M. Akim Demaille',
              'context' => 'Lors du séminaire automate.',
              'content' => 'Avec le C++, on est condamné à travailler des choses aériennes les pieds dans la merde.',
            ),
            array
            (
              'id' => '42',
              'rank' => '112',
              'author' => 'Warren Seine',
              'context' => 'Justificatif d\'absence à un cours<br/>(notez que ceci lui a valu un conseil de discipline et un "Mais tu es un fou !" de M. Christian Dujardin)',
              'content' => 'J\'étais aux putes et il y avait du monde.',
            ),
            array
            (
              'id' => '43',
              'rank' => '4',
              'author' => 'M. Akim Demaille',
              'context' => 'En parlant de depiet_s dès la première heure de séminaire.',
              'content' => 'C\'est même plus de l\'épitéen à ce niveau.',
            ),
            array
            (
              'id' => '44',
              'rank' => '5',
              'author' => 'M. Christophe Boullay',
              'context' => 'En réponse à une question.',
              'content' => 'Si tu vois une boîte avec de longs trucs verts et que sur la boîte il y a écrit Daucy, je ne vais pas te dire que c\'est des haricots.',
            ),
            array
            (
              'id' => '45',
              'rank' => '-2',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le seminaire THLR',
              'content' => 'Ma machine boot...et ne me rend jamais la main.... ça vous rappelle un OS?...<br/>Une main levée? Un pro-Microsoft?',
            ),
            array
            (
              'id' => '46',
              'rank' => '-3',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le séminaire THLR parlant de graphes.',
              'content' => 'C\'est une partie de Q !',
            ),
            array
            (
              'id' => '47',
              'rank' => '0',
              'author' => 'loic denuziere (speB1)',
              'context' => 'Pendant le séminaire THLR Akim Demaille parle des graphes.',
              'content' => 'Akim : Les gens qui sont dans le Q je les appellerai...<br/><br/>denuzi_l : Les morpions.',
            ),
            array
            (
              'id' => '48',
              'rank' => '25',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le cours de THLR.',
              'content' => 'Akim : Est-ce que quelqu\'un a déjà essayé de payer un prof pour avoir une meilleure note au partiel ?<br/><br/>(... silence ...)<br/><br/>Akim : Bon est-ce que quelqu\'un a 50cts pour la machine à café ?',
            ),
            array
            (
              'id' => '49',
              'rank' => '2',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le cours de THLR.',
              'content' => 'On peut faire l\'avant et l\'arrière, il est souvent plus compact de commencer par l\'arrière.',
            ),
            array
            (
              'id' => '50',
              'rank' => '4',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le cours de THLR montrant une \'machine\' à états finis.',
              'content' => 'Akim : Par quels états peut-on arriver en 4 de manière spontanée?<br/><br/>Elèves : 0... 1<br/><br/>Akim : 0 et 1<br/><br/>Elèves : 2<br/><br/>Akim : Et 2<br/><br/>Elèves : 3<br/><br/>Akim : Et 3 ... Et 1, et 2, et 3 zéros...<br/>',
            ),
            array
            (
              'id' => '51',
              'rank' => '-3',
              'author' => 'M. Akim Demaille',
              'context' => '',
              'content' => 'Je ne peux pas remonter le trou du Q de l\'automate.',
            ),
            array
            (
              'id' => '52',
              'rank' => '7',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le cours de THLR montrant un automate.',
              'content' => 'Ca c\'est vous...<br/><br/>En terme de neurones, c\'est déjà bien, ça vous en fait cinq.<br/><br/>Ca fait un car de flics !',
            ),
            array
            (
              'id' => '53',
              'rank' => '12',
              'author' => 'M. Akim Demaille',
              'context' => 'Peu de monde levait la main.',
              'content' => 'Qui est d\'accord ? Qui n\'est pas d\'accord ? Qui est d\'accord avec ceux qui ne sont pas d\'accord ?',
            ),
            array
            (
              'id' => '54',
              'rank' => '4',
              'author' => 'M. Akim Demaille',
              'context' => 'Pendant le cours de THLR.',
              'content' => 'Il a beau être Belge vous savez qu\'il dit la vérité.',
            ),
            array
            (
              'id' => '55',
              'rank' => '5',
              'author' => 'M. Michel Sasson',
              'context' => '',
              'content' => 'Il pense rien, ni bien, ni mal. C\'est un geek.',
            ),
            array
            (
              'id' => '56',
              'rank' => '3',
              'author' => 'Un geek',
              'context' => '',
              'content' => 'Je veux bien travailler chez toi, mais je ne veux pas rencontrer des vrais gens dans la vraie vie.',
            ),
            array
            (
              'id' => '57',
              'rank' => '8',
              'author' => 'le-tal_v',
              'context' => 'Parlant de sa pointe de vitesse en Twingo (10 ans d\'âge).',
              'content' => 'Si si, je te jure, 175km/h, j\'aurais voulu prendre un screenshot !<br/><br/>*blanc*<br/><br/>Ouais enfin une photo, faites pas genre vous m\'avez pas compris...',
            ),
            array
            (
              'id' => '58',
              'rank' => '0',
              'author' => 'M. David Bouchet',
              'context' => 'Pendant un TD d\'archi.',
              'content' => 'Le prof :Tu dois être Maître de la Conversion.<br/><br/>Romain Lofaso : Que la force du bit soit avec toi !',
            ),
            array
            (
              'id' => '59',
              'rank' => '18',
              'author' => 'M. O.R',
              'context' => 'En plein milieu d\'une démonstration de cours.',
              'content' => 'Prenons lambda un réel quelconque. Quel pauvre réel... Bah oui, vous vous imaginez ? Mettez-vous deux secondes à la place de ce réel. <br/>(Il trace une droite au tableau et en pointant les extrémités :) Vous imaginez ? Il passe sa vie entre là et là ! C\'est pas bien palpitant !',
            ),
            array
            (
              'id' => '60',
              'rank' => '9',
              'author' => 'M. Christophe Boullay',
              'context' => '30 minutes après le début du cours.',
              'content' => 'Rolala ça va plus du tout! Je ne suis plus rodé, j\'en ai même oublié le café!',
            ),
            array
            (
              'id' => '61',
              'rank' => '20',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'Le week-end, je suis pressé de retrouver mon chat, ma maison et ma femme. Dans cet ordre de préférence bien sûr. Bah oui mon chat je ne l\'ai que depuis 5 ans alors qu\'après 40 ans de mariage...',
            ),
            array
            (
              'id' => '62',
              'rank' => '4',
              'author' => 'Gabriel Laskar',
              'context' => 'Un troll à propos de LaTeX et Word 2007.',
              'content' => 'Mais Word2007 ça me fait peur : il y a des boutons où on peut cliquer!',
            ),
            array
            (
              'id' => '63',
              'rank' => '11',
              'author' => 'Gabriel Laskar',
              'context' => 'En discussion avec Laurent Quillerou.',
              'content' => 'Laurent : Ça sert à rien les mômes, ça braille, ça pleure...<br/><br/>Gabriel : ...et ça compile pas !',
            ),
            array
            (
              'id' => '64',
              'rank' => '31',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'Mais vous pouvez toujours m\'appeler. J\'ai deux répondeurs de toute façon : ma femme et le répondeur intelligent.',
            ),
            array
            (
              'id' => '65',
              'rank' => '4',
              'author' => 'Jean-Marc Le-Roux',
              'context' => '',
              'content' => 'Libérer la mémoire c\'est pour les pauvres, il suffit d\'acheter des barrettes de RAM.<br/>',
            ),
            array
            (
              'id' => '66',
              'rank' => '53',
              'author' => 'M. Christophe Boullay',
              'context' => 'Re-entrant dans la salle de cours après avoir demandé gentiment à des hystériques isbpettes de se taire.',
              'content' => 'Y\'a de quoi devenir pédé.',
            ),
            array
            (
              'id' => '67',
              'rank' => '10',
              'author' => 'M. Marwan Burelle',
              'context' => 'Au cours d\'une explication sur le parcours d\'un arbre.',
              'content' => 'Marwan: Et donc on peut parcourir la liste des fists. /* silence puis rires */<br/><br/>Xorz: Ah oui vous voulez faire un parcours main gauche en fait !',
            ),
            array
            (
              'id' => '68',
              'rank' => '2',
              'author' => 'M. Marwan Burelle',
              'context' => 'À la fin d\'une explication.',
              'content' => 'Avant de passer à la suite je veux juste vous mettre un doigt sur... /* gloups */',
            ),
            array
            (
              'id' => '70',
              'rank' => '13',
              'author' => 'Baptiste Afsa',
              'context' => '',
              'content' => 'Le seul truc qui manque à Emacs, c\'est des nichons.',
            ),
            array
            (
              'id' => '71',
              'rank' => '26',
              'author' => 'Mme. Anne Sophie Dujardin',
              'context' => 'En nous expliquant le dopage de type P pour les semi-conducteurs.',
              'content' => 'Le trou, ce n\'est pas quelque chose de palpable !',
            ),
            array
            (
              'id' => '72',
              'rank' => '7',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'J\'ai combien de bits ? 23<br/>Est-ce que c\'est dur ? Non<br/>On va en revoir tout le temps des comme ca !',
            ),
            array
            (
              'id' => '73',
              'rank' => '2',
              'author' => 'Xavier Gerraz',
              'context' => 'En attendant le cours de Mr Burelle.',
              'content' => 'C\'est pas parce que je me tripote la bite dans les douches des mecs que je suis gay !',
            ),
            array
            (
              'id' => '74',
              'rank' => '9',
              'author' => 'M. Stéphane Nicolet',
              'context' => 'Après une bonne demi-heure à regarder une guêpe se baladant dans la salle.',
              'content' => '(En pointant la guêpe du doigt :) Bon la guêpe tu sors ! Tu perturbes le cours !<br/><br/><br/>[Après 2 min de blanc, Nicolet se retourne, la guêpe vient vers lui. Et du coup il rigole en la voyant voler...]',
            ),
            array
            (
              'id' => '75',
              'rank' => '26',
              'author' => 'M. Akim Demaille',
              'context' => 'Après le son d\'un Windows XP bootant.',
              'content' => 'Alors ça je ne veux plus jamais l\'entendre dans un de mes cours. C\'est pire qu\'un téléphone qui sonne. On est dans une école d\'informatique ! Ceux qui veulent faire de la bureautique vous pouvez sortir.',
            ),
            array
            (
              'id' => '76',
              'rank' => '0',
              'author' => 'M. Akim Demaille',
              'context' => 'Parlant des langages de programation et de Yacc.',
              'content' => 'Tous les langages sont venus avec leur Yacc.',
            ),
            array
            (
              'id' => '77',
              'rank' => '-2',
              'author' => 'Cédric R. - spycAm',
              'context' => 'Après lui avoir proposé de changer son script "lol" qui affiche un smiley dont le nez est légèrement décalé par rapport à la bouche.',
              'content' => 'Pas que ça à foutre !',
            ),
            array
            (
              'id' => '78',
              'rank' => '14',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Après 1h20 de cours à parler de son langage algorithmique "impératif". Elle s\'aperçoit que le cours est bientôt fini, alors qu\'elle n\'a pas fini de nous expliquer un exercice.',
              'content' => 'Nathalie (en regardant sa montre) : Je parle trop !<br/><br/>Thibaud (en parlant à son voisin) : J\'adore quand les femmes l\'admettent.',
            ),
            array
            (
              'id' => '79',
              'rank' => '2',
              'author' => 'Redox',
              'context' => 'Parlant de la nouvelle organisation de l\'atelier C++ pour la promo 2010.',
              'content' => 'Le C++ cette année c\'est un peu la beta-test pour vous...',
            ),
            array
            (
              'id' => '80',
              'rank' => '28',
              'author' => 'Pedro',
              'context' => 'Ayant été largué le jour de mon anniversaire, je suis absent à un cours. Suite à ma réponse-justificatif d\'absence à un cours :',
              'content' => 'Tout d\'abord, bon anniversaire !<br/><br/>Pour ta copine, c\'est pas grave, comme tout bon geek, Mademoiselle Cinq Doigts prendra le relai pour te remonter le moral.<br/><br/>Profites-en ce WE et reviens en forme lundi...',
            ),
            array
            (
              'id' => '81',
              'rank' => '20',
              'author' => 'Pedro',
              'context' => 'La réponse de Pedro suite à un justificatif d\'absence à un cours.',
              'content' => 'Elève (justificatif):<br/><br/> => Il y avait un mouton devant ma porte, je ne pouvais pas sortir...<br/><br/><br/>Réponse de Pedro:<br/><br/> => Fallait faire un méchoui...',
            ),
            array
            (
              'id' => '82',
              'rank' => '2',
              'author' => 'Fabien Choutal',
              'context' => 'Dimanche matin, 10h15, au rendu du projet TC0.',
              'content' => 'Et merde, je compile le bin à la racine...<br/>et moi j\'ai rendu et je suis baisé.',
            ),
            array
            (
              'id' => '83',
              'rank' => '2',
              'author' => 'M. Didier Verna',
              'context' => '',
              'content' => 'La petite vieille avec son paquet de biscottes, c\'est un processus léger.',
            ),
            array
            (
              'id' => '84',
              'rank' => '-2',
              'author' => 'M. Akim Demaille',
              'context' => '',
              'content' => 'CAML ça vous ouvre un monde infini.',
            ),
            array
            (
              'id' => '85',
              'rank' => '1',
              'author' => 'Cédric R. - spycAm',
              'context' => 'Après un segfault de Soulmate, le client netsoul multiplateformes de Warren Seine.',
              'content' => 'On se disait que ça pourrait être une feature d\'envoyer les segfaults du client via NS, comme ça l\'interlocuteur est au courant.',
            ),
            array
            (
              'id' => '86',
              'rank' => '2',
              'author' => 'Pelican',
              'context' => 'Le prof de TD de maths des SPE A2 2010 pose une question assez compliquée que personne ne comprend.',
              'content' => 'Issa Ghanem: *question*<br/><br/>Pelican: Une grosse TECHA ?!<br/><br/>Issa Ghanem: Oui tout à fait, ce n\'est qu\'une question de profondeur !',
            ),
            array
            (
              'id' => '87',
              'rank' => '2',
              'author' => 'M. François Teleitche',
              'context' => '',
              'content' => 'Une démo faut savoir la prendre par devant, par derrière, dans tous les sens!',
            ),
            array
            (
              'id' => '88',
              'rank' => '3',
              'author' => 'Baroud_p',
              'context' => 'Après des échanges houleux avec un certain Joe.',
              'content' => 'Joe j\'peux pas l\'insulter, c\'est comme se moquer d\'un unijambiste parce qu\'il peut pas courir !',
            ),
            array
            (
              'id' => '89',
              'rank' => '20',
              'author' => 'Melle. Christel Trémoulet',
              'context' => 'Trois heures de TD de Maths en fin de journée.',
              'content' => 'Christel : Bon, allez, Matthieu, tu dégages.<br/><br/>Matthieu : Mais c\'est votre blague qui m\'a fait rigoler !<br/><br/>Christel : Quelle blague ?<br/><br/>Matthieu : C\'était pas une blague ?<br/><br/>Christel : Non...<br/><br/>Matthieu : Ha merde !<br/><br/>Christel : Allez, dégage !<br/>',
            ),
            array
            (
              'id' => '90',
              'rank' => '1',
              'author' => 'vu_c et guilbe_p',
              'context' => 'Pierre a entre-entendu une phrase.',
              'content' => 'guilbe_p : Quoi craquer le pantalon ?<br/><br/>vu_c : On disait que tu craquais ton pantalon à chaque fois que tu voyais Zellagui.<br/><br/>guilbe_p : Mais oui carrément!',
            ),
            array
            (
              'id' => '91',
              'rank' => '5',
              'author' => 'M. Thierry Géraud',
              'context' => 'Définissant une structure C au tableau<br/>[note : Akim Demaille est fan de la couleur orange].',
              'content' => 'Je crée ma structure my2. J\'aurais pu l\'appeler 2my, mais j\'avais pas de craie orange.<br/>',
            ),
            array
            (
              'id' => '92',
              'rank' => '3',
              'author' => 'Cédric R. - spycAm',
              'context' => '',
              'content' => '- Pour s\'incrire à l\'offre M$ pour acheter Office, il faut entrer l\'adresse email de son école.<br/><br/>- J\'entre raud_c@epita.fr ça foire<br/><br/>- raud.cedric@epita.fr ça foire<br/><br/>- cedric.raud@epita.fr ça foire<br/><br/>- raud_c@isbp.fr ça marche<br/><br/>- On est pas blacklisté déjà...<br/><br/>',
            ),
            array
            (
              'id' => '93',
              'rank' => '23',
              'author' => 'M. Christophe Boullay',
              'context' => 'Parlant d\'une fonction.',
              'content' => 'Elle est sur le site de Nathalie, mais elle est moche. La fonction, pas Nathalie, hein ! Je précise, parce que l\'étudiant est sournois...',
            ),
            array
            (
              'id' => '94',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => 'Un élève explique qu\'il n\'arrive pas à utiliser XEmacs pour coder en CAML chez lui.',
              'content' => '- Boullay: Mais vous avez installé Objective CAML ?<br/><br/>- Elève: Non.<br/><br/>- Boullay: Ah ! Il est mignon...<br/>',
            ),
            array
            (
              'id' => '95',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Beaucoup, ça commence à 3. Trop, c\'est au dessus de 2.',
            ),
            array
            (
              'id' => '96',
              'rank' => '6',
              'author' => 'M. Yves-Jean Daniel',
              'context' => '',
              'content' => 'Les équivalences, c\'est beaucoup trop fort pour un être humain.',
            ),
            array
            (
              'id' => '97',
              'rank' => '5',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'On va tripoter le epsilon, vous allez voir... vous allez être surpris!',
            ),
            array
            (
              'id' => '98',
              'rank' => '7',
              'author' => 'ACD',
              'context' => '',
              'content' => '- Lliane : On est obligé de sortir pour la pause ?<br/><br/>- ACD : Non, tu peux rester là faire du C, connard !',
            ),
            array
            (
              'id' => '99',
              'rank' => '3',
              'author' => 'Nicolas Précheur',
              'context' => '<br/> http://www.informacyde.com/weblog/images/people/Bill-gates-mugshot.jpg',
              'content' => 'Bill Gates c\'est le seul mec qui sourit sur ses photos de prison.',
            ),
            array
            (
              'id' => '100',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Oui je pourrais répondre à ta question... mais à un moment il faut trouver la voie.<br/>',
            ),
            array
            (
              'id' => '101',
              'rank' => '4',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Tu installes Objective CAML et là... Dieu est grand !',
            ),
            array
            (
              'id' => '102',
              'rank' => '13',
              'author' => 'M. O.R',
              'context' => 'Lors du premier appel de l\'année.',
              'content' => 'Rodot : Ah ! Par contre celui-là je le connais, il y en a des centaines dans l\'annuaire, c\'est très facile : N\'Guyen<br/><br/>Vincent Nguyen : Non monsieur, ça se prononce Nuyen !<br/><br/>Rodot (boulversé) : QUOI ? C\'est pas vrai ? C\'est pas possible ?',
            ),
            array
            (
              'id' => '103',
              'rank' => '-6',
              'author' => 'Thomas Gallois',
              'context' => '',
              'content' => 'J\'aime Microsoft.',
            ),
            array
            (
              'id' => '104',
              'rank' => '10',
              'author' => 'Melle. Christel Trémoulet',
              'context' => '',
              'content' => 'Christel: Le premier qui dit que ça converge parce que ça tend vers 0, je le... il a un gage. <br/><br/>J-M: Tout nu dans l\'escalier...<br/><br/>Christel: Ah oui, pas mal ça !',
            ),
            array
            (
              'id' => '105',
              'rank' => '-3',
              'author' => 'Baptiste Courtois',
              'context' => '',
              'content' => 'Jimmy:	Les épées sont faites en latex aussi.<br/><br/>Batiste: Ah!',
            ),
            array
            (
              'id' => '106',
              'rank' => '5',
              'author' => 'j00',
              'context' => '',
              'content' => 'Sadomaso c\'est aussi du Cosplay non ?<br/>',
            ),
            array
            (
              'id' => '107',
              'rank' => '1',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'Dans les armes à destination que je préfère, il y a la baguette de pain bien cuite.<br/><br/>On peut facilement arracher une joue avec ça !',
            ),
            array
            (
              'id' => '108',
              'rank' => '-2',
              'author' => 'Promethe',
              'context' => '',
              'content' => 'Je suis très synthétique.',
            ),
            array
            (
              'id' => '109',
              'rank' => '-3',
              'author' => 'Spycam',
              'context' => '',
              'content' => 'Le truc c\'est que Marc est égyptien et on le voit de profil, il est dans son milieu naturel.',
            ),
            array
            (
              'id' => '110',
              'rank' => '6',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => '',
              'content' => 'Je vais aller placer mon trou dans un autre fils, ça fait pas très sérieux.',
            ),
            array
            (
              'id' => '111',
              'rank' => '11',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Parlant des crayons de couleur de Chico.',
              'content' => 'Mais c\'est TROP bien ! Faut que je le montre à l\'autre d\'à coté (Boullay)<br/> [...]<br/> Pff, il s\'en fout...',
            ),
            array
            (
              'id' => '112',
              'rank' => '1',
              'author' => 'j00',
              'context' => '',
              'content' => 'Je me suis fait un return verso, ça veut dire "j\'ai sodomisé à l\'envers".',
            ),
            array
            (
              'id' => '113',
              'rank' => '3',
              'author' => 'j00',
              'context' => '',
              'content' => 'Anne Lacan:	Mais je regarde pas les pétasses qui se pavanent sur TF1.<br/><br/>J00:		Mais qu\'est-ce que tu fous à cette table?',
            ),
            array
            (
              'id' => '114',
              'rank' => '-3',
              'author' => 'Yannick Hock-koon',
              'context' => '',
              'content' => 'Eh! \'faut être plus vif hein Johan.',
            ),
            array
            (
              'id' => '115',
              'rank' => '24',
              'author' => 'Mme. Assia Zellagui',
              'context' => 'En physique, tout à coup la prof se retourne.',
              'content' => 'Zellagui: Mr Haddioui, vous faites quoi ? Vous êtes en train de sortir du cours en douce ?<br/><br/>Yassin:	Heu<br/><i>(Il était accroupi derrière une table, à un mètre de la porte, son sac sur le dos)</i> Euh... je cherche ma gomme...<br/><br/><i>Zellagui reprend le cours. Se retourne a nouveau. Reprend le cours. Se retourne... Yassin est parti.</i><br/>',
            ),
            array
            (
              'id' => '116',
              'rank' => '0',
              'author' => 'M. Patrick Peillon',
              'context' => 'Parlant de préservatifs.',
              'content' => 'Pour les bonnes suceuses on peut en mettre avec du goût.',
            ),
            array
            (
              'id' => '117',
              'rank' => '1',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'J\'espère que dans votre génération comme dans la mienne, vous avez quelques bonnes gourmandes.',
            ),
            array
            (
              'id' => '118',
              'rank' => '-3',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'M. Peillon:	Il y a des grand maître de l\'érotisme ici ?<br/><br/>J-M:		Oui! La pelle, la truelle, hein Batiste?<br/><br/>M. Peillon:	Hmm, vous êtes le bienvenu.<br/><br/>Batiste:		Non ça c\'est Jean-Marc.<br/><br/>M. Peillon:		Ah c\'est un frustré ? C\'est ce que j\'aime à Epita, cette troisième mi-temps dans les vestiaires.<br/>',
            ),
            array
            (
              'id' => '119',
              'rank' => '6',
              'author' => 'Robin Nozay',
              'context' => 'In English class.',
              'content' => 'Seven hunched... comment on dit "et" ?',
            ),
            array
            (
              'id' => '120',
              'rank' => '1',
              'author' => 'j00',
              'context' => 'Parlant du "superbe" accent anglais de Spycam.',
              'content' => 'Putain, il y a du sang qui coule de mes oreilles là.<br/>...<br/>J\'ai envie de me pendre sérieux.<br/>',
            ),
            array
            (
              'id' => '121',
              'rank' => '-6',
              'author' => 'Robin Nozay',
              'context' => '',
              'content' => 'Mme Zellagui:	Bon Monsieur Durand, arrêtez de rire.<br/><br/>Robin:		Vous sortez du rang!',
            ),
            array
            (
              'id' => '122',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Faut que j\'arrive à dégazer. <i>(Lapsus sur "dégager", cours sur les graphes...)</i>',
            ),
            array
            (
              'id' => '123',
              'rank' => '7',
              'author' => 'M. Christophe Boullay',
              'context' => 'Boullay fermant la porte à cause d\'ISBPPettes faisant du bruit. Il se rend compte qu\'il y a un verrou',
              'content' => 'Ah ah, comme ça personne ne saura !',
            ),
            array
            (
              'id' => '124',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => 'Parlant d\'un sommet ayant un lien avec tous les sommets d\'un graphe',
              'content' => 'JM: Oh le batard<br/><br/>/* 5 minutes de reflexion */<br/><br/>Krisboul: Je ne sais pas... si on peut le traiter de ça...',
            ),
            array
            (
              'id' => '125',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Là je suis obligé de tous me les taper.',
            ),
            array
            (
              'id' => '126',
              'rank' => '5',
              'author' => 'Promethe',
              'context' => '',
              'content' => 'M. Bouchet:	C\'est le bus quoi ?<br/><br/>Prom:		Le bus Magique !<br/>',
            ),
            array
            (
              'id' => '127',
              'rank' => '-1',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'On va l\'appeler... bit de repos.',
            ),
            array
            (
              'id' => '128',
              'rank' => '8',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'Si je parlais en... silence, vous ne comprendriez pas grand chose à ce que je veux dire.',
            ),
            array
            (
              'id' => '129',
              'rank' => '6',
              'author' => 'elFahme',
              'context' => 'Parlant d\'une gomme.',
              'content' => 'A chaque fois vous la défoncez par derrière vachement fort.',
            ),
            array
            (
              'id' => '130',
              'rank' => '5',
              'author' => 'M. O.R',
              'context' => 'Parlant d\'un théorème de maths bien sûr.',
              'content' => 'Là je vous laisse faire un truc... j\'ai envie de dire intime.',
            ),
            array
            (
              'id' => '131',
              'rank' => '1',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'Mailez-moi pour la fenêtre !',
            ),
            array
            (
              'id' => '132',
              'rank' => '1',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'Ah, j\'écris avec mes doigts, faudrait que je change de craie.',
            ),
            array
            (
              'id' => '133',
              'rank' => '9',
              'author' => 'M. O.R',
              'context' => 'Parlant d\'un objet mathématique.',
              'content' => 'Oh! C\'est un bel objet, waah !<br/><br/><i>Il se colle et se frotte au tableau...</i>',
            ),
            array
            (
              'id' => '134',
              'rank' => '5',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'On somme des "inférieur ou égal", ouch, c\'est baroque ça.',
            ),
            array
            (
              'id' => '135',
              'rank' => '5',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Warren:	Euh, pourquoi G(graphe) c\'est une variable ?<br/><br/>Krisboul: Parce que t\'es dans une procédure. [...] Putain c\'est complètement con ce que je viens de dire.',
            ),
            array
            (
              'id' => '136',
              'rank' => '-1',
              'author' => 'M. Christophe Boullay',
              'context' => 'Avec un bel accent allemand.',
              'content' => 'Entier t, c\'est un sommet, le "sommet de Testination"',
            ),
            array
            (
              'id' => '137',
              'rank' => '2',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'L\'algèbre linéaire c\'est un peu comme l\'hiver au coin du feu, alors que l\'arithmétique c\'est plus l\'été, le soleil, la plage...',
            ),
            array
            (
              'id' => '138',
              'rank' => '-3',
              'author' => 'M. David Bouchet',
              'context' => 'Parlant de gens appuyant sur des boutons poussoirs.',
              'content' => 'Les gens, ils font ce qu\'ils veulent mais ils ne méritent pas de mourir pour ça. ',
            ),
            array
            (
              'id' => '139',
              'rank' => '2',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'Faire les choses une fois lentement, ça va plus vite que de les faire deux fois vite.',
            ),
            array
            (
              'id' => '140',
              'rank' => '-1',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'Vous pouvez regarder autant de bouteilles d\'eau que vous voulez mais seulement en dehors du TD.',
            ),
            array
            (
              'id' => '141',
              'rank' => '1',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => '',
              'content' => 'Vous prenez un fils, vous lui donnez un papa, vous le faites adopter et puis vous l\'éclatez !',
            ),
            array
            (
              'id' => '142',
              'rank' => '1',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'Des fois je me dis... c\'est moi qui doit être spécial...<br/><br/>[...]<br/><br/>Je vous donnerai des boules...',
            ),
            array
            (
              'id' => '143',
              'rank' => '0',
              'author' => 'M. O.R',
              'context' => 'Parlant de Gershgorn et de sa vie.',
              'content' => 'Euh oui... mais qu\'est-ce que je raconte ?',
            ),
            array
            (
              'id' => '144',
              'rank' => '-2',
              'author' => 'M. Marwan Burelle',
              'context' => '',
              'content' => 'Je saute tous les espaces que je peux rencontrer.',
            ),
            array
            (
              'id' => '145',
              'rank' => '0',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'C\'est la première fois qu\'on a un lemme comme ça... c\'est comme si... je pouvais presque le palper.',
            ),
            array
            (
              'id' => '146',
              'rank' => '2',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => 'M. Peillon: Je peux entrer ?<br/><br/>Bob: Euh, non on a pas fini.<br/><br/>Warren: OMG, on vire le prof.',
            ),
            array
            (
              'id' => '147',
              'rank' => '-8',
              'author' => 'M. O.R',
              'context' => '',
              'content' => 'Il faut ventiler !',
            ),
            array
            (
              'id' => '148',
              'rank' => '7',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'On va dire que je suis le composant principal et vous, vous êtes des petits périphériques avec des petites mémoires et très peu de kilobits.',
            ),
            array
            (
              'id' => '149',
              'rank' => '1',
              'author' => 'Segolène',
              'context' => 'En cours d\'anglais.',
              'content' => 'C\'est génial la science, il y a des trucs que tu croies pas croyable qui en fait sont croyables.',
            ),
            array
            (
              'id' => '150',
              'rank' => '-4',
              'author' => 'M. Michel Petit',
              'context' => 'En méthodologie avec les A1 durant une explication de mot.',
              'content' => 'La xénographie c\'est quoi ?<br/><br/>C\'est le mode de reproduction des...<br/><br/><br/><br/>... des documents.',
            ),
            array
            (
              'id' => '151',
              'rank' => '2',
              'author' => 'Redox',
              'context' => '',
              'content' => 'Ce que tu dis c\'est sûrement très bon, mais je comprends rien.',
            ),
            array
            (
              'id' => '152',
              'rank' => '1',
              'author' => 'Jean-Marc Le Roux',
              'context' => 'Avec un ton méprisant.',
              'content' => 'C\'est des entrées parallèles. Parallèle, ça veut dire qu\'on les croise pas.',
            ),
            array
            (
              'id' => '153',
              'rank' => '0',
              'author' => 'Jean-Marc Le Roux',
              'context' => '',
              'content' => 'Jean-Marc : Avec ton pote qui fait que se gratter...<br/><br/>Jean-Marc : Mattou c\'est Frot\'man.<br/><br/>Damien : C\'est un gratteur, et alors ?<br/><br/>Damien : C\'est sympa pour les jeux à gratter.<br/><br/>Jean-Marc : Pfffffffffff...<br/><br/>Jean-Marc : Ouais, bin il est plus Solitaire que Millionnaire !',
            ),
            array
            (
              'id' => '154',
              'rank' => '3',
              'author' => 'Mattou',
              'context' => '',
              'content' => 'Warren: J\'aimerais pas avoir le dos courbé plus tard. Ca me ferait mal au cul !<br/><br/>Mattou: Et tu le free quand ? Ya un leak là !<br/><br/>/* Relire la phrase plusieurs fois à haute voix pour comprendre */',
            ),
            array
            (
              'id' => '155',
              'rank' => '2',
              'author' => 'Jonathan P.',
              'context' => 'Parlant des cadeaux de Noël.',
              'content' => 'j00 - J\'ai acheté 4 Go de RAM pour mon portable.<br/><br/>pheteon - Sale gamer !<br/><br/>j00 - Même pas, c\'est pour me forcer à installer Windows Server 64 bits :x',
            ),
            array
            (
              'id' => '156',
              'rank' => '10',
              'author' => 'Un sup...',
              'context' => '',
              'content' => 'Mais je sais ce que c\'est Linux, c\'est un truc où il n\'y a pas de bureau.',
            ),
            array
            (
              'id' => '157',
              'rank' => '-11',
              'author' => 'lalien (vu_c)',
              'context' => 'Sur son Pseudo MSN : "en revisions de partiels".<br/><br/>[Note de l\'admin: ce mec s\'est auto-quoté -_-\']',
              'content' => 'Petit Chinois... se bourre de physique... aimerait bien que ça soit autre chose...',
            ),
            array
            (
              'id' => '158',
              'rank' => '2',
              'author' => 'Woodylo',
              'context' => 'En parlant du fait que les Spe A2 ont reçu leurs notes d\'algo plus d\'une semaine plus tard après le reste de la promo.',
              'content' => 'Marwan est sûrement en train de se recoder un OCR pour passer vos copies à la moulinette !',
            ),
            array
            (
              'id' => '159',
              'rank' => '23',
              'author' => 'M. Christophe Boullay',
              'context' => 'En parlant de l\'algorithme de Dijkstra.',
              'content' => 'Et là, tel les soeurs Halliwell, je supprime la source !',
            ),
            array
            (
              'id' => '160',
              'rank' => '2',
              'author' => 'Mooris aka sandjey',
              'context' => 'Lors d\'une révision d\'archi sur le 68000.',
              'content' => 'Sandjey: Pff ! Tu te rends compte tout ce qu\'on a fait ? Tout ça pour debugger une feuille !',
            ),
            array
            (
              'id' => '161',
              'rank' => '2',
              'author' => 'bour_a',
              'context' => 'Sur MSN.',
              'content' => 'Parso: Gabriel ?<br/><br/>Parso: C\'est le père de Madmass ?',
            ),
            array
            (
              'id' => '162',
              'rank' => '6',
              'author' => 'Mefyl - Quentin Hocquet',
              'context' => '',
              'content' => 'En fait un ordinateur c\'est comme un enfant autiste. Tout ce qui est con, il le fait vachement bien.',
            ),
            array
            (
              'id' => '163',
              'rank' => '3',
              'author' => 'elFahme',
              'context' => '',
              'content' => 'Moi je n\'aime pas avoir de gros trous.',
            ),
            array
            (
              'id' => '164',
              'rank' => '-2',
              'author' => 'Groupe TRDC',
              'context' => 'À propos d\'un câble RJ-45 relié au routeur.',
              'content' => '- Minimoi : Où est internet?<br/><br/>- Claire : Je suis assise dessus !<br/><br/>- Farden : WTF ?<br/><br/>- Claire : Putain j\'ai des grosses fesses...',
            ),
            array
            (
              'id' => '165',
              'rank' => '0',
              'author' => 'Jérôme Respaut',
              'context' => '',
              'content' => 'Windows c\'est l\'avenir.',
            ),
            array
            (
              'id' => '166',
              'rank' => '2',
              'author' => 'Fabien Choutal',
              'context' => 'Après un "J\'ai niqué le projet".',
              'content' => 'J\'ai pas tout niqué, j\'ai "modifié".',
            ),
            array
            (
              'id' => '167',
              'rank' => '9',
              'author' => 'Fabien Choutal',
              'context' => '',
              'content' => '- Jérôme: T\'as qu\'à faire un rm étoile sauf le fichier.<br/><br/>- Fabien: Tu connais la commande \'rmsauf\' toi ?',
            ),
            array
            (
              'id' => '168',
              'rank' => '11',
              'author' => 'Warren Seine',
              'context' => 'Projet IBC++, Cédric R.(spycAm) n\'a toujours pas touché une ligne de code pour un rendu censé être dans 36heures.',
              'content' => 'Annonce :<br/><br/>~ Bonjour,    Le rendu d\'IBC++ aura lieu le Dimanche 23 Mars 2008 a 12h00 au lieu du mercredi 19 mars 2008.    Un deuxième rendu intermédiaire sera ouvert le mercredi 19 mars entre  12h45 et 13h30.    N\'oubliez pas de bien équilibrer votre charge de travail entre IBC++ et TC4.    Cordialement,<br/><br/><br/><br/>Warren: OMFG :D<br/><br/>Warren: TROUVE UN PUTAIN DE MOYEN D\'EMPÊCHER CÉDRIC DE LIRE CETTE NEWS !',
            ),
            array
            (
              'id' => '169',
              'rank' => '0',
              'author' => 'Chery',
              'context' => '',
              'content' => 'Chery : moi je suis 100% camerounaisse<br/><br/>Chery : camerounaise<br/><br/>Chery : mais je resemble à une chinoise.',
            ),
            array
            (
              'id' => '170',
              'rank' => '0',
              'author' => 'Manuel Martin',
              'context' => 'Parlant des minis ordinateurs des années 70.',
              'content' => '- Prof: Est-ce que quelqu\'un se rappelle d\'un fabricant de minis ?<br/><br/>- Manu: Aston Martin.',
            ),
            array
            (
              'id' => '171',
              'rank' => '2',
              'author' => 'M. Jean Noël Gorge (profonde)',
              'context' => 'Parlant hardware et Internet.',
              'content' => 'Internet c\'est pas que du hard.',
            ),
            array
            (
              'id' => '172',
              'rank' => '2',
              'author' => 'Fabien Choutal ',
              'context' => 'K20 ayant des mèches rouges.',
              'content' => 'Les cheveux de K20 ça fait un peu coiffure de grand-mère.',
            ),
            array
            (
              'id' => '173',
              'rank' => '56',
              'author' => 'M. Patrick Peillon',
              'context' => '',
              'content' => '- Patrick : J\'ai passé les 60 ans...<br/><br/>- Un éleve : Et c\'est dur?<br/><br/>- Patrick : Non, plus très dur, justement...',
            ),
            array
            (
              'id' => '174',
              'rank' => '7',
              'author' => 'Uriel Corfa',
              'context' => 'Parlant du fait qu\'on puisse lire les bulletins de vote jetés.',
              'content' => 'Faudrait des poubelles write-only.',
            ),
            array
            (
              'id' => '175',
              'rank' => '9',
              'author' => 'Un Bocalien',
              'context' => 'Durant la retransmission à Villejuif du débat durant les élections du BDE, le wifi ne cesse de tomber.',
              'content' => 'Putain de Wifi bordel.',
            ),
            array
            (
              'id' => '176',
              'rank' => '11',
              'author' => 'M. Patrick Siarry',
              'context' => 'À Robert Rafie.',
              'content' => 'Petit con.',
            ),
            array
            (
              'id' => '177',
              'rank' => '5',
              'author' => 'Vincent Camus',
              'context' => 'Tiger, C++...',
              'content' => '- Johan Soula : Ah c\'est ca, mutable c\'est const qu\'on peut modifier qu\'une fois ?<br/><br/>- Vincent Camus : Et deux fois c\'est mutable mutable ?<br/><br/>',
            ),
            array
            (
              'id' => '178',
              'rank' => '0',
              'author' => 'Johan Soula',
              'context' => 'Après un test réussi.',
              'content' => 'Oh putain je vais le niquer (parlant du projet) ! Il veut qu\'on se relâche.',
            ),
            array
            (
              'id' => '179',
              'rank' => '18',
              'author' => 'M. Patrick Siarry',
              'context' => 'Dix decibels en amphi.',
              'content' => 'S\'il vous plaît, un petit peu moins de silence !',
            ),
            array
            (
              'id' => '180',
              'rank' => '8',
              'author' => 'Nicolas Teck',
              'context' => 'En parlant du recrutement des YAKAs.',
              'content' => 'C\'est pas comme si je t\'emmenais dans les toilettes et pom, pom, pom...',
            ),
            array
            (
              'id' => '181',
              'rank' => '-2',
              'author' => 'Vincent Nguyen',
              'context' => 'Mister Vincent n\'a pas fait de courses depuis quelques mois (rush TC et larguage quand tu nous tiens !) et fait sa liste de courses pour ses parents a 1h30 du mat\' samedi alors que ses parents arrivent sans doute l\'aprem.<br/><br/><br/><br/>PS : la liste ultime avec des fraises tagada, des kinders et la citation... puis des saucisses du Nord !',
              'content' => 'Vincent Nguyen : "Ah mince, il y avait un truc super important que je voulais demander à mes parents... mince c\'est quoi ?"<br/><br/>Ah oui ! Des yaourts.  <br/><br/>(cherchant encore...)<br/><br/>Vincent : en plus j\'y avais pensé hier soir... puis après c\'était le matin.',
            ),
            array
            (
              'id' => '182',
              'rank' => '7',
              'author' => 'DeeCee',
              'context' => 'Le programme du 2ème semestre pour les Ing1 de l\'année prochaine (2011).',
              'content' => 'Brainfuck en Brainfuck, c\'est du code contemporain.',
            ),
            array
            (
              'id' => '183',
              'rank' => '-10',
              'author' => 'Diniko',
              'context' => '',
              'content' => 'Je baise qui j\'veux.',
            ),
            array
            (
              'id' => '184',
              'rank' => '-12',
              'author' => 'Jonathan Ghalmi',
              'context' => 'Intégration en SUP.',
              'content' => 'Beuuuurrr (vomit).',
            ),
            array
            (
              'id' => '185',
              'rank' => '-2',
              'author' => 'M. Christian Viallet',
              'context' => '',
              'content' => 'En lisant ce truc là, ce qui m\'avait tiré l\'oeil...',
            ),
            array
            (
              'id' => '186',
              'rank' => '34',
              'author' => 'Pedro',
              'context' => '',
              'content' => 'Je cherche un MTI, ceux qui colorient les triangles.',
            ),
            array
            (
              'id' => '187',
              'rank' => '6',
              'author' => 'Mankalas',
              'context' => '',
              'content' => '- Michaël: " Ecoute-moi bien mon petit José, tu baises les ménagères. Bien, tu dois avoir le cul qui brille.  Mais c\'est pas ça qu\'on appelle la classe. "<br/><br/>- Kypper: Eh chapeau. Elle n\'est pas facile à placer, celle-là.<br/><br/>- Mankalas: CTB',
            ),
            array
            (
              'id' => '190',
              'rank' => '13',
              'author' => 'Alexandre Brooks',
              'context' => '',
              'content' => 'Un GISTR qui retape son année, on le met dans un microprocesseur...<br/><br/>...<br/><br/>Ca devient un registre !',
            ),
            array
            (
              'id' => '191',
              'rank' => '3',
              'author' => 'Damien Leduc',
              'context' => 'En attendant de partir en stage de fin d\'études.',
              'content' => 'Septembre sera fini en décembre, quand nous quitterons ce monde de fous.',
            ),
            array
            (
              'id' => '192',
              'rank' => '8',
              'author' => 'Tsuna  et Mefyl',
              'context' => '',
              'content' => '- tsuna: me.shower() && me.goto(World.France.Paris.EPITA.LRDE.L1);<br/><br/>- mefyl: cat me | shower | dress<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv me /world/europe/france/paris/epita/lrde/l1<br/><br/>- mefyl: echo "Hé galère" >> /dev/speak<br/><br/>- tsuna: gmv: cannot move `me\' to<br/>`/world/europe/france/paris/epita/lrde/l1\': No such file or directory<br/><br/>- tsuna: tu voulais dire /dev/world/... ?<br/><br/>- tsuna: sed \'s/hair/[some hairstyle here]/\' -i me <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&& chroot /dev/world/europe/france/paris/epita/lrde/l1<br/><br/><br/><br/>Je préfère quand même l\'API C++.',
            ),
            array
            (
              'id' => '193',
              'rank' => '28',
              'author' => 'M. Akim Demaille',
              'context' => '',
              'content' => '- Administration: À l\'avenir, tout élève resté dans les locaux pendant une alarme est susceptible de se faire sanctionner avec sévérité.<br/><br/>- Akim: Immolation par le feu ! ',
            ),
            array
            (
              'id' => '194',
              'rank' => '2',
              'author' => 'Maître de stage',
              'context' => '13h15, mon tuteur de stage et moi-même sommes plongés dans notre boulot. Un collègue s\'amène pour nous proposer d\'aller manger.',
              'content' => 'Tu remarqueras qu\'en info, quand on bosse on n\'a jamais faim... On ne se rend pas compte du temps qui passe. Mais par contre, quand tu fous rien ou que tu surfes, ben à 13h, tu as faim.',
            ),
            array
            (
              'id' => '195',
              'rank' => '3',
              'author' => 'pidanc_j',
              'context' => '',
              'content' => 'Diam\'s elle est trop bonne.<br/><br/>Elle a le coeur solide comme le diamant, parce que le diamant ca se raye pas t\'as vu.<br/><br/>',
            ),
            array
            (
              'id' => '196',
              'rank' => '0',
              'author' => 'tricot_b',
              'context' => '',
              'content' => 'Epita, c\'est le Franprix des nanas, il n\'y a jamais le choix.',
            ),
            array
            (
              'id' => '197',
              'rank' => '6',
              'author' => 'zhan_s',
              'context' => 'Dans le wagon-bar d\'un TGV, une queue impressionante pour un simple sandwich.',
              'content' => '\'tain ça fait chier qu\'elle soit pas en LIFO.',
            ),
            array
            (
              'id' => '198',
              'rank' => '0',
              'author' => 'LLB',
              'context' => '',
              'content' => '- yabo : [13:06:08] le-bru_l : J\'ai contribué au bien de l\'informatique.<br/><br/>Bon allez, le contexte : Il vient d\'envoyer un patch à Microsoft pour un outil .Net<br/><br/>- LLB: Rectification : j\'ai fait une contribution à un outil gratuit, open-source et portable, qui représente clairement le futur de l\'informatique. J\'ai ajouté une fonctionnalité dans un compilateur, et je me remercierai pendant des années si elle est acceptée.  :) <br/><br/>Après, je suis prêt à en débattre avec n\'importe qui.',
            ),
            array
            (
              'id' => '199',
              'rank' => '1',
              'author' => 'lorin_d',
              'context' => '',
              'content' => '8-----lol<br/><br/>8--lol<br/><br/>8----lol<br/><br/>Bon c\'est pas évident de faire du pr0n en ascii.',
            ),
            array
            (
              'id' => '200',
              'rank' => '0',
              'author' => 'yabo',
              'context' => 'yabo, Galeyte et Matthieu Bucchianeri rentrent pépère dans le métro. Une bande de mecs allumés entrent et commencent a débiter des conneries.<br/><br/><br/><br/>Soudain, leur leader se tourne vers yabo et lui branle un charabia parlant de chataignes.',
              'content' => 'Ça pue de la bite !',
            ),
            array
            (
              'id' => '201',
              'rank' => '1',
              'author' => 'Matthieu Bucchianeri et yabo',
              'context' => 'Quelle synchro o/',
              'content' => '(23:43:09) bucchi_m: et l\'eradication de l\'espece humaine par la sodomie<br/><br/>(23:43:09) yabo: l\'éradication de l\'espèce humaine par la sodomie ',
            ),
            array
            (
              'id' => '202',
              'rank' => '2',
              'author' => 'bucchi_m && yabo',
              'context' => '',
              'content' => '- bucchi_m: C\'est le temps de l\'échange de bites entre nous deux.<br/><br/>- yabo: Je te propose un duel pénien pour nous départager. Rejoins moi à 3h sous le pont de Tolbiac, amène tes témoins.',
            ),
            array
            (
              'id' => '203',
              'rank' => '0',
              'author' => 'van-no_m',
              'context' => '',
              'content' => 'J\'arrive pas à passer l\'anti-bot pour m\'inscrire sur un forum :<br/><br/>"6 + 2 ? the answer must be in english (ex: six, two)"',
            ),
            array
            (
              'id' => '204',
              'rank' => '6',
              'author' => 'Mefyl',
              'context' => 'Un chat au LRDE.',
              'content' => '\'tain il est tout maigre ce chat! On dirait Tsuna :s',
            ),
            array
            (
              'id' => '205',
              'rank' => '3',
              'author' => 'mogene_a',
              'context' => '',
              'content' => '- Tu touches tes allocations familiales ? - Non, je touche mes allocations mémoire.',
            ),
            array
            (
              'id' => '206',
              'rank' => '-1',
              'author' => 'dagnas_f',
              'context' => '',
              'content' => 'J\'ajouterai qu\'à Epitech Bordeaux, le mot piscine prend tout son sens à chaque fois qu\'il pleut, vu l\'état de la toiture et des plafonds!',
            ),
            array
            (
              'id' => '207',
              'rank' => '1',
              'author' => 'M. Rolland Levillain',
              'context' => '',
              'content' => '- pierro_i: Woohoo!  J\'ai réussi à installer Java en userland !<br/><br/>- levill_r: Ah bah tu pourras le mettre sur ton CV ! Y\'en a bien qui mettent "bonne maîtrise de winzip".',
            ),
            array
            (
              'id' => '209',
              'rank' => '4',
              'author' => 'Tsuna',
              'context' => 'Réponse au post suivant:<br/><br/>Le site ne répond toujours pas et il ne reste que 6 minutes avant le rendu.<br/><br/>Pourrait-on décaler le rendu le temps que le site soit operationnel ?<br/><br/>Merci beaucoup.',
              'content' => 'Balise, signature, fallait rendre plus tôt.',
            ),
            array
            (
              'id' => '210',
              'rank' => '1',
              'author' => 'chando_s',
              'context' => '',
              'content' => 'Une base décimale c\'est 0 à 16 ou 0 à 15?',
            ),
            array
            (
              'id' => '211',
              'rank' => '0',
              'author' => 'Anne Onyme',
              'context' => '',
              'content' => 'P: Que pensez-vous de Linux ?<br/><br/>B: C\'est pas un OS de pédé, des fois y\'a pas d\'icônes.',
            ),
            array
            (
              'id' => '212',
              'rank' => '2',
              'author' => 'Mankalas et Damien Leduc',
              'context' => '',
              'content' => '- Mankalas: Quand je suis bourré, je montre ma bite.<br/><br/>- Damien: Et le pire, c\'est que c\'est vrai, quelque soit l\'endroit d\'ailleurs.<br/><br/>- Mankalas: Quand on était tous les deux à l\'appart\', j\'avais même pas besoin d\'alcool. Hein grand fou ?',
            ),
            array
            (
              'id' => '214',
              'rank' => '1',
              'author' => 'Benji [ex-SCIA]',
              'context' => '',
              'content' => 'Les universités US, c\'est des endroits où un Russe enseigne les maths à des Chinois.',
            ),
            array
            (
              'id' => '215',
              'rank' => '27',
              'author' => 'Jean',
              'context' => '',
              'content' => 'H: Jean, il est à combien le dollar ?<br/><br/>J: man ascii<br/><br/>H: ...',
            ),
            array
            (
              'id' => '216',
              'rank' => '-3',
              'author' => 'Tuomo Valkonen',
              'context' => '(C\'est le créateur de Ion)',
              'content' => 'Happy new year etc. to those who deserve the greeting.',
            ),
            array
            (
              'id' => '217',
              'rank' => '2',
              'author' => 'raynau_q',
              'context' => '',
              'content' => 'Je trouve ça dur de tirer avec la queue !',
            ),
            array
            (
              'id' => '218',
              'rank' => '1',
              'author' => 'Shomaa',
              'context' => '',
              'content' => 'DarkSoul: c\'est quoi ton IP?<br/><br/>DarkSoul: on va régler ton forward de ports<br/><br/>Shomaa: 127.0.0.1<br/><br/>DarkSoul: ...<br/><br/>Shomaa: Ben quoi, j\'ai que ça.',
            ),
            array
            (
              'id' => '219',
              'rank' => '3',
              'author' => 'Rubix',
              'context' => '',
              'content' => '- Benji: Au Japon, au lieu de parler des langues bizarres comme le japonais, ils devraient parler en Python, c\'est plus concis.<br/><br/>- Rubix: Ils sont pas assez égoïstes pour dire self aussi souvent.',
            ),
            array
            (
              'id' => '220',
              'rank' => '4',
              'author' => 'Jean-Marc Le Roux',
              'context' => 'En parlant de quelqu\'un [F.C]',
              'content' => 'Il a vécu dans l\'ombre du sexe de son frère. C\'est comme un parasol phallique.',
            ),
            array
            (
              'id' => '221',
              'rank' => '3',
              'author' => 'Johan Soula',
              'context' => '',
              'content' => 'Un Dieu a dit: "Je nique pas, je modifie".',
            ),
            array
            (
              'id' => '222',
              'rank' => '2',
              'author' => 'Fabien Choutal',
              'context' => '6h du matin, Bob l\'a aidé, donc Fabien doit l\'embrasser pour le remercier.',
              'content' => 'Une pipe j\'veux bien, mais là nan.',
            ),
            array
            (
              'id' => '223',
              'rank' => '5',
              'author' => 'M. Julien Quintard',
              'context' => '',
              'content' => 'Quand je parle de TCP ou UDP, j\'espère que vous savez de quoi je parle, sinon je me coupe les veines.',
            ),
            array
            (
              'id' => '224',
              'rank' => '-2',
              'author' => 'Un bocalien',
              'context' => 'Jean-Marc et Quentin trollent sur l\'integration de Flex dans Firefox dans le couloir près de l\'escalier au KB.',
              'content' => 'On vous entend depuis le bocal, c\'est pas possible !',
            ),
            array
            (
              'id' => '225',
              'rank' => '5',
              'author' => 'Fabien Choutal',
              'context' => 'Parlant du fournisseur d\'accès Alice.',
              'content' => 'Prof: Chez Alice, ils sont pas bons.<br/><br/>Fabien: Elle est bonne quand même.',
            ),
            array
            (
              'id' => '226',
              'rank' => '22',
              'author' => 'M. Julien Quintard',
              'context' => 'Parlant de Leslie Lamport.',
              'content' => 'En 1978, il y a un mec qui a posé ses couilles et qui a dit : "Les mecs, vous faites de la merde".',
            ),
            array
            (
              'id' => '227',
              'rank' => '14',
              'author' => 'M. Julien Quintard',
              'context' => '',
              'content' => 'Le mode synchrone, c\'est le monde des bisounours.',
            ),
            array
            (
              'id' => '228',
              'rank' => '10',
              'author' => 'Yaka',
              'context' => '',
              'content' => 'Yaka: Xavier il est où le tampon?<br/><br/>Vincent: Euh la je veux rien dire mais un DTC serait parfait.',
            ),
            array
            (
              'id' => '229',
              'rank' => '7',
              'author' => 'Fabien Choutal',
              'context' => 'À la fin du j5 de la piscine java, a 00h30.',
              'content' => 'J\'aime pas trop qu\'on traite ma mère de tableau d\'entiers.',
            ),
            array
            (
              'id' => '230',
              'rank' => '3',
              'author' => 'Jonathan P.',
              'context' => 'Parlant de ceux qui participent a l\'Imagin\'Cup et qui sont censés valoriser l\'école (== ne font pas le rush de ce weekend mais se prélassent dans un sauna).',
              'content' => 'Jonathan: Ouais mais je valorise l\'école moi aussi.<br/><br/>Johan: Euh...<br/><br/>Jonathan: Ta gueule.',
            ),
            array
            (
              'id' => '240',
              'rank' => '2',
              'author' => 'Maxime Schmitt',
              'context' => 'Rush survivor, Base64.',
              'content' => 'Un byte, avec un "y", c\'est bien celui ou il y a huit octets ?',
            ),
            array
            (
              'id' => '241',
              'rank' => '16',
              'author' => 'M. Christian Dujardin',
              'context' => 'Parlant d\'un cours de réseau en Libre Choix.',
              'content' => 'C\'est avec un nouveau prof, pas Derridj, donc ça risque d\'être pas mal.',
            ),
            array
            (
              'id' => '242',
              'rank' => '-2',
              'author' => 'Jean-Marc Le Roux',
              'context' => 'En train d\'attendre qu\'une crêpe chauffe, Marc Fahmi aperçoit la main de Cédric Raud se diriger vers un petit bout de crêpe. La main de Marc, plus rapide que l\'éclair, s\'en saisit et le mange.',
              'content' => 'Mais Marc il est au ralentit pour tout dans sa vie, sauf manger.<br/>C\'est un peu un JarJar Binks Egyptien.',
            ),
            array
            (
              'id' => '243',
              'rank' => '2',
              'author' => 'Warren Seine',
              'context' => '',
              'content' => 'Jean-Marc: Pourquoi mon siège il vibre ?<br/><br/>Warren: C\'est le gode que tu as oublié de retirer de ton cul.',
            ),
            array
            (
              'id' => '244',
              'rank' => '0',
              'author' => 'Jean-Marc Le Roux',
              'context' => '',
              'content' => '- Jean-Marc: Je vais à Forest Hill moi.<br/><br/>- Warren: Ouais et alors, pourquoi tu me regardes avec un regard de tueur ?<br/><br/>- Jean-Marc: Parce que moi je deviens beau, toi tu fais pousser tes cheveux, moi je fais pousser mes muscles.',
            ),
            array
            (
              'id' => '245',
              'rank' => '3',
              'author' => 'preche_n',
              'context' => '',
              'content' => '- Bob: Il paraît que les mecs qui aiment les anchois ils aiment la bite. Tu aimes bien les anchois toi Nico ?<br/><br/>- preche_n: Non j\'aime pas les anchois. Pourtant qu\'est-ce que j\'aime la bite !',
            ),
            array
            (
              'id' => '246',
              'rank' => '-2',
              'author' => 'j00',
              'context' => 'Sur MSN.',
              'content' => 'Les regexp, ça passe mieux avec de la weed xD',
            ),
            array
            (
              'id' => '247',
              'rank' => '2',
              'author' => 'Warren Seine',
              'context' => 'En cours d\'Anglais.',
              'content' => '- Warren: Hamlet? Euh... it was a writer!<br/><br/>- Prof: No no, Shakespeare was the writer.',
            ),
            array
            (
              'id' => '248',
              'rank' => '7',
              'author' => 'M. Akim Demaille',
              'context' => 'Cours de logique formelle.',
              'content' => 'Les systèmes critiques, ceux dans lesquels il y a des vies humaines en jeu... ou de la thune. Le mot "critique" n\'a pas la même signification pour tout le monde.',
            ),
            array
            (
              'id' => '249',
              'rank' => '3',
              'author' => 'M. Thierry Géraud',
              'context' => 'Parlant d\'EpiQuote.',
              'content' => 'rhaa-la-la... je suis quasiment pas cité  :-(<br/><br/>ça sert à quoi que je dise des conneries en cours ? hein ?<br/><br/>(non mais !) ',
            ),
            array
            (
              'id' => '250',
              'rank' => '7',
              'author' => 'CeD',
              'context' => 'Justification envoyée à Pedro pour une absence d\'algo, il l\'a mal pris.',
              'content' => 'Bonjour,<br/><br/>J\'étais en finale départementale en équipe avec pidanc_j, de courses<br/><br/>de montgolfières catégorie vent nord-nord-est dans la Creuse.<br/><br/>Je n\'ai ainsi pas pu participer au cours.<br/><br/><br/><br/>Veuillez m\'en excuser.',
            ),
            array
            (
              'id' => '251',
              'rank' => '9',
              'author' => 'M. Didier Verna',
              'context' => 'Pendant le cours d\'OS, parlant des ordonnanceurs, comparant un processeur avec une caisse de supermarché.',
              'content' => '- Verna: Alors vous imaginez une petite vieille dame avec son paquet de pâtes, et vous avec quatre caddies pleins, ben vous la laissez passer, c\'est un processus léger. Mais si vous en avez 10000 petites vieilles qui attendent, on fait quoi ?<br/><br/>- CeD : on les killall.',
            ),
            array
            (
              'id' => '252',
              'rank' => '3',
              'author' => 'NellA',
              'context' => 'Facebook.',
              'content' => 'Ah ouais !<br/><br/>On m\'a enfin achetée !',
            ),
            array
            (
              'id' => '253',
              'rank' => '5',
              'author' => 'M. Julien Quintard',
              'context' => 'Cours de Systèmes-répartis...',
              'content' => 'Moi-même j\'ai du mal à comprendre l\'intérêt de ces algos alors vous les enseigner...',
            ),
            array
            (
              'id' => '254',
              'rank' => '11',
              'author' => 'M. Julien Quintard',
              'context' => 'Systèmes-répartis.',
              'content' => 'Si personne répond c\'est que les mecs plus fort que vous sont tous morts donc vous vous auto-élisez Leader, un peu comme les Ricains...',
            ),
            array
            (
              'id' => '255',
              'rank' => '24',
              'author' => 'M. Julien Quintard',
              'context' => 'Parlant du sujet d\'une thèse.',
              'content' => 'Voici les mails des mecs qui ont fait ça, vous pouvez leur dire que c\'est de la merde.',
            ),
            array
            (
              'id' => '256',
              'rank' => '5',
              'author' => 'Bertrand Ngoy',
              'context' => 'Dans le couloir, Marc Fahmi demande 20 centimes à Vincent, David et Bertrand',
              'content' => '- Bertrand: Oui tu l\'as là, la Vincent Team.<br/><br/>',
            ),
            array
            (
              'id' => '257',
              'rank' => '7',
              'author' => 'M. David Friquet',
              'context' => 'Conversation sur une moulette en Ruby : "Elle est toute petite, mais super efficace."',
              'content' => 'CMB! ... heu...',
            ),
            array
            (
              'id' => '258',
              'rank' => '11',
              'author' => 'Fabien Choutal',
              'context' => 'Après avoir fait la quête pour 20 centimes et revenant du distributeur les mains vides...',
              'content' => 'Je viens de subir un échec.',
            ),
            array
            (
              'id' => '259',
              'rank' => '-2',
              'author' => 'M. Reda Dehak',
              'context' => '',
              'content' => 'Faut pas mélanger les torchons et les serviettes dans le même panier.',
            ),
            array
            (
              'id' => '260',
              'rank' => '1',
              'author' => 'Hervé Cuche',
              'context' => '',
              'content' => 'Ca pousse comme des petits-pains.',
            ),
            array
            (
              'id' => '261',
              'rank' => '11',
              'author' => 'M. Julien Quintard',
              'context' => 'En cours de systèmes répartis',
              'content' => 'Si le server lache, vous vous bouffez les couilles.',
            ),
            array
            (
              'id' => '262',
              'rank' => '-1',
              'author' => 'NellA',
              'context' => 'Voulant profiter du soleil...',
              'content' => 'Viens on va se toucher dans un parc.',
            ),
            array
            (
              'id' => '263',
              'rank' => '-2',
              'author' => 'David Friquet',
              'context' => 'En TP de JAVA (hibernate)...',
              'content' => 'T\'as reussi à faire marcher le bouton "project" sous Netbeans?',
            ),
            array
            (
              'id' => '264',
              'rank' => '3',
              'author' => 'Piotr Pawlicki',
              'context' => 'Parlant des commentaires sur le Skyblog de Deecee...',
              'content' => 'C\'était le temps où tu pouvais écrire d\'une seule main et te branler de l\'autre tellement il manquait de lettres dans la phrase!',
            ),
            array
            (
              'id' => '266',
              'rank' => '1',
              'author' => 'DeeCee',
              'context' => 'En parlant a Kasia de lui meme',
              'content' => 'Je suis tellement beau goss que si j\'etais une fille, je sortirais avec moi meme !!!!',
            ),
            array
            (
              'id' => '267',
              'rank' => '3',
              'author' => 'Ben_j  ',
              'context' => 'Parlant de rentrer en boîte',
              'content' => 'Je pense qu\'à 2 mecs et 2 filles ça rentre tranquille.',
            ),
            array
            (
              'id' => '268',
              'rank' => '11',
              'author' => 'Fabien Choutal',
              'context' => '',
              'content' => '- Renaud: Tu mérites le fist par pendaison!<br/><br/>- Fabien: Ca veut rien dire en plus!<br/><br/>[... petit blanc de 5 secondes ...]<br/><br/>- Fabien: Ca veut rien dire hein?<br/><br/>',
            ),
            array
            (
              'id' => '269',
              'rank' => '4',
              'author' => 'Bob Rafie',
              'context' => 'En cours de Qualité, le prof annonce "... Vous savez, la qualité ça n\'a pas été inventé. Ça a été découvert !"',
              'content' => '- Et donc ils ont trouvé la qualité dans un puit.<br/><br/>- Tu te rends compte ? Dans un puit.<br/><br/>- Et après ils ont trouvé une centrale thermonucléaire dans un abribus !',
            ),
            array
            (
              'id' => '270',
              'rank' => '-2',
              'author' => 'Jonathan Ghalmi',
              'context' => '// What the fuck ?',
              'content' => 'On dirait plutot un tigre qui a mangé un curé. Bin oui y\'a des écureuils en asie...',
            ),
            array
            (
              'id' => '271',
              'rank' => '1',
              'author' => 'Vincent Nguyen (webmaster epiquote)',
              'context' => 'Le site epiquote est down :',
              'content' => 'Un élève : Cure demande pourquoi epiquote est down.<br/><br/>Vincent : ils acceptent pas ma carte bleue  -_-',
            ),
            array
            (
              'id' => '272',
              'rank' => '1',
              'author' => 'M. Jeff Lambo',
              'context' => 'En cours de moteur de recherche.',
              'content' => 'Alors vous avez droit au Java, C#, tout ce qui finit en sharp, par contre évitez de coder en écharpe.',
            ),
            array
            (
              'id' => '273',
              'rank' => '5',
              'author' => 'Cédric R. et Warren Seine',
              'context' => 'Révisant pour le partiel de MOB2.',
              'content' => '- Cédric: Faire des Design Patterns c\'est facile, il suffit de prendre des crayons foncés.<br/><br/>- Warren: En plus c\'est faux: il faut des crayons clairs!',
            ),
            array
            (
              'id' => '274',
              'rank' => '10',
              'author' => 'Etienne Folio',
              'context' => 'S\'approchant tranquillement de Warren Seine',
              'content' => 'Bon je te previens, il y a une rumeur qui court sur nous deux alors fait comme si de rien n\'était.',
            ),
            array
            (
              'id' => '275',
              'rank' => '9',
              'author' => 'M. Julien Quintard',
              'context' => 'Dans l\'introduction du cours de peer-to-peer.',
              'content' => 'Le peer-to-peer, c\'est pas fait que pour download des films de cul ou la dernière saison de Lost.',
            ),
            array
            (
              'id' => '276',
              'rank' => '-1',
              'author' => 'M. Julien Quintard',
              'context' => 'En énumérant le plan du cours sur le p2p.',
              'content' => '...<br/><br/>Après, je vous parlerais de ma vie, mon oeuvre.',
            ),
            array
            (
              'id' => '277',
              'rank' => '5',
              'author' => 'M. Julien Quintard',
              'context' => 'En parlant du système de recherche de Youtube.',
              'content' => 'Vous tapez "Barry White en string", vous cherchez "Barry White en string" et vous avez 0 réponses ... perso, j\'ai pas essayé.',
            ),
            array
            (
              'id' => '278',
              'rank' => '8',
              'author' => 'M. Julien Quintard',
              'context' => 'En supposant que le siège de Youtube et les serveurs sont dans un seul bâtiment.',
              'content' => 'Le bâtiment se prend une bombe atomique, bah c\'est un peu la merde: y\'a plus d\'accès aux videos... C\'est aussi la merde pour les gens à coté... ils sont morts.',
            ),
            array
            (
              'id' => '279',
              'rank' => '0',
              'author' => 'M. Sébastien Benoît',
              'context' => 'Pendant une soutenance du projet Zappy (TEK2), dans une discussion à propos des langages de programmation.',
              'content' => 'Le Lisp c\'est à peu près aussi efficace que le Brainfuck ou le Whitespace.',
            ),
            array
            (
              'id' => '280',
              'rank' => '10',
              'author' => 'M. Julien Quintard',
              'context' => 'En faisant tomber la brosse du tableau sur son pull pendant un cours sur l\'architecture des microprocesseurs.',
              'content' => 'Putain, y\'a la brosse qui m\'a giclé dessus! Maintenant j\'ai du foutre plein le pull!',
            ),
            array
            (
              'id' => '281',
              'rank' => '-3',
              'author' => 'Cédric R.',
              'context' => 'En train de faire genre il va coder',
              'content' => 'Cédric : Mon ecran ne marche plus !<br/><br/>Jean-Marc : Han, genre il marche plus ?<br/><br/>Cédric : Nan c\'est juste qu\'il n\'affiche plus rien...',
            ),
            array
            (
              'id' => '282',
              'rank' => '-3',
              'author' => 'M. Didier Verna',
              'context' => 'En parlant d\'un PC tout neuf ...',
              'content' => 'Un PC Top moumoute de la mort qui tue !',
            ),
            array
            (
              'id' => '283',
              'rank' => '-11',
              'author' => 'M. Didier Verna',
              'context' => 'En parlant de je ne sais plus quel principe ...',
              'content' => 'A fond les gamelles !',
            ),
            array
            (
              'id' => '284',
              'rank' => '11',
              'author' => 'M. David Bouchet',
              'context' => '',
              'content' => 'Nous allons voir toutes les façons de lancer des bits.',
            ),
            array
            (
              'id' => '285',
              'rank' => '27',
              'author' => 'M. Christophe Boullay',
              'context' => 'En faisant l\'appel',
              'content' => 'O\'Connor<br/><br/>[blanc]<br/><br/>Sarah O\'Connor ?<br/><br/>Terminator l\'a buté ?',
            ),
            array
            (
              'id' => '286',
              'rank' => '3',
              'author' => 'Pauline Donon',
              'context' => '',
              'content' => '- Laurent: Hey Pauline, je t\'aime<br/><br/>- Pauline: Quoi? Qu\'est-ce que j\'ai fait encore?',
            ),
            array
            (
              'id' => '288',
              'rank' => '-3',
              'author' => 'fuhrer_j',
              'context' => 'Sur un forum ou des élèves se plaignaient de l\'ADM.',
              'content' => 'De toute façon, si l\'ADM ne l\'a pas fait, c\'est qu\'il y a une raison! Et vous avez tort de penser que c\'est juste par flemme/mauvaise volonté!!!',
            ),
            array
            (
              'id' => '291',
              'rank' => '13',
              'author' => 'Jonathan P.',
              'context' => '',
              'content' => 'J\'aurais dû entrer dans la Mafia.<br/><br/>J\'me serais fait du fric, des putes et d\'la coke.<br/><br/>Avec plein de serveurs Sun sous Gentoo dans ma cave.',
            ),
            array
            (
              'id' => '292',
              'rank' => '-1',
              'author' => 'M. Christophe Boullay',
              'context' => 'en nommant une fonction camL ',
              'content' => 'alors soit j\'ai I soit j\'ai N , soit GIGN ...',
            ),
            array
            (
              'id' => '293',
              'rank' => '-8',
              'author' => 'esser_a "FuNiK"',
              'context' => 'En piscine, avec un ton super blase par l\'exo 08 du Jour02.<br/><br/>Apres avoir appris que le gsed ne passe pas a la moulinette ...',
              'content' => 'P\'tain, la moulinette, j\'vais te la mouliner !',
            ),
            array
            (
              'id' => '294',
              'rank' => '14',
              'author' => 'Warren Seine',
              'context' => '',
              'content' => 'Là, je suis sur un IBM ThinkPad, ça ferait peur aux gosses tellement c\'est moche.',
            ),
            array
            (
              'id' => '295',
              'rank' => '2',
              'author' => 'M. Akli Adjaoute',
              'context' => '',
              'content' => 'Un informaticien qui ne code pas, c\'est pire qu\'une vache qui ne donne pas de lait.',
            ),
            array
            (
              'id' => '296',
              'rank' => '12',
              'author' => 'M. Christophe Boullay',
              'context' => 'Parlant de variables et d\'identifiants...',
              'content' => 'Ce n\'est pas parce que j\'appelle un chat un chat que c\'est un chat.',
            ),
            array
            (
              'id' => '297',
              'rank' => '7',
              'author' => 'M. Didier Verna',
              'context' => 'En cours d\'OS, étude des mutex.',
              'content' => 'Elève : Monsieur ?<br/><br/>D. Verna (écrit au tableau): Attends...<br/><br/>Elève 2 : Han il t\'a lock !',
            ),
            array
            (
              'id' => '298',
              'rank' => '0',
              'author' => 'M. Didier Verna',
              'context' => 'En cours d\'OS, le videoprojecteur affiche un message de surchauffe par-dessus le slide.',
              'content' => 'D. Verna : L\'atomicité est garantie par le projecteur chauffe, vérif... euh, pardon... par le système d\'exploitation.',
            ),
            array
            (
              'id' => '299',
              'rank' => '15',
              'author' => 'M. Christophe Boullay',
              'context' => 'En regardant les ouvriers tailler la haie dehors',
              'content' => 'Ah ben ça y est ! Ils s\'y mettent à 3 ou 4.. et ils aiment ça!',
            ),
            array
            (
              'id' => '301',
              'rank' => '13',
              'author' => 'M. Christophe Boullay',
              'context' => 'Lors de l\'appel, une personne qui n\'a pas entendu son nom et dit à Krisboul : Monsieur Vous m\'avez sauté.',
              'content' => 'D\'une part j\'ai sauté personne!',
            ),
            array
            (
              'id' => '302',
              'rank' => '2',
              'author' => 'M. Christophe Boullay',
              'context' => 'En parlant d\'une machine qui génère le passage des soutenances...!',
              'content' => 'C\'est pas moi qui génère votre passage de soutennance c\'est un prog. une machine. J\'peux vous la présenter, si vous êtes pas content vous pouvez la cogner.',
            ),
            array
            (
              'id' => '303',
              'rank' => '7',
              'author' => 'M. Christophe Boullay',
              'context' => 'Présentation du projet de sup. En parlant du site web.',
              'content' => 'Si vous me dites : On ne peut pas montrer notre site car il est pas en local, je vous réponds moi je vais pas pouvoir monter au dessus de 0 !!!',
            ),
            array
            (
              'id' => '304',
              'rank' => '4',
              'author' => 'Pierre Brunetti',
              'context' => 'Tout en discutant de fork ...',
              'content' => 'Ta mère c\'est init !',
            ),
            array
            (
              'id' => '306',
              'rank' => '8',
              'author' => 'M. Pedro Miranda',
              'context' => 'Pedro m\'envoie un mail me disant que je n\'ai pas assisté au cours de microprocesseurs ayant confondu avec l\'algo du matin je lui réponds que si et que j\'ai fait le qcm. Voici la réponse de Pédro:',
              'content' => 'Tu as tellement bien assisté au cours de systèmes que tu as même  fait un QCM ? IL N’Y PAS EU DE QCM EN SYSTEMES ET MICROPROCESSEURS ... <br/><br/><br/><br/>Arrêtes le bedo J',
            ),
            array
            (
              'id' => '309',
              'rank' => '3',
              'author' => 'Kevin Bongart',
              'context' => '@Twitter',
              'content' => 'Peut-on honnêtement parler de Qualité en utilisant des Cliparts dans un Powerpoint sous Windows Vista en citant Besancenot ?',
            ),
            array
            (
              'id' => '310',
              'rank' => '6',
              'author' => 'Melle. Christel Trémoulet',
              'context' => 'Cours de maths, l\'amphi SUP D demande à Mme. Trémoulet si l\'amphi A est si nul que ça.',
              'content' => 'Oh mais non, c\'est pas vrai ! L\'amphi A n\'est pas nul ! C\'est juste qu\'ils connaissent rien... ',
            ),
            array
            (
              'id' => '311',
              'rank' => '11',
              'author' => 'Thrash',
              'context' => 'Après un contrôle d\'élec',
              'content' => 'Un échec critique c\'est quand tu es incapable de savoir si un contrôle était difficile ou pas.',
            ),
            array
            (
              'id' => '314',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => 'Parlant des piles et des files. ',
              'content' => 'Les files c\'est du FIFO et les filles c\'est du PIPO.',
            ),
            array
            (
              'id' => '315',
              'rank' => '4',
              'author' => 'Jean-Marc Le Roux',
              'context' => 'Code',
              'content' => 'Quand t\'as un truc qui marche pas.<br/><br/>Mais vraiment pas.<br/><br/>Et tu sais pas pourquoi.<br/><br/>Mais vraiment PAS.<br/><br/>Le mieux, c\'est de le supprimer.<br/><br/>HOP<br/><br/>niquel',
            ),
            array
            (
              'id' => '316',
              'rank' => '18',
              'author' => 'M. Christophe Boullay',
              'context' => 'Demandant à un élève d\'aller chercher une brosse pour le tableau dans son bureau.',
              'content' => 'Tu vois où il est mon bureau ? Il y a un mec à l\'intérieur qui corrige des copies de maths ! Tu rentres et tu lui vol une brosse !',
            ),
            array
            (
              'id' => '317',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => 'Cours sur les listes.',
              'content' => 'Les listes chaînés vous allez les utiliser pratiquement partout, sauf pour faire le café ou coller les timbres.',
            ),
            array
            (
              'id' => '318',
              'rank' => '2',
              'author' => 'M. Christophe Boullay',
              'context' => 'L\'inscription sur le tee shirt',
              'content' => 'Ce matin un lapin à tuer un chasseur, c\'était un lapin qui avait un UZI...!',
            ),
            array
            (
              'id' => '319',
              'rank' => '4',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Nathalie demande à faire un algo bidon, et Metalman est un redoublant qui dormait bien l\'année passée...',
              'content' => 'Metalman : Ho ho... trop facile...<br/><br/>Nath : Ouais bah vas-y, tiens...<br/><br/>Metalman : J\'peux prendre mon cahier ? Promis ! Je n\'ai pas copie depuis celui de l\'an passé ! :)<br/><br/>Nath : Pour ce qu\'il y avait dedans...',
            ),
            array
            (
              'id' => '320',
              'rank' => '23',
              'author' => 'M. Christophe Boullay',
              'context' => 'Faisant l\'appel, et ne commençant pas sur la bonne ligne...',
              'content' => 'Nom, prénom, il est pas là ??',
            ),
            array
            (
              'id' => '321',
              'rank' => '8',
              'author' => 'M. Marwan Burelle',
              'context' => 'En TD algo, Metalman ecrit son algo à la facon habituelle : des gribouillages partout avec une écriture moche... Marwan passe et regarde :',
              'content' => 'Marwan : ... C\'est crypté ?<br/><br/>Metalman : T_T',
            ),
            array
            (
              'id' => '322',
              'rank' => '-1',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Pendant le TD d\'algo. un élève qui demande comment on appelle la fonction',
              'content' => 'Comment tu l\'appelles ? Beh tu cris son nom !',
            ),
            array
            (
              'id' => '323',
              'rank' => '2',
              'author' => 'Benjamin M.',
              'context' => 's\'étant fait recaler plus d\'une fois du Social Club (club parisien)',
              'content' => 'Warren: Putain, Firefox crashe à chaque fois que je vais sur le MySpace du Social Club...<br/><br/>Benjamin: Vas-y accompagné!<br/><br/>',
            ),
            array
            (
              'id' => '324',
              'rank' => '1',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Toute la promo a raté le contrôle 1 d\'algo... précisement, l\'exo 2 a été reussi, mais pas le 1 ni le 3',
              'content' => 'Nath : Bon, alors faut savoir que c\'est moi qui ait redigé le contrôle 1... enfin tout sauf l\'exo 2, celui la c\'est Marwan qui l\'a fait !<br/><br/>Mais vous savez, pour le contrôle 2... C\'est moi qui vait TOUT rediger !<br/><br/>Metalman : Euh madame... vous pourrez laisser Marwan faire tout le partiel ?',
            ),
            array
            (
              'id' => '325',
              'rank' => '8',
              'author' => 'M. Christophe Boullay',
              'context' => 'Pendant le cours un élève fait du bruit, il descend de l\'estrade lève le bras et fait un pistolet avec sa main.',
              'content' => 'Boum, Boum, Boum, Boum ça y est il est mort? Ben maintenant il fait plus de bruit.',
            ),
            array
            (
              'id' => '326',
              'rank' => '6',
              'author' => 'M. Christophe Boullay',
              'context' => 'Krisboul parle des graphes en représentations matrice. Il explique qu\'un graphe avec beaucoup de sommets et peu de relations, c\'est moche...',
              'content' => 'Vous voyez, c\'est comme Bob le Bricoleur : "Oui, on PEUT le faire !", mais moi j\'vous le conseille pas...',
            ),
            array
            (
              'id' => '327',
              'rank' => '4',
              'author' => 'Pierre Guilbert',
              'context' => 'En nous racontant une de ses aventures quand il était petit.',
              'content' => 'Mon père m\'a pioché dans la merde.',
            ),
            array
            (
              'id' => '328',
              'rank' => '3',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Sifflant pour demander le silence',
              'content' => '... waw ça a fait du bruit, un peu !',
            ),
            array
            (
              'id' => '329',
              'rank' => '15',
              'author' => 'Mme. Claudine Cavatorta',
              'context' => 'pendant le pot à la fin de la journée parents-profs',
              'content' => 'Boullay le bien nommé',
            ),
            array
            (
              'id' => '330',
              'rank' => '6',
              'author' => 'M. Roland Levillain',
              'context' => 'En parlant du sucre syntaxique en C',
              'content' => 'Finalement je me demande pourquoi ils utilisent le while à Epitech, on peut faire la même chose avec des if et des goto.',
            ),
            array
            (
              'id' => '331',
              'rank' => '1',
              'author' => 'Parissenti Alexandre',
              'context' => 'En méthodologie, parlant de la pasteurisation',
              'content' => 'U.H.T c\'est une vache',
            ),
            array
            (
              'id' => '332',
              'rank' => '0',
              'author' => 'Martin Jocelyn',
              'context' => 'Après être sorti de cours plié en deux en allant aux toilettes, il rentre en cours et on lui demande si ça va mieux...',
              'content' => 'Oui, je me suis vidé!',
            ),
            array
            (
              'id' => '333',
              'rank' => '4',
              'author' => 'M. O. R.',
              'context' => 'Les ISBP font du bruit dehors, et il nous parle du prof d\'Ing1 (M. Regragui) qui a les ISBP.',
              'content' => 'Il ne faut pas croire... les filles de l\'ISBP c\'est utile ! Enfin c\'est ce qu\'il dit... pour la jolie vue !',
            ),
            array
            (
              'id' => '335',
              'rank' => '-1',
              'author' => 'Jean-Marc L.R.',
              'context' => 'Discussion à propos de l\'amendement 844',
              'content' => 'Jean-Marc L.R.: Internet, si y\'a personne pour le consulter<br/><br/>Jean-Marc L.R.: c\'est rien<br/><br/>Jean-Marc L.R.: c\'est du vice<br/><br/>Jean-Marc L.R.: vide*<br/><br/>',
            ),
            array
            (
              'id' => '336',
              'rank' => '1',
              'author' => 'Caméra Espion',
              'context' => '',
              'content' => 'Caméra Espion : J\'ai passé l\'entretien MTI<br/><br/><br/>Vincent  : Alors ?<br/><br/><br/>Caméra Espion : J\'avais rien préparé, je me suis retrouvé comme un gland quand j\'ai du citer 3 défauts >_< Mais sinon c\'était sympa ^^<br/><br/>Vincent : Un peu d\'aide? <br/><br/> Défaut 1: je suis un gland<br/><br/> Défaut 2: je ne prépare *jamais* quoi que ce soit<br/><br/> Défaut 3: J\'ai un mac [...] et un iPhone<br/><br/>Caméra Espion : Trop pas, c\'est MTI d\'avoir un mac',
            ),
            array
            (
              'id' => '337',
              'rank' => '1',
              'author' => 'Baroudjan Panos',
              'context' => 'Comme quoi le mini-proj de THLR peut donner des idées assez peu orthodoxes (quelle ironie !) quand on veut y couper.',
              'content' => 'Bon j\'vais me soulager dans un bon poulet rôti <3',
            ),
            array
            (
              'id' => '338',
              'rank' => '5',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Premier cours de l\'année, présentation et quelques règles aussi !',
              'content' => 'Moi je vous dis tout de suite personne ne me casse les burnes, celui qui me casse les burnes je l\'envoie faire un tour dans Villejuif!',
            ),
            array
            (
              'id' => '339',
              'rank' => '0',
              'author' => 'Warren Seine',
              'context' => '',
              'content' => 'Seeker dit :<br/><br/> Hello<br/><br/>Warren / soow.fr dit :<br/><br/> yop<br/><br/> clavier down<br/><br/> je suis au clavier virtuel',
            ),
            array
            (
              'id' => '340',
              'rank' => '3',
              'author' => 'Warren Seine',
              'context' => 'A lier avec la citation #339 (http://www.epiquote.fr/339)',
              'content' => 'La garantie est perimée d un mois<br/><br/>...<br/><br/>Classique<br/><br/>',
            ),
            array
            (
              'id' => '341',
              'rank' => '4',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Expliquant la loi des mailles...',
              'content' => 'Si votre mère ne mélange pas les serviettes avec les torchons, c\'est qu\'elle connait la loi des mailles(un élève rigole), Oh ne dites pas de mal de votre mère !',
            ),
            array
            (
              'id' => '342',
              'rank' => '-3',
              'author' => 'M. Christophe Boullay',
              'context' => 'Krisboul donne une definition sur les graphes',
              'content' => 'Krisboul : S\'il existe un chemin de x vers y...<br/><br/>*Temps pour recopier*<br/><br/>Krisboul : Que x est marque, mais pas y...<br/><br/>Metalman : C\'est qu\'on n\'est pas encore arrivé au bout ?',
            ),
            array
            (
              'id' => '343',
              'rank' => '-6',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'Elle parle de l\'image du jour de son site',
              'content' => 'Nath : Vous avez vu l\'image du jour sur mon site ?<br/><br/>*Plusieurs élèves* : Nooooon.... ça s\'affiche pas !<br/><br/>Metalman : Aaaah... vous savez pas coder Mme ! :o<br/><br/>Nath : J\'appelle pas vraiment ça du "code" le HTML...',
            ),
            array
            (
              'id' => '344',
              'rank' => '20',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'En montrant une technique pour résoudre un problème.',
              'content' => 'Alors cette technique, MAIS NIQUE SA MERE comment elle déchire !',
            ),
            array
            (
              'id' => '345',
              'rank' => '2',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Premier cours d\'Elec, s\'apprêtant à écrire au tableau',
              'content' => 'Bon, j\'vous préviens, j\'écris à l\'horizontal de gauche à droite. [...Gn... hhhh] Ma grand-mère était dans ce sens, j\'écris dans ce sens !',
            ),
            array
            (
              'id' => '346',
              'rank' => '0',
              'author' => 'Jean-Marc L.R.',
              'context' => '',
              'content' => 'Jean-Marc L.R.: En gros, ça veut dire que sur mes deux cores pourris, j\'en utilise qu\'un...<br/><br/>Jean-Marc L.R.: han, c\'est ambigü comme phrase :-O ça fait grave nécro...',
            ),
            array
            (
              'id' => '347',
              'rank' => '5',
              'author' => 'GoLLuM',
              'context' => 'GoLLuM, étant encore lycéen, montre son enthousiasme et son impatience à une amie pour aller à EPITA...',
              'content' => 'GoLLum : Epita (l).... j\'ai hate !<br/><br/>Caro : Tu vas les voir en concert ?<br/><br/>GoLLuM : ...',
            ),
            array
            (
              'id' => '349',
              'rank' => '8',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Après avoir rendu le partiel, légèrement irrité par le nombre d\'erreurs dans chaque copie : ',
              'content' => 'Moi je vous dis, quand vous trouvez une équation qui est bonne, ca vous donne envie de péter un ours !',
            ),
            array
            (
              'id' => '351',
              'rank' => '6',
              'author' => 'vasseu_b',
              'context' => 'Après avoir reçu sa note de partiel d\'electro :',
              'content' => 'Intérieurement, je bouillis !',
            ),
            array
            (
              'id' => '352',
              'rank' => '3',
              'author' => 'Jinnosuke',
              'context' => 'A propos d\'un troll qu\'il n\'a pas aimé',
              'content' => 'On peut rigoler sur tout et je suis le premier pour ça, mais il y a des sujets dont on ne peut pas rire.',
            ),
            array
            (
              'id' => '353',
              'rank' => '7',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'En corrigeant le partiel 1 de sup, aprés avoir montrer que c\'était "faisable".',
              'content' => 'Et là vous avez les points, vous pouvez péter un ours après!',
            ),
            array
            (
              'id' => '354',
              'rank' => '16',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'En demandant à un élève que représente le composant dessiner au tableau (une résistance variable).',
              'content' => 'L\'élève : c\'est un potentiomètre ?<br/><br/>Monsieur Jacquet : un potentiomètre ? et TA SOEUR ???',
            ),
            array
            (
              'id' => '356',
              'rank' => '-1',
              'author' => 'Mme. Nathalie Bouquet',
              'context' => 'A propos des tris topologiques...',
              'content' => 'Junior : Alors vous voyez, c\'est très utile, genre dans les compilos pour les dépendances, toussa... enfin allez voir votre chargé de TD info... moi la prog, hein...<br/><br/>Elève : Oooooh... :o<br/><br/>Junior : Ah ! Mais c\'est aussi très utile en cuisine ! Par exemple la recette de la crêpe aux bananes flambées !<br/><br/>Elève : Ah, ça par contre ça vous passionne :D',
            ),
            array
            (
              'id' => '357',
              'rank' => '2',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Corrigé du partiel numéro un d\'électricité.',
              'content' => 'Si vous n\'êtes pas intéressé, vous pouvez gerber !',
            ),
            array
            (
              'id' => '358',
              'rank' => '11',
              'author' => 'Lacoste Simon',
              'context' => 'Simple conversation ...',
              'content' => 'J\'ai fait beaucoup de choses avec des animaux morts dans ma vie.',
            ),
            array
            (
              'id' => '359',
              'rank' => '15',
              'author' => 'M. Christophe Boullay',
              'context' => 'Apres une série de blagues un peu vaseuses ...',
              'content' => 'Non, je ne prends aucune substance illicite, ceci est mon état naturel !',
            ),
            array
            (
              'id' => '361',
              'rank' => '2',
              'author' => 'M. Christophe Boullay',
              'context' => 'En parlant de l\'aspect négatif de l\'implémentation statique des arbres binaires.',
              'content' => 'Chaque médaille à un revers, vous ne verrez jamais de charcutier qui coupe des tranches de jambon si fines qu\'il y a qu\'il y a qu\'une face.',
            ),
            array
            (
              'id' => '362',
              'rank' => '-2',
              'author' => 'thion-_e',
              'context' => 'En cours de maths, chapitre "arithmetique" :',
              'content' => 'Mais non mais la règles s\'applique que sur les denombrables !!!<br/><br/><br/><br/>(petit blanc)<br/><br/><br/><br/>Ouais, bon, j\'ai pas dit que je savais ce que c\'etait un dénombrable ...',
            ),
            array
            (
              'id' => '363',
              'rank' => '7',
              'author' => 'lenoir_v',
              'context' => 'Pendant un rush pour le projet :',
              'content' => 'mortie_q : Mais pourquoi il compile pas la  Victor ?!<br/><br/><br/><br/>lenoir_v : (parlant a un saucisson) Ne l\'ecoute pas, toi et moi on est heureux Saucisson !',
            ),
            array
            (
              'id' => '364',
              'rank' => '7',
              'author' => 'M. Christophe Boullay',
              'context' => 'Metalman a du mal à suivre le rythme pour écrire les définitions... et il est droitier.',
              'content' => 'Krisboul : Alors ! C\'est quoi ca ! Je vais pas répéter 5 fois la même def ! Dépêche toi un peu...<br/><br/>Metalman : Ah, mais j\'ai mal à la main...<br/><br/>Krisboul : Je sais pas ce que tu fais avec ta main droite, et j\'m\'en fiche... mais dans tous les cas, t\'es la pour recopier ma def plus vite que ca!',
            ),
            array
            (
              'id' => '367',
              'rank' => '8',
              'author' => 'Warren Seine',
              'context' => '23h, en pleine rédaction de son rapport de stage.',
              'content' => 'Comment on dit business en Anglais?',
            ),
            array
            (
              'id' => '368',
              'rank' => '18',
              'author' => 'M. Christophe Boullay',
              'context' => 'En écrivant l\'algo sur la recherche par interpolation linéaire.',
              'content' => 'La fonction donc s\'appelle interpole, et comme son nom l\'indique est une fonction de recherche.',
            ),
            array
            (
              'id' => '369',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => 'En voyant la neige tomber par la fenêtre.',
              'content' => 'J\'espére que vous êtes venu en traineau à neige.',
            ),
            array
            (
              'id' => '370',
              'rank' => '0',
              'author' => 'M. Christophe Boullay',
              'context' => 'Cherchant un mot commençant par b dans le dictionnaire.',
              'content' => 'Vous ouvrez, vous tombez sur cacahuète donc vous cherchez avant et vous tombez sur "Azard" heu... oui "azard".',
            ),
            array
            (
              'id' => '371',
              'rank' => '5',
              'author' => 'M. Marwan Burelle',
              'context' => 'A son anniversaire, pour feter ses 31 ans',
              'content' => 'Marwan : Hey ! Vous savez quoi ? EN BINAIRE, MON AGE N\'EST CONSTITUE QUE DE 1 ! :D',
            ),
            array
            (
              'id' => '372',
              'rank' => '9',
              'author' => 'M. Marwan Burelle',
              'context' => '',
              'content' => 'Marwan : Alors, Boullay m\'a sorti une bonne énigme... regardez !<br/><br/>*il ecrit 27972 au tableau*<br/><br/>Marwan : Alors ! C\'est quoi ca ?<br/><br/>Etudiant : Un palindrome !<br/><br/>Marwan : Aussi, mais encore...<br/><br/>*10 mins passent avec toutes les possibilites*<br/><br/>Marwan ; Vous ne savez pas ?.... C\'est 666 * 42 ! :D',
            ),
            array
            (
              'id' => '373',
              'rank' => '8',
              'author' => 'Jean-Marc L. R.',
              'context' => '',
              'content' => 'J\'étais très respectueux des femmes avant que j\'en rencontre.',
            ),
            array
            (
              'id' => '374',
              'rank' => '11',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Trop fort le mec à côté : l\'important c\'est pas la réponse, c\'est de connaître la réponse !',
            ),
            array
            (
              'id' => '375',
              'rank' => '6',
              'author' => 'consta_v',
              'context' => 'Intense réflexion en méthodologie',
              'content' => '- Je pense que je vais aller au concert de Metallica... Mais 90 euros pour rien voir dans la fosse, bof.<br/><br/>- 90 euros pour se battre avec des mecs qui puent, autant taper un clochard dans la rue, ça revient moins cher.',
            ),
            array
            (
              'id' => '376',
              'rank' => '2',
              'author' => 'Jérôme Galtié',
              'context' => 'JPO, on vient de finir de manger.',
              'content' => 'Alex: Faudrait qu\'on ramène les plateaux chez Avner.<br/><br/>Jérôme: C\'est où ?',
            ),
            array
            (
              'id' => '377',
              'rank' => '2',
              'author' => 'Jonathan P.',
              'context' => 'Après avoir commandé une girafe de 3 litres de bière framboise et des moules à la crême.',
              'content' => 'Par contre, je sais pas si les moules vont pas passer avec la framboise.',
            ),
            array
            (
              'id' => '378',
              'rank' => '6',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Cours d\'élec, l\'amphi SUP D est agité et les quelques personnes qui dormaient discutent désormais avec leurs voisins',
              'content' => '"Chuuuuuuut ! Dormez bordel !"',
            ),
            array
            (
              'id' => '379',
              'rank' => '-1',
              'author' => 'M. O. R.',
              'context' => 'En plein milieu du cours de maths, il commence a nous raconter l\'histoire du college a cote de l\'ecole, et du terrain vague qu\'il y avait avant... puis soudainement...',
              'content' => 'MOR : J\'aime les terrains vagues !<br/><br/>*apres plusieurs explications sur ses sentiments envers eux*<br/><br/>Metalman : Vous ne voulez pas faire un expose a M. Peillon la dessus ?<br/><br/>MOR : AH ! Parce que lui aussi aime les terrains vagues ? :D',
            ),
            array
            (
              'id' => '380',
              'rank' => '9',
              'author' => 'gavory_f',
              'context' => 'En train de faire le mode SDL du KoreWar',
              'content' => 'gavory_f 16:18:38 : dis, on a bousillé le makefile<br/><br/><br/><br/>you 16:19:01 : qu\'est ce que t\'as foutu ?<br/><br/><br/><br/>gavory_f 16:19:11 : le Makefile s\'est transformé en binaire',
            ),
            array
            (
              'id' => '381',
              'rank' => '3',
              'author' => 'M. Jean-Paul Jacquet',
              'context' => 'Kalenz, désigné coupable, s\'est retrouvé au tableau pour terminer un exo',
              'content' => '[à la classe] Regardez, votre camarade a résolu l\'équation en la triturant... Il faut le triturer pour le résoudre ! Le quotient hein ! Pas votre camarade...',
            ),
            array
            (
              'id' => '382',
              'rank' => '4',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos du langage Java',
              'content' => 'Le Java, t’es obligé de coller l’oreille à la machine pour voir si elle est pas morte.',
            ),
            array
            (
              'id' => '383',
              'rank' => '0',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos des chercheurs en IA',
              'content' => 'C’est quoi l’intelligence ? Ils ont écrit des livres de 1000 pages pour expliquer ça ; ils ont une responsabilité morale dans le réchauffement de la planète.',
            ),
            array
            (
              'id' => '384',
              'rank' => '6',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos de la spécialisation MTI',
              'content' => 'Ma fille, je préfère qu\'elle fasse dératiseur dans les égoûts de Paris, plutôt que de faire du Adobe.',
            ),
            array
            (
              'id' => '385',
              'rank' => '5',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos du langage Java',
              'content' => 'Les gens qui guident les avions dans le ciel, heureusement qu\'ils utilisent pas du Java, sinon les avions ils auraient pas fini de tourner !',
            ),
            array
            (
              'id' => '386',
              'rank' => '5',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos de la spécialisation SCIA',
              'content' => 'Nous nos applications, c\'est pas des applets Java avec des dauphins qui chantent, c\'est des comètes virtuelles...',
            ),
            array
            (
              'id' => '387',
              'rank' => '-2',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'Akli dit "La Montagne"',
              'content' => 'Quand je rentre dans la salle, c\'est la tectonique des plaques, les montagnes qui marchent !',
            ),
            array
            (
              'id' => '388',
              'rank' => '3',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos de Windows',
              'content' => 'Windows, c\'est pas un logiciel [...] C\'est bien pour ouvrir Word, et t\'as intérêt à taper vite avant qu\'il crashe.',
            ),
            array
            (
              'id' => '390',
              'rank' => '1',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos du match Kasparov vs Deep Blue',
              'content' => 'Kasparov il avait bu il était saoul, et en plus il devait être très fatigué; d\'ailleurs ils ont jamais voulu rejouer contre Kasparov.',
            ),
            array
            (
              'id' => '391',
              'rank' => '0',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos de la quantité faramineuse de livres sur la POO',
              'content' => 'Toute personne qui n\'a plus de valium commence a écrire un livre sur les langages objet.',
            ),
            array
            (
              'id' => '392',
              'rank' => '1',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'Personne ne peut rien faire contre ma puissance spatiale.',
            ),
            array
            (
              'id' => '393',
              'rank' => '-1',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'C\'est magnifique, c\'est beau, c\'est parfait...c\'est du Akli !',
            ),
            array
            (
              'id' => '394',
              'rank' => '4',
              'author' => 'Dr Akli Adjaoute',
              'context' => 'À propos des étudiants d\'EPITA/EPITECH',
              'content' => 'Il suffit d\'ouvrir cette porte pour trouver des gens qui savent tout faire. Ils ont invente l\'Alaska. Avec du Java ils ont créé la neige.',
            ),
            array
            (
              'id' => '395',
              'rank' => '3',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'L\'intelligence artificielle à la fac, ils en font en Normandie quand ils enlèvent le lait.',
            ),
            array
            (
              'id' => '396',
              'rank' => '6',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'Windows rend les informaticiens humains, ça leur fait croire que les bugs c\'est normal.',
            ),
            array
            (
              'id' => '397',
              'rank' => '5',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'Un ingénieur indien, tu le mets devant une porte il faut lui dire de mettre la main sur la poignée. Alors il met la main sur la poignée et il dit que ça s\'ouvre pas. Tu lui dis qu\'il faut tourner la poignée et il te répond : mais tu ne m\'avais pas dit !',
            ),
            array
            (
              'id' => '398',
              'rank' => '-1',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'Je ne fais plus de conférences, rien. Ca ne m\'intéresse plus. Je m\'occupe des oiseaux maintenant.',
            ),
            array
            (
              'id' => '399',
              'rank' => '0',
              'author' => 'Dr Akli Adjaoute',
              'context' => '',
              'content' => 'Avant les chercheurs quand je parlais ils elevaient la voix. Aujourd\'hui je dis chut et ils parlent plus. C\'est mon petit doigt qui parle!',
            ),
            array
            (
              'id' => '401',
              'rank' => '3',
              'author' => 'Florent D.H.',
              'context' => 'Découvrant que le Code de la Propriété Intellectuelle a été publié en 1992',
              'content' => 'Quand on est né, il n\'y avait pas de logiciel donc on s\'en foutait. Enfin c\'était du fake, sur disquette, toussa...',
            ),
            array
            (
              'id' => '402',
              'rank' => '13',
              'author' => 'M. Christophe Boullay',
              'context' => 'Soutenance finale de la team Nespretron, promo 2013',
              'content' => 'C\'est dommage que vous n\'ayez pas montré le réseau avec plusieurs PC. La c\'est comme si vous veniez de faire 20km dans Paris pour échouer à 20cm du bar !',
            ),
            array
            (
              'id' => '403',
              'rank' => '8',
              'author' => 'Philippe Faure',
              'context' => '',
              'content' => 'Arf je viens de secouer mon clavier et il y a à manger pour 10 étiopiens...',
            ),
            array
            (
              'id' => '404',
              'rank' => '-2',
              'author' => 'Soap (bocal)',
              'context' => 'En sentant un tee-shirt sur un cintre',
              'content' => 'Putain mais mon tee-shirt led zep il sent les lasagnes !!!',
            ),
            array
            (
              'id' => '406',
              'rank' => '2',
              'author' => 'Jonathan G.',
              'context' => 'Discutant sur le rapport de Géopolitique.',
              'content' => 'Les principales parties pourraient être reprises du plan de Peillon après c\'est dans le détail qu\'il faut vraiment détailler.',
            ),
            array
            (
              'id' => '407',
              'rank' => '3',
              'author' => 'M. Patrick Peillon',
              'context' => 'Cours de géopolitique',
              'content' => 'L\'Himalaya, ça se franchit pas en espadrilles !',
            ),
            array
            (
              'id' => '408',
              'rank' => '0',
              'author' => 'avrill_d',
              'context' => 'En parlant de carte graphique NVidia',
              'content' => 'Nan, mais moi je suis trop pauvre encore pour le X',
            ),
            array
            (
              'id' => '410',
              'rank' => '3',
              'author' => 'Michel Ruckebush',
              'context' => 'A propos de sa collocation avec Cédric Dufour',
              'content' => '- Jean-Marc: ça doit être trop chiant de dormir à 10cm l\'un de l\'autre<br/><br/>- Michel: ouais! quand l\'un se branle l\'autre le sent.... alors autant le faire en même temps!',
            ),
            array
            (
              'id' => '411',
              'rank' => '3',
              'author' => 'ruckeb_m',
              'context' => 'En parlant d\'une fille...',
              'content' => 'Non mais je vous assure, elle est bi elle. Elle est sortie avec Cédric !',
            ),
            array
            (
              'id' => '413',
              'rank' => '1',
              'author' => 'M. Prof windows',
              'context' => '',
              'content' => 'Généralement on fait ça a jeun, c\'est pas marqué dans la documentation mais bon...',
            ),
            array
            (
              'id' => '414',
              'rank' => '0',
              'author' => 'Mme Marie Moin',
              'context' => '',
              'content' => 'J\'en connais pas beaucoup moi des gens prêts à me rendre service.',
            ),
            array
            (
              'id' => '415',
              'rank' => '4',
              'author' => 'M. François Teiletche',
              'context' => 'En parlant d\'une soustraction de logs (Pré rentrée info sup). Des élèves ne comprenant pas, le prof illustre sa pensée...',
              'content' => 'Tu prends quatre tomates, t\'enlèves une tomate, il te reste trois tomates.',
            ),
            array
            (
              'id' => '416',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => 'résolution exo caml sur les années bissextiles.',
              'content' => 'Les années bissextiles c\'est formidable! Je ne sais pas si vous vous en rendez compte mais sans les années bissextiles, dans 30 ou 40.000ans nous inverserions l\'été et l\'hiver... Vous imaginez?!',
            ),
            array
            (
              'id' => '417',
              'rank' => '1',
              'author' => 'maleze_v',
              'context' => 'Piscine, J04, 2h26',
              'content' => 'On rend les .c aujourd\'hui? Parce que le sujet parle d\'une lib...',
            ),
            array
            (
              'id' => '418',
              'rank' => '6',
              'author' => 'M. Akim Demaille',
              'context' => 'Lors d\'un extrait vidéo en THLR pour la promo 2013 : NEXT, avec Nicolas Cage, et sa faculté de voir le futur.',
              'content' => 'Comme vous pouvez le constater, Nicolas Cage est un automate non déterministe !',
            ),
            array
            (
              'id' => '419',
              'rank' => '2',
              'author' => 'Régis DAVID (IBM)',
              'context' => 'En parlant d\'IBM, qui soutient Java, en opposition avec Microsoft',
              'content' => 'Donc J comme gentil',
            ),
            array
            (
              'id' => '420',
              'rank' => '3',
              'author' => 'djende_j',
              'context' => 'Pendant le projet find, une nuit...',
              'content' => 'Il m\'entraine, au bout de la nuit ! Mon projet pas fini... Il m\'entraine jusqu\'a l\'insomnie, mon projet de cette nuit !',
            ),
            array
            (
              'id' => '421',
              'rank' => '9',
              'author' => 'M. Didier Verna',
              'context' => 'En parlant de SPARC, metalman s\'excite, il demande alors qui connait les SPARC... seul metalman leve la main !',
              'content' => 'Didier : Ah ! Il a des longs cheveux... des lunettes... des boutons... OUI ! S\'en est un ! Un vrai ! Un bon !',
            ),
            array
            (
              'id' => '422',
              'rank' => '1',
              'author' => 'Mr. Teiletche',
              'context' => 'En parlant de comment avoir une bonne note aux QCM du séminaire.',
              'content' => 'On est tous un peu encore des petits fripons...',
            ),
            array
            (
              'id' => '424',
              'rank' => '1',
              'author' => 'boulan_t',
              'context' => 'Sur un forum, se demandant pourquoi son cd de windows 7 ne marche pas',
              'content' => 'ben il est gravé mais il est en lecture seule<br/><br/><br/><br/>c\'est pour ça que ça marche pas ?',
            ),
            array
            (
              'id' => '425',
              'rank' => '4',
              'author' => 'M. Olivier Rodot',
              'context' => 'Durant le cours de maths, en pleine explication',
              'content' => 'Mais, ca sent le ketchup ici !',
            ),
            array
            (
              'id' => '426',
              'rank' => '8',
              'author' => 'M. Christophe Boullay',
              'context' => '',
              'content' => 'Je ne suis pas prof de math, que dieu m\'en preserve',
            ),
            array
            (
              'id' => '427',
              'rank' => '4',
              'author' => 'rouvre_m',
              'context' => 'Petit broadcast sur le netsoul...',
              'content' => 'rouvre_m: Si les cons etaient des arbres, le bocal serait une foret.',
            ),
            array
            (
              'id' => '428',
              'rank' => '12',
              'author' => 'bidon_m',
              'context' => 'En plein débat sur l\'apocalypse en 2012',
              'content' => 'Enfin la plus grosse cata en 2012 c\'est quand même Izura qui a son diplome quoi...',
            ),
            array
            (
              'id' => '429',
              'rank' => '6',
              'author' => 'Hakril',
              'context' => 'Lors d\'une discussion très intéressante.',
              'content' => 'Pluplume : Tu sais, c\'est pas grave si t\'as une petite bite et un gros cul...!<br/><br/>Hakril : Mais nan, j\'ai pas un gros cul!',
            ),
            array
            (
              'id' => '431',
              'rank' => '4',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Bon, ça fait quoi d\'annoncer tous les jours des processeurs 2000 fois plus petits que les poils de cul ?',
            ),
            array
            (
              'id' => '432',
              'rank' => '1',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Si le mec t\'appelles et te dit : "Euh on a planté le système ! Euh, t\'es con ! Va te faire mettre !", tu vas pas être content !',
            ),
            array
            (
              'id' => '433',
              'rank' => '3',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Je ne parle pas de vos ordis qui ont Facebook, Twitter et autres conneries qui vous permettent de savoir que Abdul s\'est gratté le cul à 500km.',
            ),
            array
            (
              'id' => '435',
              'rank' => '2',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé - à propos du marché asiatique',
              'content' => 'On n\'a pas cette culture ! Nous on est des latins, on baise, on fait la fête tout ça !',
            ),
            array
            (
              'id' => '436',
              'rank' => '4',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Les hardcores gamers c\'est 0,0001% de la population, il y en a autant qui sont morts de la grippe aviaire.',
            ),
            array
            (
              'id' => '437',
              'rank' => '3',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Turbo Boost : Pour une fois, cette technologie on lui a donné un nom que tous les connards de la planête pouvaient comprendre. Parce que bon Hyperthreading... Autant bosser chez France Télécom et sauter par la fenêtre !',
            ),
            array
            (
              'id' => '438',
              'rank' => '3',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'SSD : le plus gros qu\'on puisse trouver actuellement c\'est 320 Go, pour les films de boules c\'est raté. Surtout en HD !',
            ),
            array
            (
              'id' => '439',
              'rank' => '3',
              'author' => 'Intervenant Intel',
              'context' => 'Conférence de début d\'infospé',
              'content' => 'Mon poste à moi ? Euuuh, c\'est compliqué. Il y a un poste qui s\'appelle BDM, qu\'on peut traduire par branleur de mammouth.',
            ),
            array
            (
              'id' => '441',
              'rank' => '2',
              'author' => 'Un eleve',
              'context' => 'Un ACU explique fork... on demande les cas d\'erreur...',
              'content' => 'ACU : Deja qu\'on a du mal a gerer les erreurs sur 20 lignes...<br/><br/>Eleve : et nous a coder sur 25...',
            ),
            array
            (
              'id' => '442',
              'rank' => '-2',
              'author' => 'Sebastien Bergeaud',
              'context' => 'En parlant d\'une Bt1 d\'a peine 18 ans',
              'content' => 'non, mais c\'est bon, moi je m\'en fout de l\'age !',
            ),
            array
            (
              'id' => '444',
              'rank' => '8',
              'author' => 'Autre',
              'context' => 'ladevi_s en parlant du 42sh...',
              'content' => 'Frèreuuuh Bash ! Frèreeuh bash ! Lexez vous ? Lexez vous ? Parsez les Builtins ! Parsez les Builtins ! tink token ! tink token !',
            ),
            array
            (
              'id' => '446',
              'rank' => '5',
              'author' => 'M Francois teiletche',
              'context' => 'Le prof terminant enfin un exo de maths balaise (au bout d\'1h)',
              'content' => 'Prof : enfin j\'ai trouve ..<br/><br/>(pendant un gros blanc)<br/><br/>eleve : Nan ca c\'est faux mec (en parlant a un autre eleve sur un sujet a part)<br/><br/>Prof : pardon ?',
            ),
            array
            (
              'id' => '449',
              'rank' => '7',
              'author' => 'Metalman et Gaby',
              'context' => 'Pendant la nuit d\'Halloween en SM... Metalman est habille en goth et joue avec ses chaines...',
              'content' => 'Metalman : Houuuuuu ! Je suis un zombie... j\'attend que l\'on informe mon pere de ma mort !<br/><br/>Gaby : Il faudrait vraiment faire un waitpid sur Metalman la...',
            ),
            array
            (
              'id' => '451',
              'rank' => '-2',
              'author' => 'verdea_b',
              'context' => 'Cours d\'Internet Geopolitics...',
              'content' => 'prof : Do you think Google could take the total control of internet ?<br/><br/>verdea_b : Yes ICANN !',
            ),
            array
            (
              'id' => '453',
              'rank' => '-1',
              'author' => 'Aurélien Bordes',
              'context' => 'En parlant d\'une structure Kernel Windows',
              'content' => 'Elle est pas très grosse',
            ),
            array
            (
              'id' => '457',
              'rank' => '11',
              'author' => 'M. Stéphane Nicolet',
              'context' => 'M. Nicolet s\'arrête en plein milieu du cours de maths pour exprimer son mécontentement vis-à-vis de ceux qui boivent ou mangent en cours.',
              'content' => '"Hum.. franchement tous ceux qui boivent leurs canettes et mangent en cours, ben... hum, franchement ça s\'fait pas quoi, c\'est un manque de politesse, moi aussi j\'aimerais bien manger des gâteaux quoi, hum"',
            ),
            array
            (
              'id' => '459',
              'rank' => '-6',
              'author' => 'M. François Teiletche',
              'context' => 'M. Teiletche se retourne vers le tableau et la classe commence à bavarder.',
              'content' => '"Non mais c\'est pas parce que je me retourne vers le tableau que je ne vous entend pas!"',
            ),
            array
            (
              'id' => '460',
              'rank' => '9',
              'author' => 'Autre',
              'context' => '',
              'content' => 'garcia_a : Dites mois, a part les attentats du World Trade Center, pourquoi c\'est férié le 11 novembre?',
            ),
            array
            (
              'id' => '461',
              'rank' => '9',
              'author' => 'M. Didier Verna',
              'context' => 'Lundi matin, cours de CEXP.alixe_a s\'endort sur l\'epaule de maury_m',
              'content' => 'Mr Verna : oooh c\'est mignon, elles se font un calins!<br/><br/>Mr Verna essaye d\'enchainer avec la suite de son cours. Puis :<br/><br/>Mr Verna : bon ca suffit maintenant,j\'arrive pas a me concentrer.',
            ),
            array
            (
              'id' => '464',
              'rank' => '9',
              'author' => 'Candel_r',
              'context' => 'Au KFC, demandant a une personne anonyme.',
              'content' => 'Excusez-moi, c\'est a quelle heure le matin?',
            ),
            array
            (
              'id' => '465',
              'rank' => '2',
              'author' => 'Lhuill_g',
              'context' => 'Pendant une discutions sur 2012 et la fin du monde.',
              'content' => 'Le 31/12/2012 à 21h42, c\'est quand Dieu rendra sa v1.0.',
            ),
            array
            (
              'id' => '466',
              'rank' => '3',
              'author' => 'alixe_a',
              'context' => 'un jour sur netsoul, discussion sur les SPARCs',
              'content' => '15:55 alixe_a: j\'ai toujours rever de faire ce genre de chose avec un SPARC',
            ),
            array
            (
              'id' => '475',
              'rank' => '12',
              'author' => 'M. Marwan Burelle',
              'context' => 'À propos des arbres Rouge-Noir',
              'content' => 'Si le fils viole la propriété du père et le père est noir, alors on l\'éclate.',
            ),
            array
            (
              'id' => '476',
              'rank' => '0',
              'author' => 'Eric Gaillard',
              'context' => '',
              'content' => 'Y a des gendarmes qui sont devenus RSSI...donc ils ont une logique très basique !',
            ),
            array
            (
              'id' => '479',
              'rank' => '1',
              'author' => 'Mme. Anne Sophie Dujardin',
              'context' => 'En parlant d\'instruction',
              'content' => 'Plus elle est courte, plus l\'exécution sera rapide.',
            ),
            array
            (
              'id' => '480',
              'rank' => '0',
              'author' => 'Max Testemale',
              'context' => 'en parlant de la place des adjectifs dans une phrase',
              'content' => 'Un devant, un derrière c\'est pas mal aussi.',
            ),
            array
            (
              'id' => '481',
              'rank' => '6',
              'author' => 'Mme. Anne Sophie Dujardin',
              'context' => 'Parlant de dessin des sinusoides',
              'content' => 'Plus elles sont grandes, plus elles sont dures.',
            ),
            array
            (
              'id' => '483',
              'rank' => '4',
              'author' => 'vasseu_b',
              'context' => 'En plein rush parlant avec un coéquipier',
              'content' => 'Hey t\'as déjà essayé avec un homme ?',
            ),
            array
            (
              'id' => '484',
              'rank' => '0',
              'author' => 'martig_a',
              'context' => 'En cours d\'anglais avec Gavin Brown.<br/><br/>Nous préciserons que Jennifer est asiatique.',
              'content' => 'Gavin : Jennifer, Do a sentence with "get back".<br/><br/>martig_a : *regardant jennifer avec un air sournois* Get back to china !',
            ),
            array
            (
              'id' => '485',
              'rank' => '0',
              'author' => 'vasseu_b',
              'context' => 'En voulant parler de la salle machine.',
              'content' => 'On fait quoi on se monte ?',
            ),
            array
            (
              'id' => '486',
              'rank' => '2',
              'author' => 'Ben-J',
              'context' => 'En cours de construction des compilateurs, explications sur Autoconf... Automake...',
              'content' => 'Ben-J : Apres adopteunmec.com... je propose adopteunmake.com ! :D',
            ),
            array
            (
              'id' => '487',
              'rank' => '-3',
              'author' => 'Mme. Anne Sophie Dujardin',
              'context' => 'Des avions en papier volent dans la classe',
              'content' => 'La classe c\'est pas un aérodrome.',
            ),
            array
            (
              'id' => '488',
              'rank' => '2',
              'author' => 'descha_a',
              'context' => 'En cours d\'expression écrite, alors que tout le monde s\'applique a bien écrire: ',
              'content' => 'sont clavier et decrancher',
            ),
            array
            (
              'id' => '489',
              'rank' => '0',
              'author' => 'GoLLuM',
              'context' => 'Sur le net, un 29 décembre.',
              'content' => 'Ptain ça me gave EPITA, toujours rien acheté comme cadeaux..<br/><br/>Même pour les achats de noël je respecte pas la deadline.',
            ),
            array
            (
              'id' => '491',
              'rank' => '1',
              'author' => 'Etudiant',
              'context' => 'Le Chef ACU est très mécontent du taux de présence, et du travail...',
              'content' => '- Shoun : Si vous avez moins de 10 lignes de code... ca sert a rien de venir en soutenance !<br/><br/><br/><br/>Etudiant : Et si on a 11 lignes de commentaires ? :D<br/><br/><br/><br/>- Shoun : ...<br/><br/><br/><br/>Etudiant : Roooh ! C\'était de l\'humour !<br/><br/><br/><br/>- Mehdi : Moi ca m\'a fait rire en tout cas :D',
            ),
            array
            (
              'id' => '492',
              'rank' => '1',
              'author' => 'Metalman',
              'context' => '',
              'content' => 'Tu lis en moi comme dans une EEPROM !',
            ),
            array
            (
              'id' => '493',
              'rank' => '0',
              'author' => 'Romain Mouret',
              'context' => 'Lors de la desintégration',
              'content' => 'Moi aussi, j\'aimerai bien faire des experiences sur les êtres humains.',
            ),
            array
            (
              'id' => '494',
              'rank' => '1',
              'author' => 'Romain Mouret',
              'context' => 'En parlant de la sodomie et de la réussite sociale',
              'content' => 'Non mais! La sodomie, chez les filles de l\'Est, c\'est par défaut.',
            ),
            array
            (
              'id' => '495',
              'rank' => '-1',
              'author' => 'Nicolas',
              'context' => 'Lors de la désinté 2010',
              'content' => 'Moi, c\'est l\'ejac faciale mais pas sur les enfants.',
            ),
            array
            (
              'id' => '496',
              'rank' => '1',
              'author' => 'Warren Seine',
              'context' => 'Désintégration 2010, au pied des pistes, parfaitement sérieux',
              'content' => 'C\'est ça qui est cool avec la neige, c\'est des petits flocons qui font tout une montagne !',
            ),
            array
            (
              'id' => '497',
              'rank' => '4',
              'author' => 'Marc "Le Parrain" Fahmi',
              'context' => 'Désinté. 3ème jour. 9h35am.',
              'content' => 'Il n\'y avait plus de café alors j\'ai pris du vin chaud.',
            ),
            array
            (
              'id' => '498',
              'rank' => '-1',
              'author' => 'fourni_m',
              'context' => 'Pendant un soutient',
              'content' => '*Air de victoire* <br/><br/>Après le parcours largueur et le parcours profondeur, j\'ai inventé le parcours diagonal !',
            ),
            array
            (
              'id' => '499',
              'rank' => '-1',
              'author' => 'M. Vinh Van Diep',
              'context' => 'Cours de marketing industriel.<br/>Après une bonne réponse partielle d\'un élève :',
              'content' => 'Vous avez touché les fesses de l\'éléphant, mais vous n\'avez pas embrassé l\'éléphant dans sa totalité.',
            ),
            array
            (
              'id' => '500',
              'rank' => '0',
              'author' => 'M. Vinh Van Diep',
              'context' => 'Cours de marketing industriel.<br/>Après une bonne réponse d\'un élève',
              'content' => 'Tu mérites de porter une barbe et pas une barbichette, et de transformer tes cheveux en chignon.',
            ),
            array
            (
              'id' => '501',
              'rank' => '2',
              'author' => 'M. Vinh Van Diep',
              'context' => 'Cours de marketing industriel.',
              'content' => 'Les femmes très cultivées et très belles sont vraiment très casse-pieds. C\'est pour ça que les femmes samouraï sont très fortes.',
            ),
            array
            (
              'id' => '502',
              'rank' => '3',
              'author' => 'M. Christophe Boullay',
              'context' => 'Expliquant un algo...',
              'content' => 'Et là on rentre dans la triple boucle...<br/><br/>... ça nous fait un point en commun avec le patinage artistique !',
            ),
            array
            (
              'id' => '503',
              'rank' => '6',
              'author' => 'Melle. Christel Trémoulet',
              'context' => 'Une question concernant le théorème d\'incomplétude de Gödel',
              'content' => 'Gödel ? C\'est qui ?',
            ),
            array
            (
              'id' => '505',
              'rank' => '-1',
              'author' => 'M. Thierry Géraud',
              'context' => 'En pleine semaine BDE',
              'content' => '- New Deal : le lapin peut venir vous apporter des crêpes ! il peut même venir à poil !Suffit de demander !<br/><br/>- Theo : En même temps... le lapin il viendra toujours à poil !... z\'en avez vu à plumes ?',
            ),
            array
            (
              'id' => '506',
              'rank' => '3',
              'author' => 'M. Pedro Miranda',
              'context' => 'S\'apercevant pendant un cours de maths que le corrigé de l\'exo proposé par le prof est déjà sur l\'écran d\'un laptop, recupéré sur le TD de l\'année précédente',
              'content' => 'Ok, donc en fait ça sert vraiment à rien d\'aller en cours.',
            ),
            array
            (
              'id' => '507',
              'rank' => '1',
              'author' => 'M. Sébastien Bombal',
              'context' => 'Pendant un cours sur la cybersurveillance',
              'content' => 'Le porno c\'est un sujet intéressant...',
            ),
            array
            (
              'id' => '509',
              'rank' => '3',
              'author' => 'M. Marwan Burelle',
              'context' => '',
              'content' => 'Donc, pour écrire à l\'utilisateur, on balance des claviers sur l\'entrée standard !',
            ),
            array
            (
              'id' => '510',
              'rank' => '5',
              'author' => 'Metalman',
              'context' => '',
              'content' => 'Alban, tu deviens socialement adapté, c\'est mal, mais ne t\'en fais pas car, tel un signal, tu es rattrapable.',
            ),
            array
            (
              'id' => '511',
              'rank' => '2',
              'author' => 'M. Marwan Burelle',
              'context' => 'Tout le monde a froid en P10... sauf Marwan qui est en T-Shirt.',
              'content' => 'Eleves : Vous avez pas froid monsieur ?!<br/><br/>Marwan : Bah non...<br/><br/>Metalman *avec une gross voix* ; C\'est la flaaaaamme qui brule en lui ! >-)<br/><br/>Marwan : Hehe... mais non ! C\'est le pouvoir du poil !',
            ),
            array
            (
              'id' => '512',
              'rank' => '1',
              'author' => 'M. Thierry Joubert',
              'context' => 'En parlant de la mémoire virtuelle, en cours de WinCE.',
              'content' => 'Banquier, mémoire virtuel c\'est la même chose.',
            ),
            array
            (
              'id' => '513',
              'rank' => '1',
              'author' => 'Autre',
              'context' => 'M. Abderraouf Benali<br/><br/>En cours avec les GISTR2011',
              'content' => 'La première fois que je suis venu à EPITA, j\'ai failli repartir tout de suite !',
            ),
            array
            (
              'id' => '514',
              'rank' => '0',
              'author' => 'Autre',
              'context' => 'M. Antoine POUTHIER',
              'content' => 'Vous avez eu un cours de SDF ?',
            ),
            array
            (
              'id' => '515',
              'rank' => '1',
              'author' => 'Metalman',
              'context' => 'Au boulot, Metalman a le clavier qwerty de l\'ecole, les raccourcis de l\'ecole, et l\'entreprise est pleine de gens d\'Epita...',
              'content' => 'ElFahme : "S\'pas parce que y\'a pleins d\'Epita que tu dois te croire a l\'ecole !"<br/><br/>Metalman : "Bah je garde les bonnes habitudes"<br/><br/>*ElFahme apercoit le joli O\'Reilly \'Sed et Awk\'*<br/><br/>ElFahme : "SED ET AWK ! OK J\'ME CASSE !"',
            ),
            array
            (
              'id' => '518',
              'rank' => '2',
              'author' => 'marand_a',
              'context' => 'En piscine c++',
              'content' => 'De toutes façons, les types, ça ne sert a rien, on sait ce que l\'on fait.',
            ),
            array
            (
              'id' => '519',
              'rank' => '-1',
              'author' => 'Melle. Christel Trémoulet',
              'context' => 'À propos de la dérivabilité d\'un polynôme',
              'content' => 'C\'est trop fort un polynôme.<br/><br/>C\'est superman un polynôme !',
            ),
            array
            (
              'id' => '520',
              'rank' => '8',
              'author' => 'Un sup ',
              'context' => '2 semaines après avoir reçu son rack :',
              'content' => 'Oh putain y\'a un disque dur dans les racks !',
            ),
            array
            (
              'id' => '521',
              'rank' => '0',
              'author' => 'M. Didier Verna',
              'context' => 'En expliquant le principe du temps réel rigide sur une chaîne de montage automobile',
              'content' => 'Si votre système est "à peu près" réglé, le robot va visser la portière sur le capot, la peinture sur l\'antenne,...  Et à la sortie, c\'est pas une Scenic que vous obtenez, c\'est un Transformer !',
            ),
            array
            (
              'id' => '522',
              'rank' => '3',
              'author' => 'François De Saint Steban',
              'context' => '',
              'content' => '"Faites SIGL" qu\'ils disaient, "vous ne ferez pas que du slide". Ils avaient raison. On se fait GRAVE CHIER AUSSI.',
            ),
            array
            (
              'id' => '523',
              'rank' => '2',
              'author' => 'bidon_m',
              'context' => 'En cours de gestion d\'equipe, la prof demande a Mogmi comment nous allons communiquer au sein du groupe.',
              'content' => 'On dit comment IRL en francais deja ?',
            ),
            array
            (
              'id' => '525',
              'rank' => '12',
              'author' => 'Mme. Anne Sophie Dujardin',
              'context' => 'Voyant que la classe repond facilement aux questions qu\'elle pose en electro, Dujardin s\'interroge:',
              'content' => '- Alors comme ca c\'est vous la classe des STI ?<br/><br/>/* La classe, a peu près en coeur */<br/><br/>- Non, les STI c\'est les C1 !<br/><br/>/* Horgix, au premier rang, subitement se réveille et murmure: */<br/><br/>- Ici c\'est les autistes...<br/><br/>/* La prof, surprise */<br/><br/>- Pardon ?<br/><br/>- Non, rien rien...<br/><br/>/* Elle change d\'expression */<br/><br/>- Je vais continuer le cours comme si j\'avais rien entendu...',
            ),
            array
            (
              'id' => '526',
              'rank' => '0',
              'author' => 'M. Christian Garnier',
              'context' => 'Devant un tableau vide',
              'content' => 'On fait même de l\'enseignement virtuel ici !',
            ),
            array
            (
              'id' => '528',
              'rank' => '1',
              'author' => 'M. Pedro Miranda',
              'context' => 'Lors d\'une JPO, Pedro vient manger a la cafet\' et les vendeurs ont des polos des écoles...',
              'content' => 'Pedro: C\'est marrant, les polos représentent bien les différences entre les écoles !<br/><br/>Le polo Noir EPITA pour le grand chef, des polos IPSA pour les associés... et les polos bleus {Epitech} s\'occupent que des frites !',
            ),
            array
            (
              'id' => '530',
              'rank' => '0',
              'author' => 'pichot_f',
              'context' => '',
              'content' => 'C\'est dommage que dans vim ... on ne puisse pas faire des sélections rectangulaires ... mais pas carrées ... Enfin des sélections carrées ... mais pas rectangulaires.',
            ),
            array
            (
              'id' => '531',
              'rank' => '1',
              'author' => 'gaudet_g',
              'context' => 'lors d\'une soirée après une série de blagues.',
              'content' => 'gaudet_g : Tu peux me redire la blague?<br/><br/>zaag_a : laquelle?<br/><br/>gaudet_g : celle qui est drôle...',
            ),
            array
            (
              'id' => '533',
              'rank' => '0',
              'author' => 'penel_b',
              'context' => 'En TP d\'assembleur.',
              'content' => 'Alors la je prends chaque bit et je joue avec.',
            ),
            array
            (
              'id' => '534',
              'rank' => '1',
              'author' => 'pichot_f',
              'context' => '',
              'content' => 'Tu veux une méta-blague ?<br/><br/>Ben c\'est l\'histoire d\'un type...',
            ),
            array
            (
              'id' => '535',
              'rank' => '0',
              'author' => 'oeuf',
              'context' => 'En JPO, réponse à un intéressé',
              'content' => 'Nous à Epitech on utilise FreeBSD.<br/><br/>FreeBSD, c\'est une VM !',
            ),
            array
            (
              'id' => '536',
              'rank' => '0',
              'author' => 'Oeuf',
              'context' => 'En salle machine',
              'content' => 'Mr X - Tu boot sur linux la ?<br/><br/>Oeuf - Non c\'est Fedora !',
            ),
            array
            (
              'id' => '537',
              'rank' => '0',
              'author' => 'Peter Gabor',
              'context' => 'Dans un mail, suite a son refus de retagger l\'under',
              'content' => 'Dans mon message initial,<br/>par "on peut ajouter..." il fallait bien sûr entendre: "on ne peut ajouter..."',
            ),

        );
    }
}