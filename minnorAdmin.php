<html>  
    <head>  
        <title>Update Multiple Mysql Data using Checkbox with Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center"><b>HELLO ADMIN</b></h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="10%">Name</th>
                                <th width="5%">Sex</th>
								<th width="5%">Age</th>
                                <th width="30%">Qualification</th>
								<th width="20%">College</th>
                            </thead>
							<?php 
							$servername="localhost";
$dbname="minnor";
$username="root";
$password="";
$db = mysqli_connect($servername, $username, $password, $dbname);
							$results = mysqli_query($db, "SELECT * FROM jobap");
if(isset($_REQUEST["submit"]))
{
	$chk=$_REQUEST["chk"];
	$a=implode(",",$chk);
	mysql_query("delete from jobap where reg in ($a)");
}
?>
                            <?php 
							while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><input type="checkbox" name="chk[]" value="<?php echo $row['name'] ?>"></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['sex']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['quali']; ?></td>
			<td><?php echo $row['college']; ?></td>
		</tr>
	<?php } ?>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
