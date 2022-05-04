<?php include '../php/retrieve_records.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP PARA SA TABLE-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../js/table2excel.js"></script>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="diwar-report">
       <thead><tr><th></th>
         <th>TEACHER_ID</th>
         <th>EMAIL</th>
         <th>NAME</th>
         <th>DATE</th>
         <th>TIME_FROM</th>
         <th>TIME_TO</th>
         <th>OUTPUT</th>
         <th>DETAILS</th>
         <th>VERIFICATION</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $rows=1;
      foreach($fetchData as $data){
    ?>
        <!-- PANGALAN NG COLUMN SA DB -->
      <tr>
      <td><?php echo $rows; ?></td>
      <td><?php echo $data['Employee_no']??''; ?></td>
      <td><?php echo $data['Email']??''; ?></td>
      <td><?php echo $data['Name']??''; ?></td>
      <td><?php echo $data['Date']??''; ?></td>
      <td><?php echo $data['Time_from']??''; ?></td>
      <td><?php echo $data['Time_to']??''; ?></td> 
      <td><?php echo $data['Output']??''; ?></td>
      <td><?php echo $data['Details']??''; ?></td>  
      <td><?php echo $data['Verification']??''; ?></td>     
     </tr>
     <?php
      $rows++;}}else{ ?>
      <tr>
        <td colspan="100">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
   <a href="./acc_home.php">BACK</a>
   <button id="downloadexcel">DOWNLOAD AS EXCEL FILE</button>
</div>
</div>
  </div>
  <script>
    document.getElementById('downloadexcel').addEventListener('click', function() {
      var table2Excel = new Table2Excel();
        table2Excel.export(document.querySelectorAll("#diwar-report"));
    })
  </script>
</body>
</html>