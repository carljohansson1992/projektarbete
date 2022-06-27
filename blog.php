<?php require ('views/components/header.php');
 require ('functions/methods.php');
?>

<div>
    <h1 class="blog-header">Bloggen</h1>
</div>

<?php if(isset($_SESSION['loggedin'])){
 ?>
 <div class='blogform-container'>
<?php
   echo "<form class='blog-form' action='upload-post.php' method='POST'>
        <label>Titel</label>
        <input type='text' name='title' required>
        <label>Blogginlägg</label>
        <textarea type='text' name='content' required></textarea>
        <input type='checkbox' name='draft' id='draft'>
        <label for='draft'>Skapa inlägg som ett utkast</label>
        <button class='blog-btn' type='submit'>Lägg upp</button>
    </form>
</div>";
}else {

}
?>

<div class="blog-wrapper">

    <?php
    $statement = $connect->prepare('select * from posts');

    $statement->execute();





    $posts = $statement->fetchAll();

    foreach ($posts as $post){
        if(!isset($_SESSION['loggedin']) == $post['author'] && $post['draft'] == "hide"){
            echo "";
        } else {
        echo "<div class='article'>";
        echo "<h2>" . $post['title'] . "</h2>";
        echo "<p>" . $post['content'] . "</p>";
        echo "<p>Skriven av:" .  $post['author'] . "</p>";
        if (isset($_SESSION['loggedin']) && $post['author'] == $_SESSION['loggedin']){

            ?>

            <form class="user-form-container" action="edit-form.php" method="POST">
                        <input type="hidden" name="post-edit" value="<?php echo $post['id'] ?>">
                        <button class='user-blog-btn' type="submit">Redigera</button>
            </form>
            <form class="user-form-container" action="post-change/post-delete.php" method="POST">
                        <input type="hidden" name="post-delete" value="<?php echo $post['id'] ?>">
                        <button class='user-blog-btn' type="submit">Radera</button>
            </form>

            <?php

            if(isset($_SESSION['loggedin']) == $post['author'] && $post['draft'] == "hide"){
                ?>
                    <form class="user-form-container" action="post-change/post-publish.php" method="POST">
                        <input type="hidden" name="post-publish" value="<?php echo $post['id'] ?>">
                        <button class='user-blog-btn' type="submit">Publicera</button>
                    </form>
                <?php

            } else {
                echo "";
            }
        }
        else {


        }
        echo "</div>";


     }}?>

</div>

<?php require ('views/components/footer.php');?>