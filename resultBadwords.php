<?PHP
//dichiarazione variabili
    // # 1. Variabile per il testo
    $userText = $_GET["userText"];
    //var_dump($userText);
    $userWord = $_GET["userWord"];
    //var_dump($userWord);

    //stampo in pagina il test dell'utente
    //echo(str_ireplace("$userWord", "***", $userWord));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div>
        <span>Il testo inserito è:</span>
        <?php echo($userText . " " . $userWord); ?>
    </div>
    <div>
        <span>La lunghezza del testo è pari a:</span>
        <?php echo(mb_strlen($userText . $userWord)); ?>
    </div>
    <div>
        <span>Il testo censurato è:</span>
        <?php echo($userText . " " . str_ireplace("$userWord", "***", $userWord)); ?>
    </div>
    <div>
        <span>La lunghezza del testo censurato è pari a:</span>
        <?php echo(mb_strlen($userText . " " . str_ireplace("$userWord", "***", $userWord))) ?>
    </div>
</body>
</html>