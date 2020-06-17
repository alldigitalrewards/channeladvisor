<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class Image extends AbstractEntity
{
    private $ProductID;
    private $ProfileID;
    private $PlacementName;
    private $Abbreviation;
    private $Url;

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param mixed $ProductID
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
    }

    /**
     * @return mixed
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }

    /**
     * @param mixed $ProfileID
     */
    public function setProfileID($ProfileID)
    {
        $this->ProfileID = $ProfileID;
    }

    /**
     * @return mixed
     */
    public function getPlacementName()
    {
        return $this->PlacementName;
    }

    /**
     * @param mixed $PlacementName
     */
    public function setPlacementName($PlacementName)
    {
        $this->PlacementName = $PlacementName;
    }

    /**
     * @return mixed
     */
    public function getAbbreviation()
    {
        return $this->Abbreviation;
    }

    /**
     * @param mixed $Abbreviation
     */
    public function setAbbreviation($Abbreviation)
    {
        $this->Abbreviation = $Abbreviation;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }
}
