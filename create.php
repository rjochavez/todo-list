<?php  

$newTask = $_POST['task'];

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

array_push($todos, array('task' => $newTask, 'done' => false));

$file = fopen('assets/todos.json', 'w');
fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
fclose($file);


$id = count($todos) - 1;
echo $id;