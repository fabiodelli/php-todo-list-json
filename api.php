
<?php
$filename = 'tasks.json';

function readTasks()
{
    global $filename;
    if (!file_exists($filename)) {
        return [];
    }
    $content = file_get_contents($filename);
    return json_decode($content, true);
}

function writeTasks($tasks)
{
    global $filename;
    $content = json_encode($tasks);
    file_put_contents($filename, $content);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $tasks = readTasks();
    header('Content-Type: application/json');
    echo json_encode($tasks);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $tasks = readTasks();
    $newTask = [
        'id' => uniqid(),
        'title' => $data['title']
    ];
    $tasks[] = $newTask;
    writeTasks($tasks);
    
}
