<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $kmsg_id=$_GET['kmsg_id'];
	$result = $db->prepare("select * from  kmessage where kmsg_id='$kmsg_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$cntno=$row["cntno"];
		$subj=$row["subj"];
		$descp=$row["descp"];
		$date=$row["date"];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  	<?php include("include/header.php");?>
</head>

<body class="">
  <div class="wrapper ">
    <?php include("include/leftmenu.php");?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("include/navbar.php");?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Message</h4>
                  <p class="card-category">Reply</p>
                </div>
                <div class="card-body">
                  <form autocomplete="off" method="post" action="action/message_reply.php">
                    <div class="row">                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                          <input type="hidden" name="kmsg_id" value="<?php echo $kmsg_id;?>">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact</label>
                          <input type="text" class="form-control" name="cntno"  value="<?php echo $cntno;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" class="form-control" name="date" value="<?php echo $date;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject</label>
                          <input type="text" class="form-control" name="subj" value="<?php echo $subj;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" name="descp" value="<?php echo $descp;?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reply</label>
                          <textarea class="form-control" rows="2" name="reply" required></textarea>
                        </div>
                      </div>
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- Message -->
      </div>
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>