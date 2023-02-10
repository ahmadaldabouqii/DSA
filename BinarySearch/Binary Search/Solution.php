<?php

namespace BinarySearch;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     * https://leetcode.com/problems/binary-search
     */
    public function search($nums, $target) {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            $guess = $nums[$mid];

            if($guess === $target) {
                return $mid;
            }

            if ($guess > $target) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        return -1;
    }
}

$obj = new Solution();
echo $obj->search([1, 2, 3, 4, 5, 7, 8, 9], 7);