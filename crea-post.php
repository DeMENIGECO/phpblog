<?php

require "blog_settings.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titolo = $_POST["titolo"];
    $testo = $_POST["testo"];

    $json = file_get_contents("post/posts.json");

    $posts = json_decode($json, true);

    $nuovoPost = [
        "titolo" => $titolo,
        "testo" => $testo
    ];

    $posts[] = $nuovoPost;

    $json = json_encode($posts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents("post/posts.json", $json);

    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Crea un post - <?= $emoji ?> <?= $blog_name ?></title>
</head>

<body>

    <main class="page">

        <div class="card">

            <h1><?= $emoji ?> <?= $blog_name ?></h1>

            <hr>

            <h2>Crea un nuovo post</h2>

            <form method="POST">

                <label for="titolo">Titolo:</label>

                <input
                    type="text"
                    id="titolo"
                    name="titolo"
                    required
                >

                <label for="testo">Testo:</label>

                <textarea
                    id="testo"
                    name="testo"
                    rows="10"
                    required
                ></textarea>

                <button type="submit">Pubblica post</button>

            </form>

            <a href="index.php">← Torna al blog</a>

        </div>

    </main>

</body>

</html>