<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <h2>Add Car Information</h2>
            <?php 

            //  foreach($errors as $error){
            //     echo $error."<br>";
            // }

            ?>
            <form method="post" action="" class="form-group">
                <div class="form-group">
                    <label>Car Name</label>
                    <input type="text" name="car_name" class="form-control" placeholder="Car Name" required>
                </div>
             

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">submit</button>
                </div>
               
            </form>
        </div>
    </div>
</div>