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
                $value = new() \DateTime($value);
            }

            $setterName = $this->getSetterMethod($key);
            $this->$setterName($value);
        }
    }

    public function toArray()
    {
        $data = get_object_vars($this);
        $hydrated = [];
        foreach ($data as $key => $value) {
            if ($key === 'id' || $value === null) {
                continue;
            }

            $method = $this->getGetterMethod($key);
            $hydrated[$key] = $this->$method();
        }

        return $hydrated;
    }

    private function getSetterMethod($propertyName)
    {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }

    public function getGetterMethod($propertyName)
    {
        return "get" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }

    private function isValidProperty($propertyName)
    {
        if (method_exists($this, $this->getSetterMethod($propertyName))) {
            return true;
        }

        return false;
    }
}
