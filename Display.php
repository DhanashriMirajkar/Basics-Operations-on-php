<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include('Connections/_header.php');
    ?>
    <br><br>
    <div class="container">
        <div class="heading">
            <h1>
                Student Information
                <hr>
            </h1>
        </div>
        <div class="table-responsive-lg">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Country</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th colspan="2">Operations</th>
                    </tr>
                </thead>
                
                    <?php
                    
                    include 'insert.php';

                    $query = "SELECT * FROM `student_info_2`";

                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<br>";
                            echo "<tr>";
                            echo "<td>";
                            echo $row["fname"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["lname"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["email"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["date"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["country"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["gender"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["password"];
                            echo "</td>";
                            echo "<td>";
                            echo "<Edit type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button>"; 
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='Delete.php?id_value=$row[id]'><button class='btn btn-danger'>Delete</button></td>";
                            echo "</tr>";
                        }
                    }

                    ?>
            </table>
        </div>
    </div>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Updating Student Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="container-fulid edit_btn">
                    <label for="uname">First Name</label>
                    <input type="text" name="fname" id="fnameChange" class="form-control with-border" padding="20px" style="width: 300px; height: 50px;">
                    <br>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lnameChange" class="form-control with-border" padding="20px" style="width: 300px; height: 50px;">
                    <br>
                    <label for="pass">Password </label>
                    <input type="password" name="pass" id="passChange" class = "form-control" style="width:300px; height: 50px;">
                    <br>
                    <label for="pass">Confirm Password </label>
                    <input type="password" name="cpass" id="cpassChange" class = "form-control" style="width:300px; height: 50px;">     
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitData2">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>