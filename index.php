  <?php
 include 'header.php';
 $url =   "../images/bg.jpg";
    $connection_obj = mysqli_connect("localhost","db","root","jscrud");
        if (!$connection_obj) {
            echo "Error No: " . mysqli_connect_errno();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        }
       $query = "SELECT * FROM employee_activity";
         
        $result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
        mysqli_close($connection_obj);
?>

<html>
<head>
<title>View Activity</title>
</head> 
<body>

	<div class="container">
    <h2 class="text-center">Employee Activity</h2><br><br>
    <div class="row">
      <div class="col-9">
          <div class="card">
               <table class="table table-striped card-header ta" id="list">
                  <thead>
                      <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Date</th>
                          <th>Activity</th>
                          <th>Duration</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php  
                      $count=1;
                      while ($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                          <td><?php echo $count++; ?></td>
                          <td><?php echo $row["name"] ?></td>
                          <td><?php echo $row["ldate"] ?></td>
                          <td><?php echo $row["activity"] ?></td>
                          <td><?php echo $row["duration"] ?></td>
                          <td><a class="btn btn-primary" href="controller/edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                          <td><a class="btn btn-primary" href="controller/delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                    <?php }?>
                  </tbody>
                
              </table>
          </div>
      </div>
      <div class="col-2">
        <a class="pull-right btn btn-primary" href="add.php">Add Activity</a>
      </div>
    </div>
    </div>

</body>
</html>
