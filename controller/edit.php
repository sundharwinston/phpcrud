<?php
 include '../header.php';
   $id = $_GET['id'];
    $conn = mysqli_connect("localhost","db","root","jscrud");
        if (!$conn) {
            echo "Error No: " . mysqli_connect_errno();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        }
       $query = "SELECT * FROM employee_activity WHERE id=$id";
         
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>


<title>Edit Activity</title>
<?php while ($row = mysqli_fetch_array($result)) {?>
  <div class="container">
  <div class="card">
    <div class="card-header  text-center">
            <b>Javascript Crud</b>
        </div>
        <div class="card-body">
              <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name" id="name">
                </div>
                <div>
                    <label for="date">Date</label>
                    <input type="date" class="form-control" value="<?php echo $row['ldate'] ?>" name="date" id="date">
                </div>
                <div>
                    <label for="activity">Activity</label>
                    <input type="text" class="form-control" value="<?php echo $row['activity'] ?>" name="activity" id="activity">
                </div>
                <div>
                    <label for="duration">Duration</label>
                    <input type="time" name="duration" value="<?php echo $row['duration'] ?>" id="duration" class="form-control">
                </div><br>
                <input type="submit" class="btn btn-primary text-center" value="Submit">
            </form>
          </div>
    </div>
</div>

<?php }?>
