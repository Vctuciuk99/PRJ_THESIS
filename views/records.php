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
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th></th>
         <th>ID</th>
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
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['teacher_id']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>
      <td><?php echo $data['time_from']??''; ?></td>
      <td><?php echo $data['time_to']??''; ?></td> 
      <td><?php echo $data['output']??''; ?></td>
      <td><?php echo $data['details']??''; ?></td>  
      <td><?php echo $data['verification']??''; ?></td>     
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
</div>
</div>
</div>
</body>
</html>