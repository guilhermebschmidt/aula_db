<?php
    
    $conn = new PDO('mysql:host=localhost;dbname=db_aula','root', 'ifsp@12');
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$id = 1;
    // $stmt = $conn->prepare("SELECT * FROM Pessoas WHERE id_pessoas = :id");
    $stmt = $conn->prepare("SELECT * FROM Pessoas;");
    //$stmt->execute(array('id'=>$id));

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo json_encode($linha);
    }


?>