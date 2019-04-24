<?php
session_start();
include('functions/check-login.php');
function __autoload($class)
{
  require_once "functions/$class.php";
}

$email = $_SESSION['email'];
$fullname = $_SESSION['fullname'];
$school = $_SESSION['school'];

$numberOfStudents = new users;
$numberOfStudents_fetch= $numberOfStudents->numberStudent($school);

$numberOfTeacher = new users;
$numberOfTeacher_fetch= $numberOfTeacher->numberTeacher($school);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/head.php'; ?>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <?php include 'inc/header.php'; ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php include 'inc/navbar.php'; ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->

            <!--php code-->
            <?php
            //insert
            if (isset($_POST['addstu']))
            {
                  $stuId = $_POST['stuId'];
                  $stuName = $_POST['stuName'];
                  $stuEmail =$_POST['stuEmail'];
                  $gender = $_POST['gender'];
                  $dob = $_POST['dob'];
                  $classId = $_POST['classId'];
                  $updationDate = "null";
                  $schoolName = $school;
                  $hashed = password_hash($stuId,PASSWORD_DEFAULT);

                    $fields = [
                      'stuId' => $stuId,
                      'stuName' => $stuName,
                      'stuEmail' => $stuEmail,
                      'Gender' => $gender,
                      'dob' => $dob,
                      'classId' => $classId,
                      'updationDate' => $updationDate,
                      'schoolName' => $schoolName,
                    'password' => $hashed,
                    'password_reset' => $stuEmail
                    ];

                    //checking for exiting stuIds'
                    $check = new users();
                    $stu_id = $check->checking($stuId);

                  if ($stu_id == $stuId)
                  {
                    ?>
                    <script type="text/javascript">
                      swal("", "<?php echo "student Id already exits"; ?>", "error");
                    </script>
                    <?php
                  }else {

                    $insert = new users();

                    $insert->insertStudent($fields);

                      ?>
                      <script type="text/javascript">
                        swal("", "<?php echo "student Added"; ?>", "success");
                      </script>
                      <?php

                  }
                }

                if (isset($_POST['addteacher']))
            {
                  $teacherId = $_POST['teacherId'];
                  $teacherName = $_POST['teacherName'];
                  $email =$_POST['email'];
                  $gender = $_POST['gender'];
                  $updationDate = "null";
                  $hashed = password_hash($teacherId,PASSWORD_DEFAULT);
                  $schoolName = $school;

                    $fields = [
                      'teacherId' => $teacherId,
                      'teacherName' => $teacherName,
                      'email' => $email,
                      'gender' => $gender,
                      'updationDate' => $updationDate,
                    'password' => $hashed,
                    'password_reset' => $email,
                    'schoolName' => $schoolName
                    ];

                    //checking for exiting stuIds'
                    $check = new users();
                    $teacher_id = $check->checkingTeacher($teacherId);

                  if ($teacher_id == $teacherId)
                  {
                    ?>
                    <script type="text/javascript">
                      swal("", "<?php echo "Teacher Id already exits"; ?>", "error");
                    </script>
                    <?php
                  }else {

                    $insert = new users();

                    $insert->insertTeacher($fields);

                      ?>
                      <script type="text/javascript">
                        swal("", "<?php echo "teacher Added"; ?>", "success");
                      </script>
                      <?php

                  }
                }

                //edit form
                if (isset($_POST['update']))
                {

                  $room_number = $_POST['rn'];
                  $contact = $_POST['contact'];
                  $reported_issue = $_POST['rep_ish'];
                  $asset_name = $_POST['an'];
                  $head = $_POST['dh'];
                  $asset_tag = $_POST['at'];
                  $user_remarks = $_POST['remarks'];

                  $fields = [
                    'room_number' => $room_number,
                    'contact' => $contact,
                    'reported_issue' => $reported_issue,
                    'asset_name' => $asset_name,
                    'dept_head_name' => $head,
                    'asset_tag' => $asset_tag,
                    'user_remarks' => $user_remarks
                    
                  ];

                  $id = $_POST['id'];

                  $update_report = new users();
                  $update_report->updateReport($fields, $id);

                  if($update_report) {

                      ?>
                      <script type="text/javascript">
                        swal("", "<?php echo "Form Updated"; ?>", "info");
                      </script>
                      <?php

                  }else {
                    ?>
                    <script type="text/javascript">
                      swal("Ooops", "error", "warning");
                    </script>
                    <?php
                  }
                }

            //accepted
            if (isset($_POST['received']))
            {

              $receive = new users;
              $receive->insertReceive($fullname, $department);
              if ($receive) {
                ?>
                <script type="text/javascript">
                  swal("Received", "By You", "success");
                </script>
                <?php
              }else {
                ?>
                <script type="text/javascript">
                  swal("Ooops", "Error", "warning");
                </script>
                <?php
              }

            }

            //add head
            if (isset($_POST['addHead']))
            {
              $head = $_POST['hd'];

                $insertH = new users();
                $insertH->insertHead($head, $department);


            }
             ?>
            <!--end of codes-->
            <div class="page-content fade-in-up">
              <h5><b>Dashboard</b></h5>
              <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numberOfStudents_fetch; ?></h2>
                                <div class="m-b-5">All Students</div><i class="fa fa-user widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="ibox bg-primary color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numberOfTeacher_fetch; ?></h2>
                                <div class="m-b-5">All Teachers</div><i class="fa fa-user widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="ibox">
                    <div class="ibox-body">
                        <div class="alert alert-default">
                          <h3 class="text-center"><b>All Submitted Reports</b></h3>
                        </div>
                        <br>
                        <form  method="post">


                        <table class="table table-striped table-responsive table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Reported Issue</th>
                                  <th>Date</th>
                                  <th>Asset Name</th>
                                  <th>Asset Tag</th>
                                  <th>Dept. Head</th>
                                  <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Reported Issue</th>
                                <th>Date</th>
                                <th>Asset Name</th>
                                <th>Asset Tag</th>
                                <th>Dept. Head</th>
                                <th>Actions</th>
                              </tr>
                            </tfoot>
                            <tbody>
                             <?php
                             //$fault_table = new users;
                            // $rows = $fault_table->selectAllFaults($department);

                             //if (empty($rows)) {
                               ?>
                               <tr>
                                 <td colspan="7"><b class="text-danger">No Data</b> </td>
                               </tr>
                               <?php
                             //}else {
                               //foreach ($rows as $row2) {
                                 ?>
                                 <tr>
                                   <td><?php //echo $row2['id']; ?></td>
                                     <td><?php // echo $row2['reported_issue']; ?></td>
                                     <td><?php //echo $row2['date']; ?></td>
                                     <td><?php // echo $row2['asset_name']; ?></td>
                                     <td><?php //echo $row2['asset_tag']; ?></td>
                                     <td><?php //echo $row2['dept_head_name']; ?></td>
                                     <td><a href="" data-toggle="modal" data-target="#myEdit" class="btn btn-xs btn-info edit" name="<?php echo $row2['id']; ?>"><i class="" title="preview" aria-hidden="true">edit</i></a></td>
                                 </tr>
                                 <?php
                              // }
                            // }

                               ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div> -->


                <!-- The Modal questions add for contact-->
                <div class="modal fade" id="myView">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Submitted Form</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-center" id="view" >

                            </div>

                            <!-- Modal footer -->
                            <!-- <div class="modal-footer">

                                    </div> -->

                        </div>
                    </div>
                </div>
                <!-- The Modal end -->

                <!-- The Modal questions add for contact-->
                <div class="modal fade" id="accept">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Verification</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-center" >
                              <h5><b>Are You Sure ?</b></h5>
                              <hr>
                              <form class="" method="post">
                                <input class="btn btn-md btn-success" type="submit" name="received" value="YES">
                                <input class="btn btn-md btn-danger" data-dismiss="modal" type="button" value="NO">
                              </form>
                            </div>

                            <!-- Modal footer -->
                            <!-- <div class="modal-footer">

                                    </div> -->

                        </div>
                    </div>
                </div>
                <!-- The Modal end -->

                <!-- The Modal questions add for contact-->
                <div class="modal fade" id="myEdit">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Form</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-center" id="edit" >

                            </div>

                            <!-- Modal footer -->
                            <!-- <div class="modal-footer">

                                    </div> -->

                        </div>
                    </div>
                </div>
                <!-- The Modal end -->

                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>

            <!-- END PAGE CONTENT-->
            <footer class="page-footer" style="background-color:darkblue; color:white;">
            <?php include 'inc/footer.php'; ?>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include 'inc/config.php'; ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <?php include 'inc/script.php'; ?>
    <!--logs file here -->
    <?php //include './../../logsFile.php'; ?>
    <!--end of log file-->
</body>

<script type="text/javascript">
$('.edit').click(function(e){
  e.preventDefault();
  var read_id = $(this).attr("name");
  $.ajax({
      type: "GET",
      url: "edit.php",
      data: {read_id},
      success: function(data){
          $('#edit').html(data);
          $('#myEdit').modal('show');
      }
  });
});

$('.view').click(function(e){
  e.preventDefault();
  var read_id = $(this).attr("name");
  $.ajax({
      type: "GET",
      url: "view.php",
      data: {read_id},
      success: function(data){
          $('#view').html(data);
          $('#myView').modal('show');
      }
  });
});

$(function() {
    $('#example-tables').DataTable({
        pageLength: 10,
        //"ajax": './assets/demo/data/table_data.json',
        /*"columns": [
            { "data": "name" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
    });
})

$(function() {
    $('#example-table').DataTable({
        pageLength: 10,
        //"ajax": './assets/demo/data/table_data.json',
        /*"columns": [
            { "data": "name" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
    });
})
</script>
</html>
