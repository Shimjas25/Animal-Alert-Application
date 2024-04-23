<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $cmpsid=$_GET['cmpsid'];
	$result = $db->prepare("select * from  complaintpost where cmpsid='$cmpsid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$sex=$row["sex"];
		$age=$row["age"];
		
		
		$aadharno=$row["aadharno"];
		
		$cntno=$row["cntno"];
		
		$addr=$row["addr"];
		$panchayath=$row["panchayath"];
		$descp=$row["descp"];
		$photo=$row["photo"];
		
		$frstry=$row["frstry"];
		$kbhn=$row["kbhn"];
		
		$cdate=$row["cdate"];
		$pdate=$row["pdate"];
		$cname=$row["cname"];
		
		$photo1=$row["photo1"];
		$photo2=$row["photo2"];
		
		
		
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
                  <h4 class="card-title">Claims </h4>
                  <p class="card-category">Complete Your Complaints</p>
                </div>
                <div class="card-body">
                  <form method="post" action="action/complaint_update.php" autocomplete="off">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name"  value="<?php echo $name;?>">
                          <input type="hidden" name="cmpsid"  value="<?php echo $cmpsid;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" class="form-control" name="sex"  value="<?php echo $sex;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="text" class="form-control" name="age"  value="<?php echo $age;?>">
                        </div>
                      </div>                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Aadharno</label>
                          <input type="text" class="form-control" name="aadharno"  value="<?php echo $aadharno;?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="addr"  value="<?php echo $addr;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Krishibhavan</label>
                          <input type="text" class="form-control" name="kbhn"  value="<?php echo $kbhn;?>">                        
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact No</label>
                          <input type="text" class="form-control" name="cntno"  value="<?php echo $cntno;?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Complaint Date</label>
                           <input type="text" class="form-control" name="cdate"  value="<?php echo $cdate;?>">        
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Post Date</label>
                          	 <input type="text" class="form-control" name="pdate"  value="<?php echo $pdate;?>">  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Forestry</label>
                          <input type="text" class="form-control" name="frstry"  value="<?php echo $frstry;?>">                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Panchayath</label>
                          <input type="text" class="form-control" name="panchayath"  value="<?php echo $panchayath;?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Complaint</label>
                          <input type="text" class="form-control" name="cname"  value="<?php echo $cname;?>">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Complaint</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="14" name="descp"><?php echo $descp;?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                     <a class="btn btn-danger btn-round pull-right" onClick="window.print()" style="color:white">Print</a>
                    <div class="clearfix"></div>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">               
                <div class="card-body">
                	
                	<img class="img" src="../photo/<?php echo $photo1;?>" width="100%" />
                    	<br><br>
                  	 <img class="img" src="../photo/<?php echo $photo2;?>" width="100%" />
                     
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                           <label class="pull-left">Complaint</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="3" name="kbhnreply"></textarea>
                          </div>
                        </div>
                      </div>
                      
                       <div class="col-md-12">
                        <div class="form-group">
                           <label class="pull-left">Date</label>
                          <div class="form-group">
                            <input type="date" class="form-control" name="kdate" required>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                           <label class="pull-left">Update Status</label>
                          <div class="form-group">
                           <input list="kst" required class="form-control form-control-primary" name="kst">
                            <datalist id="kst">
                                <option></option>
                                <option>Accept</option>
                                <option>Cancel</option>
                            </datalist>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-primary btn-round">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </form>                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>