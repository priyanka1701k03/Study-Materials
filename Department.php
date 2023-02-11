<?php include 'header.php'; 

if(isset($_POST['btn']))
{
   $dept_name=$_POST['dept_name'];
   $dept_desc=$_POST['dept_desc'];

  $data=[
        'dept_name'=>$dept_name,
        'dept_desc'=>$dept_desc,    
        ];

  $ref='dept_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="Department.php";
    </script>';  }
  else
  {
echo'<script type="text/javascript">
    alert("Record not inserted");
    </script>';
  }
}


?>
<!--Container Main start-->
    <div class="height-100 bg-white">
            <br>
        	<h4>Add Department</h4>
        	<br>
        	<div class="col-sm-10">
            <form action="Department.php" method="POST">
        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Department Name <span style="color:red">*</span></label>
        			<input type="text" name="dept_name" class="form-control" placeholder="Department name" required="">
        		</div>
        	   </div>
        	   <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Department Decription</label>
        			<input type="text" name="dept_desc" class="form-control" placeholder="Department decription">
        		</div>
        	</div>
             <br>
        	<div class="row">

        		<div class="col-sm-12">
        			
        			<input type="submit" name="btn" class="btn btn-primary" value="Submit">
        		</div>
        	</div>
        	</form>
            </div>

    </div>
    <!--Container Main end-->
<?php include 'footer.php'; ?>