<?php
    declare(strict_types=1);
    namespace App\Models;
    use App\Model;
    use App\DB;
    class Category extends DB{
    
    public function getCategory(string $category_name): int{
        $sql = "SELECT IdCategoria FROM categoria WHERE tipo = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$category_name]);
        return $stmt->fetch()['IdCategoria'];
    }

    
}