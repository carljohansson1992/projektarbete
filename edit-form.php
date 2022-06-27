<?php
require ('views/components/header.php');

$postId = $_POST['post-edit'];

?>
<div class="edit-form-container">
<form class='blog-form' action='post-change/post-edit.php' method='POST'>

        <label>Ny text</label>
        <textarea type='text' name='edited-content' required></textarea>
        <input type='hidden' name='post-id' value="<?php echo $postId; ?>">
        <button class='blog-btn' type='submit'>Lägg upp</button>
</form>
</div>

<?php require ('views/components/footer.php');?>