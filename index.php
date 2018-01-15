<?php  

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>To-Do List App</title>
</head>

<body>

	<div id="outerContainer">	
		<div id="container">
			<h1>To-Do List</h1>

			<input type="text" id="newTask" placeholder="Add New Task">
			<ul>
				<?php
					foreach ($todos as $key => $todo) {

						if ($todo['done'] === false){
							echo '<li id=' .$key. '><span><i class="fa fa-trash"></i></span> '.$todo['task'].'</li>';
						}else{
							echo '<li id=' .$key. ' class="completed"><span><i class="fa fa-trash"></i></span> '.$todo['task'].'</li>';
						}
					}
				?>
			</ul>
		</div>
	</div>

	<div id="message">
		<h2>New Task has been added successfully!</h2>
	</div>

	<div id="delete">
		<i class="fa fa-trash-o" aria-hidden="true"></i>
		<h2>Task has been deleted!</h2>
	</div>

	


	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>