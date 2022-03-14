<?php require ('views/components/header.php');
 require ('functions/methods.php');
// $pdo = connectToDb();
// $posts = fetchAllresults($pdo);
?>
<div>
    <h1 class="blog-header">Bloggen</h1>
</div>
<!-- if-satsen ska hit -->
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
    echo "kuk";
}
?>

<div class="blog-wrapper">

    <?php
    $statement = $database->prepare('select * from posts');

    $statement->execute();

    $posts = $statement->fetchAll();
    foreach ($posts as $post){
     if($post['draft'] == "show"){
       echo "<div class='article'>";

            echo "<h2>" . $post['title'] . "</h2>";
            echo "<p>" . $post['content'] . "</p>";
            echo "<p>Skriven av:" .  $post['author'] . "</p>";
            if($post['author'] == $_SESSION['loggedin']){
                echo "<button>Radera</button>";
                echo "<button>Redigera</button>";
                echo "<button>Publicera</button>";

            }
        echo "</div>";
     }
     }?>

</div>

<?php require ('views/components/footer.php')?>