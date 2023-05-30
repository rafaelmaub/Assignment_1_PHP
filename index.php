<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/style.css">
<title>Grade Visualizer</title>
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
<h2>All Grades:</h2>
<table class="table">
<colgroup>
  <col class="gradeC">
  <col class="assignC">
  <col class="studentC">
</colgroup>
<tbody>
<tr>
	<td>Grade (%):</td>
	<td>Assignment Title:</td>
	<td>Student Name:</td>
</tr>

	<?php
	while($r = mysqli_fetch_assoc($res))
    {?>   
        <tr>
        <td><?php echo $r['grade']; ?></td>
        <td><?php echo $r['assignment']; ?></td>
        <td><?php echo $r['student'] ?></td>
        </tr>			
    <?php 
    }?>
    </tbody>

</table>
</main>
</body>
<footer>
  <small>
  © All Rights reserved
  </small>
</footer>
</html>