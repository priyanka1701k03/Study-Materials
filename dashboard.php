<?php include 'header.php'; 

 $ref="syb_tbl/";
    $totalno=$database->getReference($ref)->getSnapshot()->numChildren();
    echo $totalno;


?>
<!--Container Main start-->
<style type="text/css">
    .info1
    {
        display: inline-block;
        margin:2px; 
        padding: 60px;
        padding-right: 80px;
        padding-left: 80px;
        background-color: whitesmoke;
    }
</style>
    <div class="height-100 bg-white">
           <div class="Container">
               <div class="info1">
                   <h1>Info 1</h1>
               </div>
               <div class="info1">
                   <h1>Info 1</h1>
               </div>
               <div class="info1">
                   <h1>Info 1</h1>
               </div>
               <div class="info1">
                   <h1>Info 1</h1>
               </div>
           </div>
    </div>
    <!--Container Main end-->
<?php include 'footer.php'; ?>