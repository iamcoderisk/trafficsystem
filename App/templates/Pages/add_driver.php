<div class="container-fluid shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Offender Bio Data</h2>
            <?php 

            //  foreach($errors as $error){
            //     echo $error."<br>";
            // }

            ?>
            <form method="post" action="" class="form-group">
                <h2>Bio Date</h2>
                 <div class="form-group">
                    <label>License Number</label>
                    <input type="text" name="license_number" class="form-control" placeholder="License Number" required>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                </div>
                 <div class="form-group">
                    <label>Last Name </label>
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                </div>
                 <div class="form-group">
                    <label>State of Origin</label>
                    <input type="text" name="sate_of_origin" class="form-control" placeholder="State of Origin" required>
                </div>
                 <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="text" name="date_of_birth" class="form-control" placeholder="Date of Birth" required>
                </div>
                <div class="form-group">
                    <select name="gender" class="form-control">
                        <option selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                  <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                    <h2>Car Details</h2>
                    <div class="form-group">
                    <label>Select Car</label>
                    <select name="car_id" class="form-control">
                        <option selected>Assign Car</option>
                        <?php foreach($allcars as $car){
                            ?>
                        <option value="<?php echo $car->id;?>">
                            <?php echo $car->car_name; ?>
                        </option>
                        <?php
                        }?>
                    </select>
                </div>
                 <div class="form-group">
                    <input type="text" name="car_model" class="form-control" placeholder="Car Model">
                </div>
                <div class="form-group">
                    <input type="text" name="car_plate_number" class="form-control" placeholder="Car Plate Number">
                </div>
                <div class="form-group">
                    <input type="text" name="car_engine_number" class="form-control" placeholder="Car Engine Number">
                </div>
                <h2>Add Offense</h2>
                     <div class="form-group">
               <select name="offense" class="form-control">
                   <option selected>Offense</option>
                   <?php foreach($offenses as $offense){ ?>


                    <option value="<?php echo $offense->of_id; ?>"><?php echo $offense->type; ?></option>
                   <?php }?>
               </select>
           </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">submit</button>
                </div>
               
            </form>
        </div>
    </div>
</div>