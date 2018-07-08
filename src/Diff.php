<?php

namespace depthy;


use depthy\core\Base;

class Diff extends Base
{
    /**
     * @param $array
     * @param array ...$args
     * @return array
     */
    public function getKeys($array, ...$args)
    {
        $diffContainers = [];
        $l = $this->getAllKeys($array);
        foreach ($args as $arr) {
            $diffContainers[] = $this->getAllKeys($arr);
        }

        return array_values(array_diff($l, ...$diffContainers));
    }

    /**
     * @param $array
     * @param array ...$args
     * @return array
     */
    public function getPairs($array, ...$args)
    {
        $diffContainers = [];
        $l = $this->getAllPairs($array);
        foreach ($args as $arr) {
            $diffContainers[] = $this->getAllPairs($arr);
        }

        return array_diff_assoc($l, ...$diffContainers);
    }
}