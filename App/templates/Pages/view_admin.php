<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Admin ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Delete</th>
 

    </tr>
  </thead>
  <tbody>
      
        <?php foreach($admins as $admin){

        ?>
         <tr> 
      <th scope="row"> <?php echo $admin->id; ?></th>
      <td><?php echo $admin->full_name; ?></td>
      <td><?php echo $admin->email; ?></td>
      <td><?php echo $admin->role; ?></td>
      <td><a href="?action=delete&id=<?php echo $admin->id; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
      <?php } ?>
    
   
  </tbody>
</table>
        </div>
    </div>
</div>