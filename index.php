<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-badwords</title>
</head>
<body>
    <div class="container text-center">
        <h1>Inserisci le il testo e la parola da censurare</h1>
        <form action="resultBadWords.php">
            <div class="mb-3">
                <label for="userText" class="form-label">User Text</label>
                <textarea class="form-control" id="userText" name="userText" rows="3" placeholder="Inserisci il testo"></textarea>
            </div>
            <div class="mb-3">
                <label for="userWord" class="form-label">User Word</label>
                <input type="text" class="form-control" id="userWord" name="userWord" placeholder="stupido">
            </div>
            <button type="submit" class="btn btn-primary btn-xl">Send</button>
            <button type="reset" class="btn btn-danger btn-xl">Reset</button>
        </form>
    </div>
</body>
</html>