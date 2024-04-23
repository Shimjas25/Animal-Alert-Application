<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $cmpsid=$_GET['cmpsid'];
	$result = $db->prepare("select * from  poplecomplaintpost where cmpsid='$cmpsid'");
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
		$hospt=$row["hospt"];
		
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
                  <form>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name"  value="<?php echo $name;?>">
                          <input type="hidden" name="photo"  value="<?php echo $photo;?>">
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
                          <label class="bmd-label-floating">Hospital</label>
                          <input type="text" class="form-control" name="hospt"  value="<?php echo $hospt;?>">                        
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
                            <textarea class="form-control" rows="5" name="descp"><?php echo $descp;?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
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
                     <a class="btn btn-danger btn-round" onClick="window.print()" style="color:white">Print</a>
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