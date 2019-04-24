<?php
function __autoload($class)
{
  require_once "functions/$class.php";
}

    $id = $_GET['read_id'];

     $viewData = new users;
     $read_row = $viewData->viewData($id);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
  </head>
  <body>
    <form class="form-group" action="report.php" method="post">
      <input type="hidden" name="id" value="<?php echo $read_row['id']; ?>">
<label for="" class="pull-left">Room Number</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['room_number']; ?>" name="rn"  autofocus required /><br>
<label for="" class="pull-left">Contact</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['contact']; ?>" pattern="[0,9]{10}" name="contact" required /><br>
<label for="" class="pull-left">Reported Issue</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['reported_issue']; ?>" name="rep_ish"  required /><br>
<label for="" class="pull-left">Asset Name</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['asset_name']; ?>" name="an" required /><br>
<label for="" class="pull-left">Asset Tag</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['asset_tag']; ?>" name="at"  required /><br>
<label for="" class="pull-left">Department Head</label>
<input readonly class="form-control" type="text" value="<?php echo $read_row['dept_head_name']; ?>" name="dh"  required /><br>
<label for="" class="pull-left">Fault Remarks</label>
<textarea readonly class="form-control" name="remarks" rows="8" cols="80"><?php echo $read_row['user_remarks']; ?></textarea> <br>
<label for="" class="pull-left">MIS Fault Remarks</label>
<textarea readonly class="form-control" name="remarks" rows="8" cols="80"><?php echo $read_row['mis_remarks']; ?></textarea> <br>
<input type="button" class="btn btn-block btn-danger" data-dismiss="modal" value="Close"/>

</form>

  </body>
    <script src="./assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
        $('#summernote').summernote();
        $('#summernote_air').summernote({
            airMode: true
        });
    });
    </script>
</html>
