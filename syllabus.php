<?php include 'header.php';
if(isset($_POST['btn']))
{
    

   $syb_name=$_POST['syb_name'];
   $syb_cls=$_POST['syb_cls'];
   $syb_sub=$_POST['syb_sub'];
   $syb_dept=$_POST['syb_dept'];
   $syb_file=$_POST['syb_file'];
   $syb_descr=$_POST['syb_descr'];

  $data=[
        'syb_name'=>$syb_name,
        'syb_cls'=>$syb_cls,
        'syb_sub'=>$syb_sub,
        'syb_dept'=>$syb_dept,
        'syb_file'=>$syb_file,
        'syb_descr'=>$syb_descr,    
        ];

  $ref='syb_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="syllabus.php";
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
        	<h4>Add Syllabus</h4>
        	<br>
        	<div class="col-sm-10">
                <form action="syllabus.php" method="POST">

        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Syllabus Name</label>
        			<input type="text" name="syb_name" class="form-control" placeholder="Syllabus name">
        		</div>
        	   </div>
        	   <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Class Name</label>
                    <input type="text" name="syb_cls" class="form-control" placeholder="Class name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Subject Name</label>
                    <input type="text" name="syb_sub" class="form-control" placeholder="Subject name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Department Name</label>
                    <input type="text" name="syb_dept" class="form-control" placeholder="Department name">
                </div>
               </div>
               <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Syllabus Image / Pdf / Word File</label>
                    <input type="file" name="syb_file" class="form-control">
                </div>
               </div>
               <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Syllabus Decription</label>
        			<input type="text" name="syb_descr" class="form-control" placeholder="Department decription">
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