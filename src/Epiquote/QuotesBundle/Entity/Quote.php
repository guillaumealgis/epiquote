<?php

namespace Epiquote\QuotesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epiquote\QuotesBundle\Entity\Quote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Epiquote\QuotesBundle\Entity\QuoteRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Quote
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
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var integer $rank
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @var text $context
     *
     * @ORM\Column(name="context", type="text")
     */
    private $context;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @var DateTime $createdAt
     * 
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;
    
    /**
     * @ORM\prePersist
     */
    public function setCreatedAtvalue()
    {
        if (!$this->rank) {
            $this->rank = 0;
        }
                
        $this->created_at = new \DateTime();
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
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set context
     *
     * @param text $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Get context
     *
     * @return text 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}