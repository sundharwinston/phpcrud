<br>
<title>Add Activity</title>
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header  text-center">
            <b>Javascript Crud</b>
            </div>
            <div class="card-body">
                <form action="add.php" method="post">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div>
                        <label for="activity">Activity</label>
                        <input type="text" class="form-control" name="activity" id="activity">
                    </div>
                    <div>
                        <label for="duration">Duration</label>
                        <input type="time" name="duration" id="duration" class="form-control">
                    </div><br>
                    <div class="text-center">
                        <input type="submit" name="form_submit" class="btn btn-primary pull-right" value="Submit">
                        <input type="button" onclick="window.location.href='index.php'" value="Back" class="btn btn-primary pull-right">
                    </div>
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>

<?php
    include_once 'header.php';
    if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['activity']) && isset($_POST['duration'])) {
        $Name = $_POST['name'];
        $ldate = $_POST['date'];
        $Activity = $_POST['activity'];
        $Duration = $_POST['duration'];     
    }
    $conn = new mysqli("localhost", "db", "root", "jscrud");

    if ($conn) {
        // echo"success";
      if (isset($_POST['form_submit'])) {
        if($Name!='' && $ldate!='' && $Activity!='' && $Duration!=''){
            $sql = mysqli_query($conn,"INSERT INTO employee_activity (name, ldate, activity,duration) VALUES ('$Name', '$ldate', '$Activity', '$Duration')");
            echo "<script> location.href='index.php'; </script>";
            echo "<div class='alert alert-success'>Record was saved.</div>";
            }
          else{
              echo '<script language="javascript">';
              echo 'alert("Fill All the Field")';
              echo '</script>';
          }
        }
    } 
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

