<!DOCTYPE html>
<html lang="en">
<title>My Blog</title>
<link rel="stylesheet" href="/css/app.css">
<script src=""></script>
<body>
<?php foreach ($posts as $post) : ?>
<article>
    <h1>
        <a href="/posts/<?= $post->slug; ?>">
                <?= $post->title; ?>
        </a>
    </h1>
    <div>
        <p><?= $post->excerpt; ?></p>
    </div>
</article>
<?php endforeach; ?>
</body>
</html>

