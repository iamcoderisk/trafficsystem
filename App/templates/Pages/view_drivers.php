<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>View All Offenders</h3>
            <hr>
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Car Name</th>
       <?php if($alladmins->role=='super admin') { ?>

      <th scope="col">Add Offense</th>
       <?php }?>
      <th scope="col">Delete Driver</th>

    </tr>
  </thead>
  <tbody>
      
        <?php foreach($alldrivers as $driver){

        ?>
         <tr> 
      <th scope="row"> <?php echo $driver->id; ?></th>
      <td><?php echo $driver->firstname; ?></td>
      <td><?php echo $driver->lastname; ?></td>
      <td><?php echo $driver->email; ?></td>
      <td><?php echo $driver->car_name; ?></td>
         <?php if($alladmins->role=='super admin') { ?>

      <td><a href="/dashboard/add_committed_offense?driver_id=<?php echo $driver->driver_id; ?>" class="btn btn-primary">Add Offense</a></td>
         <?php }?>
      <td><a href="?d_id=<?php echo $driver->driver_id; ?>" class="btn btn-danger">Delete</a></td>
            
    </tr>
      <?php } ?>
    
   
  </tbody>
</table>
        </div>
    </div>
</div>