<?php

$json = file_get_contents("post/posts.json");

$posts = json_decode($json, true);

?>