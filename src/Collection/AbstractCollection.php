<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\AbstractEntity;

abstract class AbstractCollection implements \IteratorAggregate, \ArrayAccess, \Countable
{
    const NEXT_LINK_NAME = "@odata.nextLink";
    /**
     * @var string
     */
    protected $nextLink;

    /**
     * Holds the data for the collection
     *
     * @var array
     */
    protected $data = [];

    /**
     * Holds the position for the iterator
     *
     * @var integer
     */
    protected $position;

    public function __construct(\stdClass $raw_data = null)
    {
        if (!empty($raw_data->{self::NEXT_LINK_NAME})) {
            $this->nextLink = $raw_data->{self::NEXT_LINK_NAME};
        }

        if (!empty($raw_data->value)) {
            $this->convertData(
                $this->getEntityClass(),
                $raw_data->value
            );
        }
    }

    /**
     * @param $position
     * @return AbstractEntity|null
     */
    public function getItem($position)
    {
        if ($this->offsetExists($position)) {
            return $this->offsetGet($position);
        }

        return null;
    }

    /**
     * @return string
     */
    abstract protected function getEntityClass(): string;

    /**
     * @param string $object_class
     * @param array $raw_data
     */
    protected function convertData(string $object_class, array $raw_data)
    {
        $this->data = array_map(
            function ($c) use ($object_class) {
                return new $object_class($c);
            },
            $raw_data
        );
    }

    /**
     * IteratorAggregate
     *
     * {@link http://us2.php.net/manual/en/class.iteratoraggregate.php}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * ArrayAccess
     *
     * {@link http://us2.php.net/manual/en/class.arrayaccess.php}
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        trigger_error("You can't set collection data");
    }

    public function offsetUnset($offset)
    {
        trigger_error("You can't unset collection data");
    }

    /**
     * Countable
     *
     * {@link http://us2.php.net/manual/en/class.countable.php}
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @return string
     */
    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @return bool
     */
    public function isLastPage()
    {
        if (is_null($this->nextLink)) {
            return true;
        }

        return false;
    }
}
