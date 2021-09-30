<?php
include("templates-php/auth.php");

/**
 * validando que los radios no esten vacios y de estarlos volver a welcome.php
 */

if (empty($_POST['question-1-answers']) || 
    empty($_POST['question-2-answers']) || 
    empty($_POST['question-3-answers']) || 
    empty($_POST['question-4-answers']) || 
    empty($_POST['question-5-answers'])) {

    $question1 = $_POST['question-1-answers'];
    $question2 = $_POST['question-2-answers'];
    $question3 = $_POST['question-3-answers'];
    $question4 = $_POST['question-4-answers'];
    $question5 = $_POST['question-5-answers'];

    if (empty($question1) || empty($question2) ||
        empty($question3) || empty($question4) ||
        empty($question5)) {
        header("Location: welcome.php");
    };
};

$json_freegames = file_get_contents('https://www.freetogame.com/api/games');

$array_freegames = json_decode( $json_freegames, true);

/**
* filtrando arrays por tipo de juego
*/

$shooter_filter = 'shooter';
$strategy_filter = 'strategy';
$racing_filter = 'racing';


$filter_array_shooter = array_filter($array_freegames, function ($genre_shooter) use ($shooter_filter) {
    if (stripos($genre_shooter['genre'], $shooter_filter) !== false) {
        return true;
    }
    return false;
});

$filter_array_strategy = array_filter($array_freegames, function ($genre_strategy) use ($strategy_filter) {
    if (stripos($genre_strategy['genre'], $strategy_filter) !== false) {
        return true;
    }
    return false;
});

$filter_array_racing = array_filter($array_freegames, function ($genre_racing) use ($racing_filter) {
    if (stripos($genre_racing['genre'], $racing_filter) !== false) {
        return true;
    }
    return false;
});

/** 
 * reiniciando index para que no de error al mostrar en pantalla
 */

    $array_shooter = array_values(array_filter($filter_array_shooter));
    $array_strategy = array_values(array_filter($filter_array_strategy));
    $array_racing = array_values(array_filter($filter_array_racing));


    /** respuestas */
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    /**
     * inicializar variable contador e incrementar cada una según la respuesta del usuario
     */

    $totalA = 0;
    $totalB = 0;
    $totalC = 0;

    /**
     * incrementador pregunta 1
     */
    if     ($answer1 == "A") { $totalA = $totalA + 1.25; $totalB = $totalB + 0.25;}
    elseif ($answer1 == "B") { $totalB = $totalB + 1.50; }
    elseif ($answer1 == "C") { $totalC = $totalC + 1.50; };
    /**
     * incrementador pregunta 2
     */
    if     ($answer2 == "A") { $totalA = $totalA + 1.25; $totalB = $totalB + 0.25;}
    elseif ($answer2 == "B") { $totalB = $totalB + 1.50; }
    elseif ($answer2 == "C") { $totalC = $totalC + 1.50; };
    /**
     * incrementador pregunta 3
     */
    if     ($answer3 == "A") { $totalA = $totalA + 1.25; $totalB = $totalB + 0.25;}
    elseif ($answer3 == "B") { $totalB = $totalB + 1.50; }
    elseif ($answer3 == "C") { $totalC = $totalC + 1.50; };
    /**
     * incrementador pregunta 4
     */
    if     ($answer4 == "A") { $totalA = $totalA + 1.25; $totalB = $totalB + 0.25;}
    elseif ($answer4 == "B") { $totalB = $totalB + 1.50; }
    elseif ($answer4 == "C") { $totalC = $totalC + 1.50; };
    /**
     * incrementador pregunta 5
     */
    if     ($answer5 == "A") { $totalA = $totalA + 1.25; $totalB = $totalB + 0.25;}
    elseif ($answer5 == "B") { $totalB = $totalB + 1.50; }
    elseif ($answer5 == "C") { $totalC = $totalC + 1.50; };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt:wght@500;700&display=swap" rel="stylesheet">

    <title>Resultados - Quiz</title>
</head>
<body id="results">

    <?php
    include 'templates-php/header.php';
    ?>

    <h1> Tu próximo juego favorito va a ser...</h1>

    <main>
        <section>
            <?php
                /**resultados */
                if ( $totalA > $totalB && $totalA > $totalC) {
                    for ( $i = 0; $i < count($array_shooter), $i < 5; $i++) {
                        echo '<article class="info-container"><img src="' .  $array_shooter[$i]['thumbnail'] . '" class="results-img">';
                        echo '<div class="text-container"><h3>' . $array_shooter[$i]['title'] . '</h3>';
                        echo '<a href="' . $array_shooter[$i]['game_url'] .'" class="results-url"> Link al juego </a></div></article>';
                    }
                } elseif ( $totalB > $totalA && $totalB > $totalC ) {
                    for ( $i = 0; $i < count($array_strategy), $i < 5; $i++) { 
                        echo '<article class="info-container"><img src="' .  $array_strategy[$i]['thumbnail'] . '" class="results-img">';
                        echo '<div class="text-container"><h3>' . $array_strategy[$i]['title'] . '</h3>';
                        echo '<a href="' . $array_strategy[$i]['game_url'] .'" class="results-url"> Link al juego </a></div></article>';
                    }
                } elseif ( $totalC > $totalA && $totalC > $totalB ) {
                    for ( $i = 0; $i < count($array_racing), $i < 2; $i++) { 
                        echo '<article class="info-container"><img src="' .  $array_racing[$i]['thumbnail'] . '" class="results-img">';
                        echo '<div class="text-container"><h3>' . $array_racing[$i]['title'] . '</h3>';
                        echo '<a href="' . $array_racing[$i]['game_url'] .'" class="results-url"> Link al juego </a></div></article>';
                    }
                };
            ?>
        </section>
    </main>

    <?php
    include 'templates-php/footer.php';
    ?>

</body>
</html>






