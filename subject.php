<?php include 'header.php'; 

if(isset($_POST['btn']))
{
   $sub_name=$_POST['sub_name'];
   $sub_file=$_POST['sub_file'];
   $sub_descr=$_POST['sub_descr'];

  $data=[
        
        'sub_name'=>$sub_name,
        'sub_file'=>$sub_file,
        'sub_descr'=>$sub_descr,
        
  ];

  $ref='sub_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="subject.php";
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
        <form action="subject.php" method="POST">
            <br>
        	<h4>Add Subjects</h4>
        	<br>
        	<div class="col-sm-10">

        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Subject Name</label>
        			<input type="text" name="sub_name" class="form-control" placeholder="Department name">
        		</div>
        	   </div>
        	   <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Subject image</label>
                    <input type="file" name="sub_file" class="form-control">
                </div>
               </div>
               <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Subject Decription</label>
        			<input type="text" name="sub_descr" class="form-control" placeholder="Department decription">
        		</div>
        	</div>
             <br>
        	<div class="row">

        		<div class="col-sm-12">
        			
        			<input type="submit" name="btn" class="btn btn-primary" value="Submit">
        		</div>
        	</div>
            </div>
      </form>
    </div>
    <!--Container Main end-->
<?php include 'footer.php'; ?>