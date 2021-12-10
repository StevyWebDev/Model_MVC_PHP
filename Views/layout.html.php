<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <title><?=isset($title) && $title != null ? $title . " - " : ""?>undefined</title>
</head>
<body>
    <header>
        <h1>Hello World !!</h1>
        <p>I'm Header</p>
    </header>

    <main>
        <?=$content?>
    </main>

    <footer>
        <p>I'm Footer</p>
        <p>by StevyDevWeb</p>
    </footer>

</body>
</html>