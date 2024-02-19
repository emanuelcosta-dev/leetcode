<?php
class KthLargest
{
    /**
     * @param Integer $k
     * @param Integer[] $nums
     */
    function __construct($k, $nums)
    {
        $this->k = $k;
        $this->minHeap = new SplMinHeap();

        foreach ($nums as $num) {
            $this->add($num);
        }
    }

    /**
     * @param Integer $val
     * @return Integer
     */
    function add($val)
    {
        $this->minHeap->insert($val);

        if ($this->minHeap->count() > $this->k) {
            $this->minHeap->extract();
        }

        return $this->minHeap->top();
    }
}
