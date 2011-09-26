<?php
// src/Epiquote/QuotesBundle/DataFixtures/ORM/LoadV1Quotes.php
namespace Epiquote\QuotesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Epiquote\QuotesBundle\Entity\Quote;

class LoadV1QuotesCrawled implements FixtureInterface
{
    public function load($manager)
    {
        // Deactivated as theses quotes are now included in the LoadV1Nguyen.php fixture
        return;
      
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
        // These quotes are from a crawling of epiquote.fr
        // in the cache of http://www.archive.org (September 10, 2011)
        
        return array
        (
            array
                (
                    'id' => '23',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'En parlant d\'un sous-arbre vide.',
                    'content' => 'Si vous lui demandez ca, il va apprécier avec beaucoup de modération.',
                ),

            array
                (
                    'id' => '127',
                    'rank' => '0',
                    'author' => 'M. David Bouchet',
                    'context' => '',
                    'content' => 'On va l\'appeler... bit de repos.',
                ),

            array
                (
                    'id' => '123',
                    'rank' => '1',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Boullay fermant la porte à cause d\'ISBPPettes faisant du bruit. Il se rend compte qu\'il y a un verrou',
                    'content' => 'Ah ah, comme ça personne ne saura !',
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
                    'id' => '362',
                    'rank' => '-2',
                    'author' => 'thion-_e',
                    'context' => 'En cours de maths, chapitre "arithmetique" :',
                    'content' => 'Mais non mais la règles s\'applique que sur les denombrables !!!<br /><br />(petit blanc)<br /><br />Ouais, bon, j\'ai pas dit que je savais ce que c\'etait un dénombrable ...',
                ),

            array
                (
                    'id' => '39',
                    'rank' => '11',
                    'author' => 'Warren Seine',
                    'context' => 'Piscine-J7 : 20 minutes avant la deadline.',
                    'content' => 'Est-ce qu\'on rend les fichiers .c ?',
                ),

            array
                (
                    'id' => '383',
                    'rank' => '1',
                    'author' => 'Dr Akli Adjaoute',
                    'context' => 'À propos des chercheurs en IA',
                    'content' => 'C\'est quoi l\'intelligence ? Ils ont écrit des livres de 1000 pages pour expliquer ça ; ils ont une responsabilité morale dans le réchauffement de la planète.',
                ),

            array
                (
                    'id' => '465',
                    'rank' => '1',
                    'author' => 'Lhuill_g',
                    'context' => 'Pendant une discutions sur 2012 et la fin du monde.',
                    'content' => 'Le 31/12/2012 à 21h42, c\'est quand Dieu rendra sa v1.0.',
                ),

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
                    'rank' => '1',
                    'author' => 'M. Nadjim Benali',
                    'context' => 'Durant l\'appel des SPE-B2 (what else?).',
                    'content' => '(Benali): Pham ?<br />(Elève) : Je vous aime...',
                ),

            array
                (
                    'id' => '3',
                    'rank' => '10',
                    'author' => 'M. Yves-Jean Daniel',
                    'context' => '',
                    'content' => 'Nous ne ferons pas la preuve de ce théorème... il ne le mérite même pas.',
                ),

            array
                (
                    'id' => '4',
                    'rank' => '16',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Certains voudront se rebeller en mettant des variables globales. Bah qu\'ils se rebellent, je leur mettrai zéro. Ils se rebellent, zéro. Ils se rebellent, zéro. Ils se rebellent, zéro...  Curieusement ils se lassent toujours avant moi...',
                ),

            array
                (
                    'id' => '5',
                    'rank' => '-2',
                    'author' => 'M. Steve Franck',
                    'context' => '',
                    'content' => 'Harraps? Harraps is shit!',
                ),

            array
                (
                    'id' => '6',
                    'rank' => '-24',
                    'author' => 'Lalien',
                    'context' => '',
                    'content' => '\'tain la honte il utilise IE... vas te pendre !',
                ),

            array
                (
                    'id' => '7',
                    'rank' => '6',
                    'author' => 'M. Stéphane Nicolet',
                    'context' => 'Le cours se déroule tranquillement, pas un bruit à l\'horizon... sauf peut-être, oui c\'est bien ça : une mouche qui bourdonne quelque part en Sibérie... Stéphane nous lance alors d\'un ton accusateur d\'une férocité ravageuse :',
                    'content' => 'Vous commencez sérieusement... À ME LES BROUTER ! Euh oui, bon, ça va hein !',
                ),

            array
                (
                    'id' => '8',
                    'rank' => '-1',
                    'author' => 'M. Christian Viallet',
                    'context' => '',
                    'content' => 'Ça marche comme sur du papier à roulette !',
                ),

            array
                (
                    'id' => '9',
                    'rank' => '-2',
                    'author' => 'Saadik',
                    'context' => '',
                    'content' => 'Le problème c\'est que Bistinct a le physique d\'ephialtès.',
                ),

            array
                (
                    'id' => '10',
                    'rank' => '-4',
                    'author' => 'Bistinct',
                    'context' => '',
                    'content' => 'Le problème c\'est que Saadik\' on dirait un Beegees.',
                ),

            array
                (
                    'id' => '16',
                    'rank' => '9',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Tu leur as fait une blague à deux octets ?',
                ),

            array
                (
                    'id' => '271',
                    'rank' => '-2',
                    'author' => 'Vincent Nguyen (webmaster epiquote)',
                    'context' => 'Le site epiquote est down :',
                    'content' => 'Un élève : Cure demande pourquoi epiquote est down.<br />Vincent : ils acceptent pas ma carte bleue  -_-',
                ),

            array
                (
                    'id' => '270',
                    'rank' => '-1',
                    'author' => 'Jonathan Ghalmi',
                    'context' => '// What the fuck ?',
                    'content' => 'On dirait plutot un tigre qui a mangé un curé. Bin oui y\'a des écureuils en asie...',
                ),

            array
                (
                    'id' => '269',
                    'rank' => '2',
                    'author' => 'Bob Rafie',
                    'context' => 'En cours de Qualité, le prof annonce "... Vous savez, la qualité ça n\'a pas été inventé. Ça a été découvert !"',
                    'content' => '- Et donc ils ont trouvé la qualité dans un puit.<br />- Tu te rends compte ? Dans un puit.<br />- Et après ils ont trouvé une centrale thermonucléaire dans un abribus !',
                ),

            array
                (
                    'id' => '268',
                    'rank' => '2',
                    'author' => 'Fabien Choutal',
                    'context' => '',
                    'content' => '- Renaud: Tu mérites le fist par pendaison!<br />- Fabien: Ca veut rien dire en plus!<br />... petit blanc de 5 secondes ...<br />- Fabien: Ca veut rien dire hein?<br />',
                ),

            array
                (
                    'id' => '267',
                    'rank' => '1',
                    'author' => 'Ben_j',
                    'context' => 'Parlant de rentrer en boîte',
                    'content' => 'Je pense qu\'à 2 mecs et 2 filles ça rentre tranquille.',
                ),

            array
                (
                    'id' => '266',
                    'rank' => '0',
                    'author' => 'DeeCee',
                    'context' => 'En parlant a Kasia de lui meme',
                    'content' => 'Je suis tellement beau goss que si j\'etais une fille, je sortirais avec moi meme !!!!',
                ),

            array
                (
                    'id' => '264',
                    'rank' => '-1',
                    'author' => 'Piotr Pawlicki',
                    'context' => 'Parlant des commentaires sur le Skyblog de Deecee...',
                    'content' => 'C\'était le temps où tu pouvais écrire d\'une seule main et te branler de l\'autre tellement il manquait de lettres dans la phrase!',
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
                    'id' => '262',
                    'rank' => '0',
                    'author' => 'NellA',
                    'context' => 'Voulant profiter du soleil...',
                    'content' => 'Viens on va se toucher dans un parc.',
                ),

            array
                (
                    'id' => '261',
                    'rank' => '4',
                    'author' => 'Julien Quintard',
                    'context' => 'En cours de systèmes répartis',
                    'content' => 'Si le server lache, vous vous bouffez les couilles.',
                ),

            array
                (
                    'id' => '206',
                    'rank' => '1',
                    'author' => 'dagnas_f',
                    'context' => '',
                    'content' => 'J\'ajouterai qu\'à Epitech Bordeaux, le mot piscine prend tout son sens à chaque fois qu\'il pleut, vu l\'état de la toiture et des plafonds!',
                ),

            array
                (
                    'id' => '20',
                    'rank' => '5',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'En parlant du son de recul d\'un engin de chantier dehors.',
                    'content' => 'Vous voulez pas qu\'on aille le buter le gars dehors là ?',
                ),

            array
                (
                    'id' => '22',
                    'rank' => '15',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Deux minutes avant le cours d\'algo, Junior arrive dans la salle avec Krisboul.',
                    'content' => 'Junior : T\'as vu, moi ils me disent bonjour !<br />Krisboul : C\'est pas grave, je les emmerde.',
                ),

            array
                (
                    'id' => '25',
                    'rank' => '4',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Pendant l\'appel des B1 et B2.',
                    'content' => 'Seine ! (pas de réponse)<br />Soula ! ... Seine ? Sous la Seine...',
                ),

            array
                (
                    'id' => '40',
                    'rank' => '2',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'À un élève qui parlait pendant le cours.',
                    'content' => 'Tu fais des sons... des trucs qu\'on entend avec les oreilles.',
                ),

            array
                (
                    'id' => '44',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'En réponse à une question.',
                    'content' => 'Si tu vois une boîte avec de longs trucs verts et que sur la boîte il y a écrit Daucy, je ne vais pas te dire que c\'est des haricots.',
                ),

            array
                (
                    'id' => '60',
                    'rank' => '3',
                    'author' => 'M. Christophe Boullay',
                    'context' => '30 minutes après le début du cours.',
                    'content' => 'Rolala ça va plus du tout! Je ne suis plus rodé, j\'en ai même oublié le café!',
                ),

            array
                (
                    'id' => '66',
                    'rank' => '13',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Re-entrant dans la sale de cours après avoir demandé gentiment à des hystériques isbpettes de se taire.',
                    'content' => 'Y\'a de quoi devenir pédé.',
                ),

            array
                (
                    'id' => '93',
                    'rank' => '3',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Parlant d\'une fonction.',
                    'content' => 'Elle est sur le site de Nathalie, mais elle est moche. La fonction, pas Nathalie, hein ! Je précise, parce que l\'étudiant est sournois...',
                ),

            array
                (
                    'id' => '94',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Un élève explique qu\'il n\'arrive pas à utiliser XEmacs pour coder en CAML chez lui.',
                    'content' => '- Boullay: Mais vous avez installé Objective CAML ?<br />- Elève: Non.<br />- Boullay: Ah ! Il est mignon...',
                ),

            array
                (
                    'id' => '95',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Beaucoup, ça commence à 3. Trop, c\'est au dessus de 2.',
                ),

            array
                (
                    'id' => '100',
                    'rank' => '1',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Oui je pourrais répondre à ta question... mais à un moment il faut trouver la voie.',
                ),

            array
                (
                    'id' => '101',
                    'rank' => '1',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Tu installes Objective CAML et là... Dieu est grand !',
                ),

            array
                (
                    'id' => '122',
                    'rank' => '-1',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Faut que j\'arrive à dégazer. <i>(Lapsus sur "dégager", cours sur les graphes...)</i>',
                ),

            array
                (
                    'id' => '124',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Parlant d\'un sommet ayant un lien avec tous les sommets d\'un graphe',
                    'content' => 'JM: Oh le batard<br />/* 5 minutes de reflexion */<br />Krisboul: Je ne sais pas... si on peut le traiter de ça...',
                ),

            array
                (
                    'id' => '125',
                    'rank' => '3',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Là je suis obligé de tous me les taper.',
                ),

            array
                (
                    'id' => '135',
                    'rank' => '1',
                    'author' => 'M. Christophe Boullay',
                    'context' => '',
                    'content' => 'Warren:	Euh, pourquoi G(graphe) c\'est une variable ?<br />Krisboul: Parce que t\'es dans une procédure. ... Putain c\'est complètement con ce que je viens de dire.',
                ),

            array
                (
                    'id' => '136',
                    'rank' => '0',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'Avec un bel accent allemand.',
                    'content' => 'Entier t, c\'est un sommet, le "sommet de Testination"',
                ),

            array
                (
                    'id' => '159',
                    'rank' => '5',
                    'author' => 'M. Christophe Boullay',
                    'context' => 'En parlant de l\'algorithme de Dijkstra.',
                    'content' => 'Et là, tel les soeurs Halliwell, je supprime la source !',
                ),

            array
                (
                    'id' => '34',
                    'rank' => '4',
                    'author' => 'Warren Seine',
                    'context' => 'Piscine-j04 (sur les Makefile) - 4:51',
                    'content' => 'Putain comme password je mets Makefile...',
                ),

            array
                (
                    'id' => '36',
                    'rank' => '7',
                    'author' => 'Warren Seine',
                    'context' => 'Debuggant un programme à 3h du matin.',
                    'content' => 'Non mais j\'ai fait le test avec les doigts, ça marche.',
                ),

            array
                (
                    'id' => '42',
                    'rank' => '48',
                    'author' => 'Warren Seine',
                    'context' => 'Justificatif d\'absence à un cours<br />(notez que ceci lui a valu un conseil de discipline et un "Mais tu es un fou !" de M. Christian Dujardin)',
                    'content' => 'J\'étais aux putes et il y avait du monde.',
                ),

            array
                (
                    'id' => '168',
                    'rank' => '6',
                    'author' => 'Warren Seine',
                    'context' => 'Projet IBC++, Cédric R.(spycAm) n\'a toujours pas touché une ligne de code pour un rendu censé être dans 36heures.',
                    'content' => 'Annonce :<br />~ Bonjour,    Le rendu d\'IBC++ aura lieu le Dimanche 23 Mars 2008 a 12h00 au lieu du mercredi 19 mars 2008.    Un deuxième rendu intermédiaire sera ouvert le mercredi 19 mars entre  12h45 et 13h30.    N\'oubliez pas de bien équilibrer votre charge de travail entre IBC++ et TC4.    Cordialement,<br /><br />Warren: OMFG :D<br />Warren: TROUVE UN PUTAIN DE MOYEN D\'EMPÊCHER CÉDRIC DE LIRE CETTE NEWS !',
                ),

            array
                (
                    'id' => '243',
                    'rank' => '-1',
                    'author' => 'Warren Seine',
                    'context' => '',
                    'content' => 'Jean-Marc: Pourquoi mon siège il vibre ?<br />Warren: C\'est le gode que tu as oublié de retirer de ton cul.',
                ),

            array
                (
                    'id' => '247',
                    'rank' => '1',
                    'author' => 'Warren Seine',
                    'context' => 'En cours d\'Anglais.',
                    'content' => '- Warren: Hamlet? Euh... it was a writer!<br />- Prof: No no, Shakespeare was the writer.',
                ),

            array
                (
                    'id' => '173',
                    'rank' => '16',
                    'author' => 'M. Patrick Peillon',
                    'context' => '',
                    'content' => '- Patrick : J\'ai passé les 60 ans...<br />- Un éleve : Et c\'est dur?<br />- Patrick : Non, plus très dur, justement...',
                ),

            array
                (
                    'id' => '69',
                    'rank' => '14',
                    'author' => 'A. Testu',
                    'context' => 'Massy exprime son amour pour Pierre Guilbert avec virulence...',
                    'content' => 'Massy : Tu vois, sur l\'autoroute de l\'évolution, toi t\'es sur la bande d\'arrêt d\'urgence...<br />Pierre : ...<br />Testu : Et toi Massy, tu roules à contre-sens...<br />',
                ),

            array
                (
                    'id' => '70',
                    'rank' => '12',
                    'author' => 'Baptiste Afsa',
                    'context' => '',
                    'content' => 'Le seul truc qui manque à Emacs, c\'est des nichons.',
                ),

            array
                (
                    'id' => '75',
                    'rank' => '12',
                    'author' => 'M. Akim Demaille',
                    'context' => 'Après le son d\'un Windows XP bootant.',
                    'content' => 'Alors ça je ne veux plus jamais l\'entendre dans un de mes cours. C\'est pire qu\'un téléphone qui sonne. On est dans une école d\'informatique ! Ceux qui veulent faire de la bureautique vous pouvez sortir.',
                ),

            array
                (
                    'id' => '186',
                    'rank' => '12',
                    'author' => 'Pedro',
                    'context' => '',
                    'content' => 'Je cherche un MTI, ceux qui colorient les triangles.',
                ),

        );
    }
}