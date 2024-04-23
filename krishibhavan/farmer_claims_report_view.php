<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_KRISHIBHAVAN_ID'];
	$result = $db->prepare("select * from  user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
	}
	$fdate=$_POST["fdate"];
	$tdate=$_POST["tdate"];
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Complaint</h4>
                  <h5>Report From <?php echo date("d-m-Y",strtotime($fdate)); ?> To <?php echo date("d-m-Y",strtotime($tdate));?></h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>    
                                <th>#</th> 
                                <th>Date</th> 
                                <th>Name</th>    
                                <th>Gender</th>     
                                <th>Age</th>                                   
                                <th>Contact</th>                   
                                <th>Address</th> 
                                <th>Complaint</th>  
                                <th>Krishibhavan</th>      
                                <th>Forestry</th>   
                                <th>Status</th>    
                                <th>Status</th>                                                                           
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = $db->prepare("select * from  complaintpost where pdate>='$fdate' and pdate<='$tdate'  and kbhn='$name' and kbhnreply!=''");
                            $result->execute();
                            for($i=1; $row = $result->fetch(); $i++)
                                {	
                                    echo"<tr>";			
									echo"<td>".$i."</td>";													
                                    echo"<td>".date("d-m-Y",strtotime($row["pdate"]))."</td>";
                                    echo"<td>".$row["name"]."</td>";	
                                    echo"<td>".$row["sex"]."</td>";	
								 	echo"<td>".$row["age"]."</td>";	
									echo"<td>".$row["cntno"]."</td>";
									echo"<td>".$row["addr"]."</td>";	
									echo"<td>".$row["cname"]."</td>";	
									echo"<td>".$row["kbhn"]."</td>";	
									echo"<td>".$row["frstry"]."</td>";
									echo"<td>".strtoupper($row["kst"])."</td>";	
									echo"<td>".strtoupper($row["fsat"])."</td>";																				
                                    echo"</tr>";										
                                }
                         ?>	
                        </tbody>
                    </table>                                
                     <div class="row fa-pull-right">
                        <div class="form-group col-md-6">
                            <a href="farmer_claims_report.php" class="btn btn-block btn-google">Back</a>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="submit" value="Print" class="btn btn-block btn-facebook" onClick="window.print()">
                        </div>
                    </div>
                  </div>
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