<!DOCTYPE html>
<?php
include('func1.php');
$con = mysqli_connect("localhost", "vishwesh", "vishwesh@2004", "myhmsdb");
$doctor = $_SESSION['dname'];
if (isset($_GET['cancel'])) {
  $query = mysqli_query($con, "update appointmenttb set doctorStatus='0' where ID = '" . $_GET['ID'] . "'");
  if ($query) {
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
    toastr.success('Your appointment successfully cancelled', 'Success');
});</script>";
  }
}

// if(isset($_GET['prescribe'])){

//   $pid = $_GET['pid'];
//   $ID = $_GET['ID'];
//   $appdate = $_GET['appdate'];
//   $apptime = $_GET['apptime'];
//   $disease = $_GET['disease'];
//   $allergy = $_GET['allergy'];
//   $prescription = $_GET['prescription'];
//   $query=mysqli_query($con,"insert into prestb(doctor,pid,ID,appdate,apptime,disease,allergy,prescription) values ('$doctor',$pid,$ID,'$appdate','$apptime','$disease','$allergy','$prescription');");
//   if($query)
//   {
//     echo "<script>alert('Prescribed successfully!');</script>";
//   }
//   else{
//     echo "<script>alert('Unable to process your request. Try again!');</script>";
//   }
// }


?>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<style type="text/css">
  button:hover {
    cursor: pointer;
  }

  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body>
  <div class="container-fluid p-4 vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MediCare</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="container-fluid" style="margin-top:50px;">
      <h3 style="margin-left: 40%; padding-bottom: 20px;font-family:'IBM Plex Sans', sans-serif;"> Welcome
        &nbsp<?php echo $_SESSION['dname'] ?> </h3>
      <div class="row">
        <div class="col-md-4" style="max-width:18%;margin-top: 3%;">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" href="#list-dash" role="tab" aria-controls="home"
              data-toggle="list">Dashboard</a>
            <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab"
              data-toggle="list" aria-controls="home">Appointments</a>
            <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab"
              data-toggle="list" aria-controls="home"> Prescription List</a>

          </div><br>
        </div>
        <div class="col-md-8" style="margin-top: 3%;">
          <div class="tab-content" id="nav-tabContent" style="width: 950px;">
            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">

              <div class="container-fluid container-fullw bg-white">
                <div class="row">

                  <div class="col-sm-4" style="left: 10%">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                            class="fa fa-list fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;"> View Appointments</h4>
                        <script>
                          function clickDiv(id) {
                            document.querySelector(id).click();
                          }
                        </script>
                        <p class="links cl-effect-1">
                          <a href="#list-app" onclick="clickDiv('#list-app-list')">
                            Appointment List
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4" style="left: 15%">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                            class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;"> Prescriptions</h4>

                        <p class="links cl-effect-1">
                          <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                            Prescription List
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-home-list">

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Current Status</th>
                    <th scope="col">Action</th>
                    <th scope="col">Prescribe</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost", "vishwesh", "vishwesh@2004", "myhmsdb");
                  global $con;
                  $dname = $_SESSION['dname'];
                  $query = "select pid,ID,fname,lname,gender,email,contact,appdate,apptime,userStatus,doctorStatus from appointmenttb where doctor='$dname';";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['pid']; ?></td>
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['lname']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['appdate']; ?></td>
                      <td><?php echo $row['apptime']; ?></td>
                      <td>
                        <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) {
                          echo "Active";
                        }
                        if (($row['userStatus'] == 0) && ($row['doctorStatus'] == 1)) {
                          echo "Cancelled by Patient";
                        }

                        if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
                          echo "Cancelled by You";
                        }
                        ?>
                      </td>

                      <td>
                        <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) { ?>


                          <a href="doctor-panel.php?ID=<?php echo $row['ID'] ?>&cancel=update" onClick="event.preventDefault(); 
             Swal.fire({ 
               title: 'Are you sure?', 
               text: 'You won’t be able to revert this!', 
               icon: 'warning', 
               showCancelButton: true, 
               confirmButtonColor: '#d33', 
               cancelButtonColor: '#3085d6', 
               confirmButtonText: 'Yes, cancel it!' 
             }).then((result) => { 
               if (result.isConfirmed) { 
                 window.location.href = this.href; 
               } 
             });" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">
                            <button class="btn btn-danger">Cancel</button>
                          </a>

                        <?php } else {

                          echo "Cancelled";
                        } ?>

                      </td>

                      <td>

                        <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) { ?>

                          <a href="prescribe.php?pid=<?php echo $row['pid'] ?>&ID=<?php echo $row['ID'] ?>&fname=<?php echo $row['fname'] ?>&lname=<?php echo $row['lname'] ?>&appdate=<?php echo $row['appdate'] ?>&apptime=<?php echo $row['apptime'] ?>"
                            tooltip-placement="top" tooltip="Remove" title="prescribe">
                            <button class="btn btn-success">Prescibe</button></a>
                        <?php } else {

                          echo "-";
                        } ?>

                      </td>


                    </tr></a>
                  <?php } ?>
                </tbody>
              </table>
              <br>
            </div>



            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
              <table class="table table-hover">
                <thead>
                  <tr>

                    <th scope="col">Patient ID</th>

                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescribe</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $con = mysqli_connect("localhost", "vishwesh", "vishwesh@2004", "myhmsdb");
                  global $con;

                  $query = "select pid,fname,lname,ID,appdate,apptime,disease,allergy,prescription from prestb where doctor='$doctor';";

                  $result = mysqli_query($con, $query);
                  if (!$result) {
                    echo mysqli_error($con);
                  }


                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['pid']; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['lname']; ?></td>
                      <td><?php echo $row['ID']; ?></td>

                      <td><?php echo $row['appdate']; ?></td>
                      <td><?php echo $row['apptime']; ?></td>
                      <td><?php echo $row['disease']; ?></td>
                      <td><?php echo $row['allergy']; ?></td>
                      <td><?php echo $row['prescription']; ?></td>

                    </tr>
                  <?php }
                  ?>
                </tbody>
              </table>
            </div>




            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultancy Fees</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $con = mysqli_connect("localhost", "vishwesh", "vishwesh@2004", "myhmsdb");
                  global $con;

                  $query = "select * from appointmenttb;";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {

                    #$fname = $row['fname'];
                    #$lname = $row['lname'];
                    #$email = $row['email'];
                    #$contact = $row['contact'];
                    ?>
                    <tr>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['lname']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['doctor']; ?></td>
                      <td><?php echo $row['docFees']; ?></td>
                      <td><?php echo $row['appdate']; ?></td>
                      <td><?php echo $row['apptime']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <br>
            </div>





            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              <form class="form-group" method="post" action="admin-panel1.php">
                <div class="row">
                  <div class="col-md-4"><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="dpassword" required></div>
                  <br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email" class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="docFees" required></div><br><br>
                </div>
                <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
              </form>
            </div>
            <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
      integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  </div>
</body>

</html>