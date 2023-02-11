<?php include 'header.php'; 

if(isset($_POST['btn']))
{
   $exp_name=$_POST['exp_name'];
   $exp_cls=$_POST['exp_cls'];
   $exp_sub=$_POST['exp_sub'];
   $exp_dept=$_POST['exp_dept'];
   $exp_file=$_POST['exp_file'];
   $exp_descr=$_POST['exp_descr'];

   $data=[
        'exp_name'=>$exp_name,
        'exp_cls'=>$exp_cls,
        'exp_sub'=>$exp_sub,
        'exp_dept'=>$exp_dept,
        'exp_file'=>$exp_file,
        'exp_descr'=>$exp_descr,    
        ];

  $ref='exp_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="experiment.php";
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
      <form action="experiment.php" method="POST">
            <br>
            <h4>Add Experiment</h4>
            <br>
            <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-12">
                    <label>Experiment Name</label>
                    <input type="text" name="exp_name" class="form-control" placeholder="Experiment name">
                </div>
               </div>
               <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Class Name</label>
                    <input type="text" name="exp_cls" class="form-control" placeholder="Class name">
                </div>
               </div>
               <br>
               <div class="row">
                <div class="col-sm-12">
                    <label>Subject Name</label>
                    <input type="text" name="exp_sub" class="form-control" placeholder="Subject name">
                </div>
               </div>
               <br>
               <div class="row">
                <div class="col-sm-12">
                    <label>Department Name</label>
                    <input type="text" name="exp_dept" class="form-control" placeholder="Department name">
                </div>
               </div>
               <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Select Experiment / WordFile /Pdf </label>
                    <input type="file" name="exp_file" class="form-control">
                </div>
               </div>
               <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Experiment Decription</label>
                    <input type="text" name="exp_descr" class="form-control" placeholder="Experiment decription">
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