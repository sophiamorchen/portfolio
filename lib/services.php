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
        $sql = "SELECT s.*, i.path as img_path, i.alt_text as img_alt
                FROM services s
                JOIN images i ON i.id = s.img_id
                " . ($category ? "WHERE s.category = :category" : "") . "
                ORDER BY s.id ASC";

        $query = $pdo->prepare($sql);

        if ($category) {
                $query->execute(['category' => $category]);
        } else {
                $query->execute();
        }

        return $query->fetchAll(PDO::FETCH_ASSOC);
}
