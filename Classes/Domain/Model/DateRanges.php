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

use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

class DateRanges extends AbstractValueObject
{

    /**
     * The method for the date
     *
     * @var \string $label
     */
    protected $label;

    /**
     * The start date of the range
     *
     * @var \string $datingFrom
     */
    protected $datingFrom;

    /**
     * The precision of the from date
     *
     * @var \string $precisionFrom
     */
    protected $precisionFrom;

    /**
     * The end date of the range
     *
     * @var \string $datingTo
     */
    protected $datingTo;

    /**
     * The precision of the to date
     *
     * @var \string $precisionTo
     */
    protected $precisionTo;

    /**
     * A date key or other date qualifier
     *
     * @var \string $datingPoint
     */
    protected $datingPoint;

    /**
     * The dating method
     *
     * @var \string $method
     */
    protected $method;

    /**
     * The certainty of the date
     *
     * @var \integer $certainty
     */
    protected $certainty;

    /**
     * The duration
     *
     * @var \string $duration
     */
    protected $duration;

    /**
     * The calendar used
     *
     * @var \Digicademy\ChfTime\Domain\Model\Calendar $calendar
     */
    protected $calendar;

    /**
     * A date temporalEntity
     *
     * @var \Digicademy\ChfTime\Domain\Model\TemporalEntity $temporalEntity
     */
    protected $temporalEntity;

    /**
     * Returns the label
     *
     * @return \string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the label
     *
     * @param \string $label
     *
     * @return void
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Returns the datingFrom
     *
     * @return \string
     */
    public function getDatingFrom()
    {
        return $this->datingFrom;
    }

    /**
     * Sets the datingFrom
     *
     * @param \string $datingFrom
     *
     * @return void
     */
    public function setDatingFrom($datingFrom)
    {
        $this->datingFrom = $datingFrom;
    }

    /**
     * Returns the precisionFrom
     *
     * @return \string
     */
    public function getPrecisionFrom()
    {
        return $this->precisionFrom;
    }

    /**
     * Sets the precisionFrom
     *
     * @param \string $precisionFrom
     *
     * @return void
     */
    public function setPrecisionFrom($precisionFrom)
    {
        $this->precisionFrom = $precisionFrom;
    }

    /**
     * Returns the datingTo
     *
     * @return \string
     */
    public function getDatingTo()
    {
        return $this->datingTo;
    }

    /**
     * Sets the datingTo
     *
     * @param \string $datingTo
     *
     * @return void
     */
    public function setDatingTo($datingTo)
    {
        $this->datingTo = $datingTo;
    }

    /**
     * Returns the precisionTo
     *
     * @return \string
     */
    public function getPrecisionTo()
    {
        return $this->precisionTo;
    }

    /**
     * Sets the precisionTo
     *
     * @param \string $precisionTo
     *
     * @return void
     */
    public function setPrecisionTo($precisionTo)
    {
        $this->precisionTo = $precisionTo;
    }

    /**
     * Returns the datingPoint
     *
     * @return \string
     */
    public function getDatingPoint()
    {
        return $this->datingPoint;
    }

    /**
     * Sets the datingPoint
     *
     * @param \string $datingPoint
     *
     * @return void
     */
    public function setDatingPoint($datingPoint)
    {
        $this->datingPoint = $datingPoint;
    }

    /**
     * Returns the method
     *
     * @return \string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets the method
     *
     * @param \string $method
     *
     * @return void
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Returns the certainty
     *
     * @return \integer
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * Sets the certainty
     *
     * @param \integer $certainty
     *
     * @return void
     */
    public function setCertainty($certainty)
    {
        $this->certainty = $certainty;
    }

    /**
     * Returns the duration
     *
     * @return \string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets the duration
     *
     * @param \string $duration
     *
     * @return void
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Returns the calendar
     *
     * @return \Digicademy\ChfTime\Domain\Model\Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Sets the calendar
     *
     * @param \Digicademy\ChfTime\Domain\Model\Calendar $calendar
     *
     * @return void
     */
    public function setCalendar(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Returns the temporal entity
     *
     * @return \Digicademy\ChfTime\Domain\Model\TemporalEntity
     */
    public function getTemporalEntity()
    {
        return $this->temporalEntity;
    }

    /**
     * Sets the temporal entity
     *
     * @param \Digicademy\ChfTime\Domain\Model\TemporalEntity $temporalEntity
     *
     * @return void
     */
    public function setTemporalEntity(TemporalEntity $temporalEntity)
    {
        $this->temporalEntity = $temporalEntity;
    }

}
