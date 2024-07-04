<?php
// $_GET for get method
// $_POST for post methods
// $_REQUEST for both methods

echo "The name of the student is ". "<mark>". $_POST["name"]."</mark>"."<br> He is in class ". $_POST["class"] . "<br> having roll number " . $_POST["roll"] . "<br> and is enrolled in course " . "<mark>" . $_POST["course"] . "</mark>" . "<br> of duration " . $_POST["duration"] . "<br>" ;

?>