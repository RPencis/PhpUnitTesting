<?php
/**
 * class used to try to test protected items
 */
class ItemChild extends Item
{
    public function getID()
    {
        return parent::getID();
    }
}
