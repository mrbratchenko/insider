<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams\Team;
use App\Helpers\GameHelper;

class LeagueController extends Controller
{
    private $teams;

    public function __construct()
    {
        $this->teams = [
            new Team(10, 'Chelsea'),
            new Team(8, 'Arsenal'),
            new Team(5, 'Manchester City'),
            new Team(3, 'Liverpool'),
        ];
    }

    public function index()
    {
        return view('league', [ 'teams' => $this->teams ]);
    }

    public function simulateGame()
    {
        // decide which teams play
        $teamKeys = range(0, 3);
        shuffle($teamKeys);

        $team0 = $this->teams[$teamKeys[0]];
        $team1 = $this->teams[$teamKeys[1]];
        $team2 = $this->teams[$teamKeys[2]];
        $team3 = $this->teams[$teamKeys[3]];

        return [
            'team0' => $team0,
            'team1' => $team1,
            'score0' => GameHelper::calculateScore($team0, $team1),
            'team2' => $team2,
            'team3' => $team3,
            'score1' => GameHelper::calculateScore($team2, $team3),
        ];
    }
}
