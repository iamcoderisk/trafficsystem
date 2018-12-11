<div class="container-fluid shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
           <h3>Offenses Committed </h3>
           <hr>
               <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">License Number</th>
      <th scope="col">Full Name</th>
      <th scope="col">Address</th>
      <th scope="col">Offense</th>
      <th scope="col">Penalty</th>
      <th scope="col">Car Brand</th>
      <th scope="col">Offend Status</th>
      <th scope="col">View Car Info.</th>

    </tr>
  </thead>
  <tbody>
      
        <?php foreach($offenses as $offense){

        ?>
         <tr> 
      <th scope="row"> <?php echo $offense->of_id; ?></th>
      <td><?php echo $offense->license_number; ?></td>
      <td><?php echo $offense->firstname." ".$offense->lastname; ?></td>
      <td><?php echo $offense->address; ?></td>
      <td><?php echo $offense->type; ?></td>
      <td><?php echo $offense->penalty; ?></td>
      <td><?php echo $offense->car_name; ?></td>
      <td><?php echo $offense->offense_status; ?></td>
      <td><a href="/dashboard/view_cars?id=<?php echo $offense->license_number; ?>">View Info</a></td>
      
            </tr>
      <?php } ?>
    
   
  </tbody>
</table>
          
        </div>
    </div>
</div>