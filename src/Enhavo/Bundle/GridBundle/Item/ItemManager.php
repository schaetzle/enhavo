<?php
/**
 * Created by PhpStorm.
 * User: gseidel
 * Date: 23.08.18
 * Time: 21:56
 */

namespace Enhavo\Bundle\GridBundle\Item;

use Enhavo\Bundle\AppBundle\Type\TypeCollector;

class ItemManager
{
    /**
     * @var Item[]
     */
    private $items = [];

    public function __construct(TypeCollector $collector, $configurations)
    {
        foreach($configurations as $name => $options) {
            /** @var AbstractConfiguration $configuration */
            $configuration = $collector->getType($options['type']);
            unset($options['type']);
            $item = new Item($configuration, $name, $options);
            $this->items[$name] = $item;
        }
    }

    public function getItems()
    {
        return $this->items;
    }
}