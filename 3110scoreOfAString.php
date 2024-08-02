<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfString(string $s): int
    {
        $score = 0;
        $stringAsArray = str_split($s);
        for ($x = 0; $x < count($stringAsArray) - 1; $x++) {
            $score += abs(ord($stringAsArray[$x]) - ord($stringAsArray[$x + 1]));
        }
        return $score;
    }
}
