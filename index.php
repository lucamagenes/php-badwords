<?php

// variabile del testo casuale
$text = 'Don’t worry about what other people fucking think. Whatever can be captured in words can be conquered with understanding. Don’t fucking quit. Even with the odds against you, time is against the odds. Design is all about fucking relationships—the relationship of form and content, the relationship of elements, the relationship';

// stampa a schermo del testo
//echo $text;

// stampa della lunghezza del testo
//var_dump(strlen($text));

// spazio a capo
//echo '<br>';

// parola passata dall'utente tramite url
//$_GET['word'];
//echo "Parola da censurare:  " . ' ' . ($_GET['word']);

// spazio a capo
//echo '<br>';

$censured_text = str_replace($_GET['word'], '***', $text);
//echo $censured_text;
//var_dump(strlen($censured_text));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>

<h1>Parole da censurare</h1>

<p>Per censurare una parola dal testo qui sotto</p>
<p>Scrivi nella barra url: <br> ?word=(parola da censurare)</p>

<strong> Testo:</strong>
<p> <?php echo $text; var_dump(strlen($text)); ?> </p>

<strong> Parola da censurare:</strong>
<p> <?php echo $_GET['word']; ?> </p>

<h2>Testo censurato</h2>

<p> <?php echo $censured_text; var_dump(strlen($censured_text)); ?> </p>

    
</body>
</html>