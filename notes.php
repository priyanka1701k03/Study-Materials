<?php include 'header.php';

if(isset($_POST['btn']))
{
    

   $notes_name=$_POST['notes_name'];
   $cls_name=$_POST['notes_cls'];
   $sub_name=$_POST['notes_sub'];
   $dept_name=$_POST['notes_dept'];
   $notes_file=$_POST['notes_file'];
   $notes_descr=$_POST['notes_descr'];

  $data=[
        'notes_name'=>$notes_name,
        'cls_name'=>$cls_name,
        'sub_name'=>$sub_name,
        'dept_name'=>$dept_name,
        'notes_file'=>$notes_file,
        'notes_descr'=>$notes_descr,    
        ];

  $ref='notes_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="notes.php";
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
        <form action="notes.php" method="POST">
            <br>
        	<h4>Add Notes</h4>
        	<br>
        	<div class="col-sm-10">

        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Notes Name</label>
        			<input type="text" name="notes_name" class="form-control" placeholder="Notes name">
        		</div>
        	   </div>
        	   <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Class Name</label>
                    <input type="text" name="notes_cls" class="form-control" placeholder="Class name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Subject Name</label>
                    <input type="text" name="notes_sub" class="form-control" placeholder="Subject name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Department Name</label>
                    <input type="text" name="notes_dept" class="form-control" placeholder="Department name">
                </div>
               </div>
               <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Select Notes / WordFile /Pdf </label>
                    <input type="file" name="notes_file" class="form-control">
                </div>
               </div>
               <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Notes Decription</label>
        			<input type="text" name="notes_descr" class="form-control" placeholder="Notes decription">
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