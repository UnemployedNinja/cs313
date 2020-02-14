<?php
	require("dbConnect.php");
	$db = get_db();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Week 6 class activity</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
         <h1>Create a Note for a Course</h1>
         <form id="mainForm" action="insert.php" method="POST">
            <?php // TODO: dropdown that shows all students ?>
            <br><br>
            <div class="row">
               <div class="form-group col">
                  <label for="courseNote">Title</label>
                  <input class="form-control" name="noteTitle" rows="3" />
               </div>
               <div class="form-group col">
                  <label for="courseNote">Note</label>
                  <textarea class="form-control" name="courseNote" rows="3"></textarea>
               </div>
               <div class="form-group col">
                  <label for="inputCourse">Class</label>
                  <?php // TODO: dropdown that shows all courses ?>
               </div>
               <div class="row">
                  <div class="col">
                     <input class="btn btn-primary" type="submit" value="Save Note" />
                  </div>
               </div>
            </div>
         </form>
		</div>
	</body>
</html>