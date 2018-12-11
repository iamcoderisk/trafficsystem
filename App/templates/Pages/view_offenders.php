<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Committed BY</th>
      <th scope="col">Offense Committed</th>
    
      <th scope="col">Code</th>
        <th scope="col">Penalty</th>
        <th scope="col">Category</th>
        <th scope="col">License Number</th>
        <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
      
        <?php foreach($offenses as $offense){

        ?>
         <tr> 
      <th scope="row"> <?php echo $offense->c_id; ?></th>
      <td><?php echo $offense->firstname." ".$offense->lastname; ?></td>
      <td><?php echo $offense->type; ?></td>
       <td><?php echo $offense->code; ?></td>
       <td><?php echo "N".number_format($offense->penalty,2); ?></td>
       <td><?php echo $offense->category; ?></td>
       <td><?php echo $offense->license_number; ?></td>
       <td><a href="/dashboard/view_offenders?c_id=<?php echo $offense->c_id; ?>" class="btn btn-primary">Delete</a></td>
            

    </tr>
      <?php } ?>
    
   
  </tbody>
</table>
        </div>
    </div>
</div>