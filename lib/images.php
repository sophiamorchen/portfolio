<?php

function getImages(PDO $pdo, ?int $id = null): array
{
    if($id !== null){
        $query = $pdo->prepare("SELECT * FROM images WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
    } else {
        $query = $pdo->prepare("SELECT * FROM images ORDER BY id ASC");
    }
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
