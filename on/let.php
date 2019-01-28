<?php
  if (isset($_POST['submit'])) {
	
    $name = $_POST['name'];
    $email = $_POST['email'];
	$std = $_POST['std'];
	$location = $_POST['location'];
	$board = $_POST['board'];
	$course = $_POST['Course'];
    echo 'https://wa.me/9561402263/?text=' . $name . "%20" . $email ."%20".$std."%20".$location."%20".$board."%20".$Course;
	header("Location: $url"
  }
?>
<form action="" method="post">
<div>
  Name: <input name="name" type="text" required=""/>
  </div>
  <div>Email: <input name="email" type="text" required=""/></div>
  <div>Standard: <input name="std" type="text" placeholder="Which Class you are studying? e.g. 12" /></div>
  <div>Location: <input name="location" type="text" placeholder="Enter Area PIN Code" required=""/></div>
  <div>Board: <input name="board" type="text" required=""/></div>
 <div> Course:<input type="text" name="Course" placeholder="e.g. IIT JEE, NEET , Foundation" required=""></div>
  <input name="submit" type="submit" />
</form>