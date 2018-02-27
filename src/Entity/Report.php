<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReportRepository")
 */
class Report
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
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="location_name", type="string", length=255, nullable=false)
     */
    private $locationName;

    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="primaryReports")
     * @ORM\JoinColumn(name="primaryEventForm_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $primaryEventForm;

    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="secondaryReports")
     * @ORM\JoinColumn(name="secondaryEventForm_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $secondaryEventForm;

    /**
     * @ORM\ManyToOne(targetEntity="Cause", inversedBy="primaryReports")
     * @ORM\JoinColumn(name="primaryCause_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $primaryCause;

    /**
     * @ORM\ManyToOne(targetEntity="Cause", inversedBy="secondaryReports")
     * @ORM\JoinColumn(name="secondaryCause_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $secondaryCause;

    /**
     * @ORM\OneToMany(targetEntity="ReportTag", mappedBy="report")
     */
    private $reporttags;

    public function __construct() {
        $this->reporttags = new ArrayCollection();
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
     * @return Report
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
     * Set description
     *
     * @param string $description
     *
     * @return Report
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

	/**
     * Set date
     *
     * @param string $date
     *
     * @return Report
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
	
	/**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Report
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Report
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

	/**
     * Set locationName
     *
     * @param string $locationName
     *
     * @return Report
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Set primaryEventForm
     *
     * @param \App\Entity\Event $primaryEventForm
     *
     * @return Report
     */
    public function setPrimaryEventForm(\App\Entity\Event $primaryEventForm = null)
    {
        $this->primaryEventForm = $primaryEventForm;

        return $this;
    }

    /**
     * Get primaryEventForm
     *
     * @return \App\Entity\Event
     */
    public function getPrimaryEventForm()
    {
        return $this->primaryEventForm;
    }

    /**
     * Set secondarEventForm
     *
     * @param \App\Entity\Event $secondaryEventForm
     *
     * @return Report
     */
    public function setSecondaryEventForm(\App\Entity\Event $secondaryEventForm = null)
    {
        $this->secondaryEventForm = $secondaryEventForm;

        return $this;
    }

    /**
     * Get secondaryEventForm
     *
     * @return \App\Entity\Event
     */
    public function getSecondaryEventForm()
    {
        return $this->secondaryEventForm;
    }

	/**
     * Set primaryCause
     *
     * @param \App\Entity\Cause $primaryCause
     *
     * @return Report
     */
    public function setPrimaryCause(\App\Entity\Cause $primaryCause = null)
    {
        $this->primaryCause = $primaryCause;

        return $this;
    }

    /**
     * Get primaryCause
     *
     * @return \App\Entity\Cause
     */
    public function getPrimaryCause()
    {
        return $this->primaryCause;
    }

    /**
     * Set secondaryCause
     *
     * @param \App\Entity\Cause $secondaryCause
     *
     * @return Report
     */
    public function setSecondaryCause(\App\Entity\Cause $secondaryCause = null)
    {
        $this->secondaryCause = $secondaryCause;

        return $this;
    }

    /**
     * Get secondaryCause
     *
     * @return \App\Entity\Cause
     */
    public function getSecondaryCause()
    {
        return $this->secondaryCause;
    }
	

	/**
     * Get reporttags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
	public function getReportTags()
    {
        return $this->reporttags;
    }

    /**
     * Add reporttag
     *
     * @param \App\Entity\Tag $reporttag
     *
     * @return Report
     */
    public function addReportTag(\App\Entity\ReportTag $reporttag)
    {
        // if($this->tags->contains($tag)){
        //     return;
        // }
        $this->reporttags->add($reporttag);
    }

    // public function hasCustomer(\AppBundle\Entity\Customer $customer){
    //     if($this->customers->contains($customer)){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    /**
     * Remove reporttag
     *
     * @param \App\Entity\ReportTag $reporttag
     */
    public function removeReportTag(\App\Entity\ReportTag $reporttag)
    {
        $this->reporttags->removeElement($reporttag);
    }
}
