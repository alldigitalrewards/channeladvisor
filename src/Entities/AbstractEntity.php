<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

abstract class AbstractEntity
{
    public function __construct($data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            if (is_null($value)) {
                continue;
            }

            if (!$this->isValidProperty($key)) {
                continue;
            }

            if (strpos(strtolower($key), 'date') !== false) {
                $value = new \DateTime($value);
            }

            $setterName = $this->getSetter($key);
            $this->$setterName($value);
        }
    }

    private function isValidProperty($propertyName)
    {
        if (method_exists($this, $this->getSetter($propertyName))) {
            return true;
        }

        return false;
    }

    private function getSetter($propertyName)
    {
        $setterName = str_ireplace("_", " ", $propertyName);
        $setterName = ucwords($setterName);
        $setterName = str_ireplace(" ", "", $setterName);

        return "set" . $setterName;
    }
}
