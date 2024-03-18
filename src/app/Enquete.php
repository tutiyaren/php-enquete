<?php
namespace App;
use PDO;

interface EnqueteInterface
{
    public function addEnquete(
        string $name,
        string $food_awnser,
        string $hobby_awnser
    ): void;
}

abstract class AbstractEnquete implements EnqueteInterface
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}

class Enquete extends AbstractEnquete
{
    public function addEnquete(string $name, string $food_awnser, string $hobby_awnser): void {
        date_default_timezone_set('Asia/Tokyo');
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $stmt = $this->pdo->prepare("INSERT INTO bookings(name, food_awnser, hobby_awnser, created_at, updated_at) VALUES (:name, :food_awnser, :hobby_awnser, :created_at, :updated_at)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":food_awnser", $food_awnser);
        $stmt->bindParam(":hobby_awnser", $hobby_awnser);
        $stmt->bindParam(":created_at", $created_at);
        $stmt->bindParam(":updated_at", $updated_at);
        $stmt->execute();
    }
}
