<?php
// Nepmon
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status=1;

    /**
     * @ORM\OneToMany(targetEntity="Report", mappedBy="primaryEventFrom")
     */
    private $primaryReports;

    /**
     * @ORM\OneToMany(targetEntity="Report", mappedBy="secondaryEventForm")
     */
    private $secondaryReports;

     public function __construct()
    {
        $this->primaryReports = new ArrayCollection();
        $this->secondaryReports = new ArrayCollection();
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
     * @return Event
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
     * @return Event
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
     * Set type
     *
     * @param boolean $type
     *
     * @return Event
     */
    public function setType($type) {
    	$this->type = $type;

    	return $this;
    }

    /**
     * Get type
     *
     * @return bool
     */
    public function getType() {
    	return $this->type;
    }

    /**
     * Add primaryReport
     *
     * @param \App\Entity\Report $primaryReport
     *
     * @return Event
     */
    public function addPrimaryReport(\App\Entity\Report $primaryReport)
    {
        $this->primaryReports[] = $primaryReport;

        return $this;
    }

    /**
     * Remove primaryReport
     *
     * @param \App\Entity\Report $primaryReport
     */
    public function removePrimaryReport(\App\Entity\Report $primaryReport)
    {
        $this->primaryReports->removeElement($primaryReport);
    }

    /**
     * Get primaryReports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrimaryReports()
    {
        return $this->primaryReports;
    }   

    /**
     * Add secondaryReport
     *
     * @param \App\Entity\Report $secondaryReport
     *
     * @return Event
     */
    public function addSecondaryReport(\App\Entity\Report $secondaryReport)
    {
        $this->secondaryReports[] = $secondaryReport;

        return $this;
    }

    /**
     * Remove secondaryReport
     *
     * @param \App\Entity\Report $secondaryReport
     */
    public function removeSecondaryReport(\App\Entity\Report $secondaryReport)
    {
        $this->secondaryReports->removeElement($secondaryReport);
    }

    /**
     * Get secondaryReports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSecondaryReports()
    {
        return $this->secondaryReports;
    }   
}
