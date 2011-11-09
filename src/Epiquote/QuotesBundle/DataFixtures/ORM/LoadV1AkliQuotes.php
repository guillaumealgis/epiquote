<?php
// src/Epiquote/QuotesBundle/DataFixtures/ORM/LoadV1Quotes.php
namespace Epiquote\QuotesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Epiquote\QuotesBundle\Entity\Quote;

class LoadV1AkliQuotes implements FixtureInterface
{
    public function load($manager)
    {
        foreach ($this->getQuotesArray() as $quote)
        {
            $q = new Quote();
            $q->setAuthor('Dr Akli Adjaoute');
            $q->setRank(0);
            $q->setContext($quote['context']);
            $q->setContent($quote['content']);
            
            $manager->persist($q);
        }
        
        $manager->flush();
    }
    
    private function getQuotesArray()
    {
        // These quotes are courtesy of Laurent le Brun, Epita 2007
        
        return array
        (
          array
            (
              'context' => "Premier cours",
              'content' => "Vous êtes déjà meilleurs que les ingénieurs.",
            ),

          array
            (
              'context' => "",
              'content' => "Tant qu'il n'y a pas d'application industrielle, c'est un truc de recherche ; donc, ça ne sert à rien.",
            ),

          array
            (
              'context' => "",
              'content' => "Sur 10 000 chercheurs, il y en a 1 qui vaut la peine.",
            ),

          array
            (
              'context' => "",
              'content' => "Les sciences cognitives, c'est pas de la philosophie.",
            ),

          array
            (
              'context' => "",
              'content' => "Il y a d'autres spés pour le fénéantisme.",
            ),

          array
            (
              'context' => "",
              'content' => "Il n'y a pas plus débile qu'un langage objet.",
            ),

          array
            (
              'context' => "",
              'content' => "Quand on va vous dire \"les objets sont réutilisables\", c'est n'importe quoi.",
            ),

          array
            (
              'context' => "",
              'content' => "Les gens qui travaillent dans les magazines, ils ne valent rien... sinon, ils ne travailleraient pas dans les magazines.",
            ),

          array
            (
              'context' => "",
              'content' => "Votre temps est précieux. Il y a des étudiants qui perdent leur temps à faire des trucs débiles : HTML, Flash...",
            ),

          array
            (
              'context' => "",
              'content' => "HTML, c'est la secrétaire qui le fait.",
            ),

          array
            (
              'context' => "",
              'content' => "Les frames ont été inventées en 1705. Le CBR (ndlr : Case-based reasoning), c'est le Moyen-Âge.",
            ),

          array
            (
              'context' => "",
              'content' => "99 999%, voire 100 000%, des gens qui disent utiliser des agents, on peut utiliser des frames à la place.",
            ),

          array
            (
              'context' => "",
              'content' => "Je suis sûr de ne jamais rien apprendre de quiconque en multi-agents.",
            ),

          array
            (
              'context' => "",
              'content' => "- C'est quoi ton prénom ?\n- Shen.\n- Shen, tu es beau !",
            ),

          array
            (
              'context' => "",
              'content' => "Tu sais que tu as une belle voix ?",
            ),

          array
            (
              'context' => "",
              'content' => "Si ça existe, je ne l'ai pas vu. Et si je ne l'ai pas vu, ça n'existe pas.",
            ),

          array
            (
              'context' => "Des étudiants se plaignent d'un emploi du temps surchargé.",
              'content' => "Le problème, c'est que la semaine prochaine, on aura 50 heures de cours. Je vais réduire : vous n'en aurez plus.",
            ),

          array
            (
              'context' => "",
              'content' => "Le jour où il y a eu .NET, j'ai arrêté définitivement Microsoft : j'ai pas aimé le nom.",
            ),

          array
            (
              'context' => "",
              'content' => "Akli est le meilleur professeur de sciences cognitives au monde.",
            ),

          array
            (
              'context' => "",
              'content' => "Thomas, il vaut 100 étudiants. Et je ne parle pas pour parler.",
            ),

          array
            (
              'context' => "",
              'content' => "Il n'y a pas au monde plus intelligent que le peuple français. Un ingénieur français égale cinquante ingénieurs indiens... quand il réfléchit et qu'il ne fait pas de Flash.",
            ),

          array
            (
              'context' => "",
              'content' => "La meilleure des qualités, c'est de dire : \"Je ne sais pas.\"",
            ),
        );
    }
}