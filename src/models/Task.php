<?php
require_once __DIR__ . '/../config/database.php';

class Task {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        return $stmt->execute([$title, $description]);
    }

    public function update($id, $title, $description, $status) {
        $stmt = $this->pdo->prepare("UPDATE tasks SET title=?, description=?, status=? WHERE id=?");
        return $stmt->execute([$title, $description, $status, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id=?");
        return $stmt->execute([$id]);
    }
}