<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-bordered">
  <thead>
    <tr>
 
      <th scope="col">Car Name</th>
      <th scope="col">Engine Number</th>
      <th scope="col">Plate Number</th>
      <th scope="col">Model</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
      
     
         <tr> 

      <td><?php echo $allcars->car_name; ?></td>
      <td><?php echo $allcars->car_engine_number; ?></td>
      <td><?php echo $allcars->car_plate_number; ?></td>
      <td><?php echo $allcars->car_model; ?></td>
      <td><a href="?action=delete&c_id=<?php echo $allcars->license_number; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
     
    
   
  </tbody>
</table>
        </div>
    </div>
</div>