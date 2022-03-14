<?php
// session_start();



// function redirectTo($url = null)
// {
//     $url = $url ?? '';
//     header("Location: http://localhost/projektarbete-webbproduktion/$url");
//     exit;
// }
//function connectToDb(){
    try {

    $database = new PDO('mysql:host=127.0.0.1;dbname=uppgift', 'root', 'root');
    } catch (PDOException $e) {
         die($e->getMessage());
    }
    //}

// function fetchAllresults($database){
//     $statement = $pdo->prepare('select * from posts');

//     $statement->execute();

//     return $statement->fetchAll(PDO::FETCH_OBJ);
//    }

// function dd($data){

//     echo '<pre>';

//     die(var_dump($data));

//     echo '</pre>';
// }
?>
<script> console.log("IS THIS EVEN HERE????")</script>