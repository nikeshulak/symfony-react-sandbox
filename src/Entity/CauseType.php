<?php
// Nepmon
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CauseTypeRepository")
 */
class CauseType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status=1;

    /**
     * @ORM\OneToMany(targetEntity="Cause", mappedBy="causetype")
     */
    private $causes;

    public function __construct()
    {
        $this->causes = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CauseType
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return CauseType
     */
    public function setStatus($status) {
    	$this->status = $status;

    	return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus() {
    	return $this->status;
    }
 	
 	/**
     * Add cause
     *
     * @param \App\Entity\Cause $cause
     *
     * @return CauseType
     */
    public function addCause(\App\Entity\Cause $cause)
    {
        $this->causes[] = $cause;

        return $this;
    }

    /**
     * Remove cause
     *
     * @param \App\Entity\Cause $cause
     */
    public function removeCause(\App\Entity\Cause $cause)
    {
        $this->causes->removeElement($cause);
    }

    /**
     * Get causes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCauses()
    {
        return $this->causes;
    }   
}