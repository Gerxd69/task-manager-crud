<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../models/Task.php';

$method = $_SERVER['REQUEST_METHOD'];
$task = new Task($pdo);

switch ($method) {
    case 'GET':
        echo json_encode($task->getAll());
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $task->create($data['title'], $data['description']);
        echo json_encode(['message' => 'Tarea creada correctamente']);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $task->update($data['id'], $data['title'], $data['description'], $data['status']);
        echo json_encode(['message' => 'Tarea actualizada correctamente']);
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $task->delete($data['id']);
        echo json_encode(['message' => 'Tarea eliminada correctamente']);
        break;

    default:
        echo json_encode(['error' => 'Método no permitido']);
        break;
}