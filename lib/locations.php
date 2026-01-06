<?php
function getLocationsByCategory(PDO $pdo, ?string $category = null): array
{
    $sql = "SELECT l.id, l.name, l.description, l.category, i.path as img_path, i.alt_text as img_alt
            FROM locations l
            JOIN images i ON i.id = l.img
            " . ($category ? "WHERE l.category = :category" : "") . "
            ORDER BY l.id ASC";

    $query = $pdo->prepare($sql);

    if ($category) {
        $query->execute(['category' => $category]);
    } else {
        $query->execute();
    }

    $locations = $query->fetchAll(PDO::FETCH_ASSOC);
    
    // Récupérer les prix pour chaque location
    foreach ($locations as &$location) {
        $location['prices'] = getLocationPrices($pdo, $location['id']);
    }
    
    return $locations;
}

function getLocationPrices(PDO $pdo, int $locationId): array
{
    $query = $pdo->prepare("SELECT duration, price 
                            FROM location_prices 
                            WHERE id_location = :id");
    $query->execute(['id' => $locationId]);
    
    $pricesArray = [
        'day' => '0',
        'week-end-day' => '0',
        'week' => '0'
    ];
    
    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
        if (!empty($row['duration'])) {
            $pricesArray[$row['duration']] = $row['price'];
        }
    }
    
    return $pricesArray;
}

// function getLocationById(PDO $pdo, int $id): ?array
// {
//     $query = $pdo->prepare("SELECT l.*, lp.duration, lp.price
//                             FROM locations l
//                             JOIN location_prices lp ON lp.id_location = l.id
//                             WHERE l.id = :id");
//     $query->bindParam(':id', $id, PDO::PARAM_INT);

//     if (!$query->execute()) {
//         throw new Exception("Erreur lors de la récupération de la location");
//     }

//     $rows = $query->fetchAll(PDO::FETCH_ASSOC);

//     if (empty($rows)) {
//         return null;
//     }

//     // Structurer avec clés nommées pour un accès facile
//     $location = [
//         'id' => $rows[0]['id'],
//         'name' => $rows[0]['name'],
//         'description' => $rows[0]['description'],
//         'prices' => [
//             'day' => '0',
//             'week-end-day' => '0',
//             'week' => '0'
//         ]
//     ];

//     // Remplir les prix
//     foreach ($rows as $row) {
//         if (!empty($row['duration'])) {
//             $location['prices'][$row['duration']] = $row['price'];
//         }
//     }

//     return $location;
// }


function getLocations(PDO $pdo, ?int $limit = null): false|array
{
    $sql = "SELECT l.*, i.path as img_path, i.alt_text as img_alt
            FROM locations l
            JOIN images i on i.id = l.img
            ORDER BY id ASC";

    if($limit){
        $sql .= " LIMIT :limit";
    }
    $query = $pdo->prepare($sql);

    if($limit){
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    if (!$query->execute()) {
        throw new Exception("Erreur lors de la récupération des locations");
    }
    return $query->fetchAll(PDO::FETCH_ASSOC);

}
