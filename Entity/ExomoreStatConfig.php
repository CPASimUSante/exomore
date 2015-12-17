<?php
namespace CPASimUSante\ExomoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Claroline\CoreBundle\Entity\Widget\WidgetInstance;

/**
 * @ORM\Entity
 * @ORM\Table(name="cpasimusante__exoverride_stat_configuration")
 */
class ExomoreStatConfig
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $graphType;

    /**
     * @ORM\ManyToOne(targetEntity="Claroline\CoreBundle\Entity\Widget\WidgetInstance")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $widgetInstance;

    public function getId()
    {
        return $this->id;
    }

    public function setWidgetInstance(WidgetInstance $ds)
    {
        $this->widgetInstance = $ds;
    }

    public function getWidgetInstance()
    {
        return $this->widgetInstance;
    }

    /**
     * Set graphType
     *
     * @param integer $graphType
     *
     * @return ExomoreStatConfig
     */
    public function setGraphType($graphType)
    {
        $this->graphType = $graphType;

        return $this;
    }

    /**
     * Get graphType
     *
     * @return integer
     */
    public function getGraphType()
    {
        return $this->graphType;
    }
}
