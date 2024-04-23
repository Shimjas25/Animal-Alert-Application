<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_KRISHIBHAVAN_ID'];
	$result = $db->prepare("select * from  user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$cntno=$row["cntno"];
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
                  <p class="card-category">Send Forestry</p>
                </div>
                <div class="card-body">
                  <form autocomplete="off" method="post" action="action/message_save.php">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Forestry</label>
                         	<input list="frstry" required class="form-control form-control-primary" name="frstry">
                            <datalist id="frstry">
                                    <option value="">Select</option> 
                                     <?php
                                        $result = $db->prepare("select * from user where utype='Forestry'");
                                        $result->execute();
                                        $row_count =  $result->rowcount();
                                        for($i=0; $rows = $result->fetch(); $i++)
                                        {
                                        echo '<option>'.$rows['name'].'</option>';
                                        }
                                    ?>	                                         					
                                </datalist> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact</label>
                          <input type="text" class="form-control" name="cntno"  value="<?php echo $cntno;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" class="form-control" name="date" value="<?php echo date("d-m-Y");?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject</label>
                          <input type="text" class="form-control" name="subj" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea class="form-control" rows="2" name="descp" required></textarea>
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
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Message</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Forestry
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
                            $result = $db->prepare("select * from  fmessage where Log_Id='$Log_Id'");
                            $result->execute();
                            for($i=1; $row = $result->fetch(); $i++)
                                {	
                                    echo"<tr>";			
									echo"<td>".$i."</td>";													
                                    echo"<td>".$row["frstry"]."</td>";	
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
        <!-- Message End -->
      </div>
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>