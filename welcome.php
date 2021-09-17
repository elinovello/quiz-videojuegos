<?php
include("templates-php/auth.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body id="game">
    <?php include 'templates-php/header.php'; ?>
    <style>
    <?php include 'CSS/main.css'; ?>
    </style>
    

    <main>
        <section>
            <h1>Hola, <?php echo $_SESSION['username']; ?>.</h1>

            <p>Si te gusta la programación, es más que seguro que te deben gustar los videojuegos. ¿Cuántas horas pasaste sentade frente a la pantalla tratando de subir de nivel? Pero jugar muchas veces el mismo juego cansa.
                <br>¿Querés probar algo nuevo pero está todo muy caro? Pasate por este test y elegí entre los 5 juegos gratis acordes a tus preferencias.</p>
        </section>

        <section>
            <form action="results.php" method="post" id="quiz">

                <ul id="test-questions">
                    <li>
                        <ul class="quiz-overlay">
                            <li>
                                <h3>Es viernes por la noche y no sabes que hacer, pero tampoco te querés quedar en casa. Vos...</h3>
                            </li>

                            <li>
                                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                                <label for="question-1-answers-A" class="">A. Llamas a un amigue y se van a un bar arcade.</label>
                            </li>                   

                            <li>
                                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
                                <label for="question-1-answers-B" class="">B. Llamas al misme amigue, pero van a ver un juego de ajedrez.</label>
                            </li>

                            <li>
                                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C">
                                <label for="question-1-answers-C" class="">C. Te subis al auto a dar una vuelta por la ciudad. (amigue no incluide)</label>
                            </li>
                        </ul>
                    </li> 

                    <li>
                        <ul class="quiz-overlay">
                            <li>
                                <h3>Estas por entrar a ducharte y por el rabillo del ojo descubrís que hay una araña en la ducha. Vos...</h3>
                            </li>

                            <li>
                                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A">
                                <label for="question-2-answers-A" class="">A. Agarras la pantufla y con un revoleo táctico bajás al bicho.</label>
                            </li>                   

                            <li>
                                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B">
                                <label for="question-2-answers-B" class="">B. Pensas como proceder. La solución más lógica es ponerla en un vasito y sacarla al patio.</label>
                            </li>

                            <li>
                                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C">
                                <label for="question-2-answers-C" class="">C. Salis corriendo.</label>
                            </li>
                        </ul>
                    </li> 

                    <li>
                        <ul class="quiz-overlay">
                            <li>
                                <h3>De estos tres, ¿qué género preferis?</h3>
                            </li>

                            <li>
                                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A">
                                <label for="question-3-answers-A" class="">A. Algo con mucha guitarra y batería, como el rock.</label>
                            </li>                   

                            <li>
                                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B">
                                <label for="question-3-answers-B" class="">B. Algo melódico, como orquestas o bandas sonoras.</label>
                            </li>

                            <li>
                                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C">
                                <label for="question-3-answers-C" class="">C. Techno/EDM</label>
                            </li>
                        </ul>
                    </li> 

                    <li>
                        <ul class="quiz-overlay">
                            <li>
                                <h3>Te gusta jugar juegos que...</h3>
                            </li>

                            <li>
                                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A">
                                <label for="question-4-answers-A" class="">A. Te permitan conectar con amigos nuevos para competir a ver quien sobrevive más tiempo.</label>
                            </li>                   

                            <li>
                                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B">
                                <label for="question-4-answers-B" class="">B. Te inviten a pensar y en los que puedas demostrar tus habilidades.</label>
                            </li>

                            <li>
                                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C">
                                <label for="question-4-answers-C" class="">C. Te llenen de adrenalina. </label>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <ul class="quiz-overlay">
                            <li>
                                <h3>Por último te gustan más las peliculas de...</h3>
                            </li>

                            <li>
                                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A">
                                <label for="question-5-answers-A" class="">A. Acción. </label>
                            </li>                   

                            <li>
                                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B">
                                <label for="question-5-answers-B" class="">B. Fantasía o ciencia ficción. </label>
                            </li>

                            <li>
                                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C">
                                <label for="question-5-answers-C" class="">C. Carreras.</label>
                            </li>
                        </ul>
                    </li> 
                </ul>
                <input type="submit" value="Continuar">
            </form>
        </section>
    </main>

    
    <?php
    include 'templates-php/footer.php';
    ?>

</body>
</html>