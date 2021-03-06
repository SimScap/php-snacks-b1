<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/**
 * Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */
?>
<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>
<div class="grey">
<h2>Teachers Names and Surnames:</h2>
<?php
$teacherList = $db['teachers'];
//var_dump($teacherList);
$pmList = $db['pm'];
//var_dump($pmList);
for ( $i = 0 ; $i < count($teacherList); $i++) { ?>
    <h3> <?php echo $teacherList[$i]['name'] . ' ' . $teacherList[$i]['lastname']; ?></h3>
<?php }?>
</div>

<div class="green">
<h2>PM's Names and Surnames:</h2>
<?php for ( $i = 0 ; $i < count($pmList); $i++){ ?>
    <h3> <?php echo $pmList[$i]['name'] . ' ' . $pmList[$i]['lastname']; ?> </h3>
    <?php }?>
</div>
</body>
</html>