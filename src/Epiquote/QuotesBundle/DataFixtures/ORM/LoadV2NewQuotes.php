<?php
// src/Epiquote/QuotesBundle/DataFixtures/ORM/LoadV1Quotes.php
namespace Epiquote\QuotesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Epiquote\QuotesBundle\Entity\Quote;

class LoadV2NewQuotes implements FixtureInterface
{
    public function load($manager)
    {
        foreach ($this->getQuotesArray() as $quote)
        {
            $q = new Quote();
            $q->setAuthor($quote['author']);
            $q->setRank(0);
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
                    'author' => "M. Marwan Burelle",
                    'context' => "Dans une news concernant les Ing1, en piscine à ce moment là .",
                    'content' => "En attendant, nagez bien dans les memory-pools, utilisez vos pointeurs
pour floater et veuillez au moins sourire aux blagues pourries de
votre dévoué serviteur.",
                ),

        );
    }
}