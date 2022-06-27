<?php




function redirectTo($url = null)
{
    $url = $url ?? '';
    header("Location: http://localhost/projektarbete-webbproduktion/$url");
    exit;
}

try {
    $connect = new PDO('mysql:host=127.0.0.1;dbname=uppgift', 'root', 'root');
} catch (PDOException $e) {
    "there was a failure" . $e->getMessage();
}

function dd($data){

    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}
?>
