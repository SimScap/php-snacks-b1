<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snacks b1</title>
</head>
<body>   
    <?php
    /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */
    $matches = [[
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team1' => '70',
        'point_team2' => '45',
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team1' => '82',
        'point_team2' => '83',
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team1' => '72',
        'point_team2' => '33',
    ],
    [
        'team1' => 'OpenJobmetis Varese',
        'team2' => 'Germani Basker Brescia',
        'point_team1' => '101',
        'point_team2' => '99',
    ]
    ];
    
    ?>
    <ul>
        <?php for ($i = 0 ; $i < count($matches) ; $i++) { ?>
        <li>    
                <?php echo $matches[$i]['team1']; ?> -
                <?php echo $matches[$i]['team2']; ?> |
                <?php echo $matches[$i]['point_team1'] . '-' . $matches[$i]['point_team2']; ?> 
        </li>
        <?php } ?>
    </ul>
</body>
</html>