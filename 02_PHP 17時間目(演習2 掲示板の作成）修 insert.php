<?php
mb_internal_encoding("utf8");

if(!empty($_POST['handlename'])&&!empty($_POST['title'])&&!empty($_POST['comments'])){
    
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $pdo->exec("insert into diworks_keijiban(handlename,title,comments)values('"
               .$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
};

header("Location:http://localhost/diworks_keijiban/02_PHP%2017%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%922%20%E6%8E%B2%E7%A4%BA%E6%9D%BF%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%20index%20.php");

?>


       