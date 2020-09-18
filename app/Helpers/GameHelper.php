<?php

namespace App\Helpers;

class GameHelper
{
    public static function calculateScore($team1, $team2)
    {
        // scores are random^ but stronger team wins or draw
        $scoreArray = [mt_rand(0, 9), mt_rand(0, 9)];
        sort($scoreArray);

        if ($team1->getStrength() >= $team2->getStrength()) {
            return (string)$scoreArray[0] . '-' . (string)$scoreArray[1];
        }
        return (string)$scoreArray[1] . '-' . (string)$scoreArray[0];
    }
}
