<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	$result = $db->prepare("select * from  user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Farmers</p>
                  <h3 class="card-title">
                  <?php
						$result = $db->prepare("select count(*) from user where utype='Farmer'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>               
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">People</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='People'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Krishibhavan</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='Krishibhavan'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>              
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-hospital-o"></i>
                  </div>
                  <p class="card-category">Hospital</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='Hospital'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Latest Complaint</span>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
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
                                <th>Forestry</th>   
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = $db->prepare("select * from  poplecomplaintpost where Log_Id='$Log_Id' and kst='Pending' and fsat='Pending'  limit 3");
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
									echo"<td>".$row["frstry"]."</td>";							
                                    echo"</tr>";										
                                }
                         ?>	
                        </tbody>
                    </table>  
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