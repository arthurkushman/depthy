<?php

namespace depthy\core;


class Base
{

    /**
     * @param array $arr
     * @return array
     */
    protected function getAllKeys(array $arr)
    {
        $container = [];
        foreach (new \RecursiveIteratorIterator(
                     new \RecursiveArrayIterator($arr),
                     \RecursiveIteratorIterator::SELF_FIRST)
                 as $key => $value) {
            $container[] = $key;
        }

        return $container;
    }

    /**
     * @param array $arr
     * @return array
     */
    protected function getAllPairs(array $arr)
    {
        $container = [];
        foreach (new \RecursiveIteratorIterator(
                     new \RecursiveArrayIterator($arr),
                     \RecursiveIteratorIterator::SELF_FIRST)
                 as $key => $value) {
            $container[$key] = $value;
        }

        return $container;
    }
}