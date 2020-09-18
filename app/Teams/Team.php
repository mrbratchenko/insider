<?php

namespace App\Teams;

class Team implements TeamInterface
{
    public $name;
    public $strength;
    public $points;
    public $playedGames;
    public $winsQuantity;
    public $drawsQuantity;
    public $lossesQuantity;
    public $goalsQuantity;

    public function __construct($strength, $name) {
        $this->strength = $strength;
        $this->points = 0;
        $this->playedGames = 0;
        $this->winsQuantity = 0;
        $this->drawsQuantity = 0;
        $this->lossesQuantity = 0;
        $this->goalsQuantity = 0;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints($pointsQuantity): void
    {
        $this->points = $pointsQuantity;
    }

    public function getPlayedGames(): int
    {
        return $this->playedGames;
    }

    public function setPlayedGames($playedGames): void
    {
        $this->points = $playedGames;
    }

    public function getWins(): int
    {
        return $this->winsQuantity;
    }

    public function setWins($winsQuantity): void
    {
        $this->points = $winsQuantity;
    }

    public function getDraws(): int
    {
        return $this->drawsQuantity;
    }

    public function setDraws($drawsQuantity): void
    {
        $this->points = $drawsQuantity;
    }

    public function getLosses(): int
    {
        return $this->lossesQuantity;
    }

    public function setLosses($lossesQuantity): void
    {
        $this->points = $lossesQuantity;
    }

    public function getGoalDifference(): int
    {
        return $this->goalsQuantity;
    }

    public function setGoalDifference($goalsQuantity): void
    {
        $this->points = $goalsQuantity;
    }
}
