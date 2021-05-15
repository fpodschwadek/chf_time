<?php

namespace Digicademy\ChfTime\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2018 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use Digicademy\ChfTime\Domain\Model\TemporalEntity as ParentTemporalEntity;
use Digicademy\ChfGeo\Domain\Model\Toponym;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;

class TemporalEntity extends AbstractEntity
{

    /**
     * Persistent Identifier
     *
     * @var \string $persistentIdentifier
     * @Extbase\Validate("NotEmpty")
     */
    protected $persistentIdentifier;

    /**
     * Name
     *
     * @var \string $name
     */
    protected $name;

    /**
     * Name
     *
     * @var \string $nameVariants
     */
    protected $nameVariants;

    /**
     * Type
     *
     * @var \integer $type
     */
    protected $type;

    /**
     * Parent Entity
     *
     * @var \Digicademy\ChfTime\Domain\Model\TemporalEntity $parent
     * @Lazy
     */
    protected $parent;

    /**
     * Date Range
     *
     * @var \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     * @Lazy
     */
    protected $dateRange;

    /**
     * Spatial Extent
     *
     * @var \Digicademy\ChfGeo\Domain\Model\Toponym $spatialExtent
     * @Lazy
     */
    protected $spatialExtent;

    /**
     * Source
     *
     * @var \string $source
     */
    protected $source;

    /**
     * Description
     *
     * @var \string $description
     */
    protected $description;

    /**
     * Returns the persistentIdentifier
     *
     * @return \string
     */
    public function getPersistentIdentifier()
    {
        return $this->persistentIdentifier;
    }

    /**
     * Sets the persistentIdentifier
     *
     * @param \string $persistentIdentifier
     *
     * @return void
     */
    public function setPersistentIdentifier($persistentIdentifier)
    {
        $this->persistentIdentifier = $persistentIdentifier;
    }

    /**
     * Returns the name
     *
     * @return \string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param \string $name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the nameVariants
     *
     * @return \string
     */
    public function getNameVariants()
    {
        return $this->nameVariants;
    }

    /**
     * Sets the nameVariants
     *
     * @param \string $nameVariants
     *
     * @return void
     */
    public function setNameVariants($nameVariants)
    {
        $this->nameVariants = $nameVariants;
    }

    /**
     * Returns the type
     *
     * @return \integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \integer $type
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the parent
     *
     * @return \Digicademy\ChfTime\Domain\Model\TemporalEntity
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent
     *
     * @param \Digicademy\ChfTime\Domain\Model\TemporalEntity $parent
     *
     * @return void
     */
    public function setParent(ParentTemporalEntity $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Returns the dateRange
     *
     * @return \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets the dateRange
     *
     * @param \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     *
     * @return void
     */
    public function setDateRange(DateRanges $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * Get the Spatial Extent
     *
     * @return \Digicademy\ChfGeo\Domain\Model\Toponym $spatialExtent
     */
    public function getSpatialExtent()
    {
        return $this->spatialExtent;
    }

    /**
     * Sets the Spatial Extent
     *
     * @param \Digicademy\ChfGeo\Domain\Model\Toponym $spatialExtent
     *
     * @return void
     */
    public function setSpatialExtent(Toponym $spatialExtent)
    {
        $this->spatialExtent = $spatialExtent;
    }

    /**
     * Returns the source
     *
     * @return \string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets the source
     *
     * @param \string $source
     *
     * @return void
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Returns the description
     *
     * @return \string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param \string $description
     *
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
