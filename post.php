<?php

require "post/posts.php";
require "blog_settings.php";

$id = $_GET["post"];

$post = $posts[$id];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title><?= $post["titolo"] ?> — <?= $emoji ?> <?= $blog_name ?></title>
</head>

<body>

    <main class="page">

        <article class="card">

            <h1>
                <?= $emoji ?> <?= $blog_name ?>
            </h1>

            <hr>

            <h2 class="post-title">
                <?= $post["titolo"] ?>
            </h2>

            <div class="post-content">
                <?= nl2br($post["testo"]) ?>
            </div>

            <a href="index.php">
                ← Torna al blog
            </a>

        </article>

    </main>

</body>

</html>