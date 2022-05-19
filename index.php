<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
/* Creare una variabile con un paragrafo di testo a vostra scelta. */
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet qui nesciunt repellat ipsam laborum, non in animi ullam similique aspernatur eum? Porro doloribus nisi sequi beatae provident, eum impedit?';

/* $text_length = strlen($text); */
/* Stampare a schermo il paragrafo e la sua lunghezza. */
//var_dump($text . ' ' . $text_length);
/* Una parola da censurare viene passata dall'utente tramite parametro GET. */
/* var_dump($_GET["key_word"]); */
$key_censor = $_GET["key_censor"];
/* Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */
$text_censored = str_replace($key_censor, "***", $text);
$text_length = strlen($text_censored);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>
        <?php echo $text_censored . ' Length:' . $text_length?>
    </h1>
</body>
</html>