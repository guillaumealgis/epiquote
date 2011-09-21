<?php

namespace Epiquote\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\Security\Core\User\UserInterface;

/**
 * Epiquote\SecurityBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Epiquote\SecurityBundle\Entity\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * We use email for username, but UserInterface forces us
     * to call it "username"
     * 
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255, unique="true")
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * Even is the UserInterface forces us to use an array, we store the role
     * as a string as the only possibles roles are ADMIN and SUPER_ADMIN
     * 
     * @var array $roles
     *
     * @ORM\Column(name="roles", type="string", length=255)
     */
    private $roles;
    
    
    /**
     * Compare two Users
     *
     * @return boolean
     */
    public function equals(UserInterface $user) {
      return $this->getUsername() == $user->getUsername();
    }

    /**
     * ??? FIXME
     *
     * @return mixed
     */
    public function eraseCredentials() {
      // Don't really know what I should put here...
      // If you do, please let me know :)
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
      return $this->password;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles() {
      return array($this->roles); // Must return an array according to UserInterface
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt() {
      return $this->salt;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
      return $this->username;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Set roles
     *
     * @param string $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
}