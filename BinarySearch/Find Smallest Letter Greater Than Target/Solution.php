<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     * https://leetcode.com/problems/find-smallest-letter-greater-than-target/description
     */
    public function nextGreatestLetter($letters, $target) {
        // O(n)
        // $length = count($letters);
        // for ($i = 0; $i < $length; $i++) {
        //     if ($letters[$i] > $target) {
        //         return $letters[$i];
        //     }
        // }
        // return $letters[0];

        // O(log n)
        $n = count($letters);
        $low = 0;
        $high = $n - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if ($letters[$mid] <= $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return $low >= $n ? $letters[0] : $letters[$low];
    }
}

$obj = new Solution;
echo $obj->nextGreatestLetter(["b", "c", "d", "e"], "c");