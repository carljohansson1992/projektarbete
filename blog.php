<?php require ('views/components/header.php');
 require ('functions/methods.php');
$pdo = connectToDb();
$posts = fetchAllresults($pdo);
?>
<div>
    <h1 class="blog-header">Bloggen</h1>
</div>
<div class="blogform-container">
    <form class="blog-form" action="upload-post.php" method="POST">
        <label>Titel</label>
        <input type="text" name="title" required>
        <label>Blogginlägg</label>
        <textarea type="text" name="content" required></textarea>
        <label>Författare</label>
        <input type="text" name="author" required>
        <button class="blog-btn" type="submit">Lägg upp</button>
    </form>
</div>
<div class="blog-wrapper">

    <?php foreach ($posts as $post) : ?>

        <div class="article">

            <?= "<h2>$post->title</h2>" ?>
            <?= "<p>$post->content</p>" ?>
            <?= "<p>Skriven av:  $post->author</p>" ?>
        </div>

    <?php endforeach; ?>

</div>

<?php require ('views/components/footer.php')?>