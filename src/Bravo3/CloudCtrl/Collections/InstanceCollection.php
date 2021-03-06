<?php
namespace Bravo3\CloudCtrl\Collections;

use Bravo3\CloudCtrl\Interfaces\Instance\InstanceInterface;

class InstanceCollection implements \IteratorAggregate
{
    /**
     * @var InstanceInterface[]
     */
    protected $items;

    /**
     * @param InstanceInterface[] $items
     */
    function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    /**
     * Add an instance to the collection
     *
     * @param InstanceInterface $instance
     */
    public function addInstance(InstanceInterface $instance)
    {
        $this->items[] = $instance;
    }

    /**
     * Add a collection to this one
     *
     * @param InstanceCollection $collection
     */
    public function addCollection(InstanceCollection $collection)
    {
        foreach ($collection as $item) {
            $this->items[] = $item;
        }
    }

    /**
     * Get an instance by its ID
     *
     * @param string $id
     * @return InstanceInterface|null
     */
    public function getInstanceById($id)
    {
        foreach ($this->items as $instance) {
            if ($instance->getInstanceId() == $id) {
                return $instance;
            }
        }
        return null;
    }

    public function count()
    {
        return count($this->items);
    }

    public function toArray()
    {
        return $this->items;
    }
}