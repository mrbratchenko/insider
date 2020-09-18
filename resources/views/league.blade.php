<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Insider League</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="/js/jquery.js"></script>
    <script src="/js/app.js"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        table, th {
            border: 1px solid black;
            min-height: 170px;
        }

        .table-content-one {
            display: flex;
            flex-direction: row;
        }

        .table-content-one-group {
            display: flex;
            flex-direction: column;
            margin-right: 30px;
        }

        .button-group {
            display: flex;
            margin-top: 10px;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height main-content">

    <div class="content">
        <div class="table-content-one-group">
            <div class="table-content-one">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>League Table</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teams</td>
                            <td>PTS</td>
                            <td>P</td>
                            <td>W</td>
                            <td>D</td>
                            <td>L</td>
                            <td>GD</td>
                        </tr>

                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->getPoints() }}</td>
                                <td>{{ $team->getPlayedGames() }}</td>
                                <td>{{ $team->getWins() }}</td>
                                <td>{{ $team->getDraws() }}</td>
                                <td>{{ $team->getLosses() }}</td>
                                <td>{{ $team->getGoalDifference() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-sm">
                    <tr>
                        <th>Match Results</th>
                    </tr>
                    <tr>
                        <th>Nth Week Match Result</th>
                    </tr>
                    <tr>
                        <td id="team0"></td>
                        <td id="score0"></td>
                        <td id="team1"></td>
                    </tr>
                    <tr>
                        <td id="team2"></td>
                        <td id="score1"></td>
                        <td id="team3"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-group">
                <button class="button" title="play all">play all</button>
                <button class="button-play" title="next week">next week</button>
            </div>
        </div>

    </div>
    <div>
        <div class="table-content-two">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Nth week prediction of championship</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Chelsea</td>
                    <td>%45</td>
                </tr>
                <tr>
                    <td>Arsenal</td>
                    <td>%25</td>
                </tr>
                <tr>
                    <td>Manchester City</td>
                    <td>%25</td>
                </tr>
                <tr>
                    <td>Liverpool</td>
                    <td>%5</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script>
        $(function () {
            $('.button-play').on('click', function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'get',
                    url: '/simulate',
                })
                    .done(function (data) {
                        $('#team0').html(data.team0.name);
                        $('#team1').html(data.team1.name);
                        $('#team2').html(data.team2.name);
                        $('#team3').html(data.team3.name);
                        $('#score0').html(data.score0);
                        $('#score1').html(data.score1);
                    })
                    .fail(function (err) {
                        console.log(err);
                    });
            });
        });
    </script>
</body>
</html>
