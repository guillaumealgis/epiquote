<?php
// src/Epiquote/QuotesBundle/DataFixtures/ORM/LoadV1Quotes.php
namespace Epiquote\QuotesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Epiquote\SecurityBundle\Entity\User;

class LoadDefaultUsers implements FixtureInterface
{
    public function load($manager)
    {
      $q = new User();
      $q->setUsername('admin@epiquote.fr');
      $q->setSalt('2ef75a78ab5c7ba5709a6bbdd18cefba41d98efa');
      $q->setPassword('FxbF6sM8r/0wk6w7AcDwHi1ROoGYCqtIatOwyAxwZZUQlK3fQWuwfCahMdeTccTiLmN+ZwxhLrvNzYAqfGQM4g==');
      $q->setRoles('ROLE_SUPER_ADMIN');
      
      $manager->persist($q);
        
      $manager->flush();
    }
}