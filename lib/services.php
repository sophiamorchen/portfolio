<?php


function getServicesById(PDO $pdo, int $id): ?array
{
$query = $pdo->prepare("SELECT * FROM services WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);
return $result ?: null;
}


function getServices(PDO $pdo, ?string $category = null): array
{
        $sql = "SELECT services.*, images.path as images_path, images.alt_text as img_alt
                FROM services 
                JOIN images ON images.id = services.img_id
                " . ($category ? "WHERE services.category = :category" : "") . "
                ORDER BY services.id ASC";

        $query = $pdo->prepare($sql);

        if ($category) {
                $query->execute(['category' => $category]);
        } else {
                $query->execute();
        }

        return $query->fetchAll(PDO::FETCH_ASSOC);
}
