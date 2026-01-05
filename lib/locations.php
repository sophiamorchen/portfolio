<?php 

function getLocationById(PDO $pdo, $id):array
{
    $query = $pdo->prepare("SELECT * FROM locations WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

function getLocations(PDO $pdo, int $limit) 
{
    $sql = "SELECT * FROM locations ORDER BY id ASC";

    if($limit){
        $sql .= " LIMIT :limit";
    }
    $query = $pdo->prepare($sql);

    if($limit){
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();

}
