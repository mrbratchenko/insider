<?php

namespace App\Teams;

interface TeamInterface
{
    public function getName(): string;

    public function getPoints(): int;
    public function setPoints($pointsQuantity): void;

    public function getPlayedGames(): int;
    public function setPlayedGames($gamesQuantity): void;

    public function getWins(): int;
    public function setWins($winsQuantity): void;

    public function getDraws(): int;
    public function setDraws($drawsQuantity): void;

    public function getLosses(): int;
    public function setLosses($lossesQuantity): void;

    public function getGoalDifference(): int;
    public function setGoalDifference($goalsQuantity): void;
}
