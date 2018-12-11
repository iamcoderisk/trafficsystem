<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Create Offense List</h2>
           
            <form method="post" action="" class="form-group">
                <div class="form-group">
                    <label>Offense  Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" required>
                </div>
                 <div class="form-group">
                    <label>Offense Code</label>
                    <input type="text" name="code" class="form-control" placeholder="Code" required>
                </div>
                 <div class="form-group">
                    <label>Offense Point(s)</label>
                    <input type="text" name="points" class="form-control" placeholder="Point" required>
                </div>
                 <div class="form-group">
                    <label>Offense Penalty</label>
                    <input type="text" name="penalty" class="form-control" placeholder="Penalty" required>
                </div>
                 <div class="form-group">
                    <label>Offense Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Category" required>
                </div>

 <div class="form-group">
                    <label>Offense Status</label>
                <select name="status" class="form-control">
                    <option selected>Select offense status</option>
                    <option>Implemented</option>
                    <option>Not yet Implemented</option>
                </select>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">submit</button>
                </div>
               
            </form>
        </div>
    </div>
</div>