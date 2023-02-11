<?php include 'header.php'; 

if(isset($_POST['btn']))
{
   $videos_name=$_POST['videos_name'];
   $videos_cls=$_POST['videos_cls'];
   $videos_sub=$_POST['videos_sub'];
   $videos_dept=$_POST['videos_dept'];
   $videos_file=$_POST['videos_file'];
   $videos_descr=$_POST['videos_descr'];

   $data=[
        'videos_name'=>$videos_name,
        'videos_cls'=>$videos_cls,
        'videos_sub'=>$videos_sub,
        'videos_dept'=>$videos_dept,
        'videos_file'=>$videos_file,
        'videos_descr'=>$videos_descr,    
        ];

  $ref='videos_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="videos.php";
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
        	<h4>Add Videos</h4>
        	<br>
        	<div class="col-sm-10">
                <form action="videos.php" method="POST">
        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Video Name</label>
        			<input type="text" name="videos_name" class="form-control" placeholder="Video name">
        		</div>
        	   </div>
        	   <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Class Name</label>
                    <input type="text" name="videos_cls" class="form-control" placeholder="Class name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Subject Name</label>
                    <input type="text" name="videos_sub" class="form-control" placeholder="Subject name">
                </div>
               </div>
               <br>
               <div class="row">
                
                <div class="col-sm-12">
                    <label>Department Name</label>
                    <input type="text" name="videos_dept" class="form-control" placeholder="Department name">
                </div>
               </div>
               <br>
            <div class="row">
                
                <div class="col-sm-12">
                    <label>Video</label>
                    <input type="file" name="videos_file" class="form-control">
                </div>
               </div>
               <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Video Decription</label>
        			<input type="text" name="videos_descr" class="form-control" placeholder="Department decription">
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