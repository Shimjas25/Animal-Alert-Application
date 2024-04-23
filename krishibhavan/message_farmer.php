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
        <!-- Message -->
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Recive Message</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Krishibhavan
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                         Contact
                        </th>
                        <th>
                         Subject
                        </th>
                        <th>
                         Description
                        </th>
                        <th>
                         Date
                        </th>
                        <th>
                        Reply
                        </th>                       
                      </thead>
                      <tbody>
                         <?php
                            $result = $db->prepare("select * from  kmessage where kbhn='$name' and reply=''");
                            $result->execute();
                            for($i=1; $row = $result->fetch(); $i++)
                                {	
                                    echo"<tr>";			
									echo"<td>".$i."</td>";													
                                    echo"<td>".$row["kbhn"]."</td>";	
                                    echo"<td>".$row["name"]."</td>";	
								 	echo"<td>".$row["cntno"]."</td>";	
									echo"<td>".$row["subj"]."</td>";
									echo"<td>".$row["descp"]."</td>";	
									echo"<td>".$row["date"]."</td>";	
								?>
                                <td>
                                 <a href="message_farmer_reply.php<?php echo '?kmsg_id='.$row["kmsg_id"]; ?>" class="btn btn-info">Send</a>
                                 </td>
                                <?php
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
        <!-- Message End -->
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Reply Message</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Krishibhavan
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                         Contact
                        </th>
                        <th>
                         Subject
                        </th>
                        <th>
                         Description
                        </th>
                        <th>
                         Date
                        </th>
                        <th>
                        Reply
                        </th> 
                         <th>
                        Date
                        </th>                       
                      </thead>
                      <tbody>
                         <?php
                            $result = $db->prepare("select * from  kmessage where kbhn='$name' and reply!=''");
                            $result->execute();
                            for($i=1; $row = $result->fetch(); $i++)
                                {	
                                    echo"<tr>";			
									echo"<td>".$i."</td>";													
                                    echo"<td>".$row["kbhn"]."</td>";	
                                    echo"<td>".$row["name"]."</td>";	
								 	echo"<td>".$row["cntno"]."</td>";	
									echo"<td>".$row["subj"]."</td>";
									echo"<td>".$row["descp"]."</td>";	
									echo"<td>".$row["date"]."</td>";	
									echo"<td>".$row["reply"]."</td>";	
									echo"<td>".$row["rdate"]."</td>";								
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
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>