<?php
// Nepmon
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReportTagRepository")
 */
class ReportTag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Report", inversedBy="reporttags")
     * @ORM\JoinColumn(name="report_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $report;

    /**
     * @ORM\ManyToOne(targetEntity="Tag", inversedBy="reporttags")
     * @ORM\JoinColumn(name="tag_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

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
     * Set reportId
     *
     * @param \App\Entity\Report $report
     *
     * @return ReportTag
     */
    public function setReport(\App\Entity\Report $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \App\Entity\Report
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set tag
     *
     * @param \App\Entity\Tag $tag
     *
     * @return ReportTag
     */
    public function setTag(\App\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \App\Entity\Tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return ReportTag
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

}
