<?PHP
//dichiarazione variabili
    // # 1. Variabile per il testo
    $userText = $_GET["userText"];
    //var_dump($userText);
    $userWord = $_GET["userWord"];
    //var_dump($userWord);

    //stampo in pagina il test dell'utente
    //echo(str_ireplace("$userWord", "***", $userWord));
    echo($userText . " " . str_ireplace("$userWord", "***", $userWord));
?>