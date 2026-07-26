<?php

require "post/posts.php";
require "blog_settings.php";

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title><?= $emoji ?> <?= $blog_name ?></title>
</head>

<body>

    <main class="page">

        <div class="card">

            <h1><?= $emoji ?> <?= $blog_name ?></h1>

            <a href="crea-post.php">➕ Crea un post</a>

            <hr>

            <ul>

                <?php foreach ($posts as $id => $post): ?>

                    <li>
                        <p><?= $post["titolo"] ?></p>

                        <a href="post.php?post=<?= $id ?>">
                            Leggi tutto →
                        </a>
                    </li>

                <?php endforeach; ?>

            </ul>

        </div>

    </main>

</body>

</html>