<?php
// Nepmon
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="ReportTag", mappedBy="tag")
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
     * Set name
     *
     * @param string $name
     *
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Tag
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
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
     * @param \App\Entity\ReportTag $reporttag
     *
     * @return Tag
     */
    public function addReportTag(\App\Entity\ReportTag $reporttag)
    {
        // if($this->reporttags->contains($reporttag)){
        //     return;
        // }
        $this->reports->add($reporttag);
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
