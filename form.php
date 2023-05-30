<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/style.css">
<title>Grade Entry</title>
</head>
<body>

<header>
<h1>Grade System - Assign 1</h1>
<ul>
  <li><a href="index.php">View Grades</a></li>
  <li><a href="form.php">Enter Grades</a></li>
</ul>
</header>

<main>
<h2>Enter a student grade:</h2>
<form method="post">

<label for="input1">Grade (%):</label>
<input type="number" name="grade"id="input1" min="0" max="100" step="0.1">
<br>
<label for="input2">Assignment Name:</label>
<input type="text" name="assignment"id="input2">
<br>
<label for="input3">Student First Name:</label>
<input type="text" name="student" id="input3">
<br>
<input type="submit" value="Submit">
</form>
<div class="submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$grade = $_POST['grade'];
							$assignment = $_POST['assignment'];
							$student = $_POST['student'];
							$res   = $database->create($grade, $assignment, $student);

							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
        </div>
</main>

</body>
</html>