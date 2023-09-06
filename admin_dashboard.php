<?php

require_once "config.php";



if(!isset($_SESSION['admin_id'])) {
    header('location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashbpard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
</head>
<body>


    <div class="container">
        <div class="row mb-5">
            <div class="col md-6">
                <h2>Register Member</h2>
                <form action="register_member.php" method="POST" enctype="multipart/form-data">
                    First Name: <input class="form-control" type="text" name="first_name"><br>
                    Last Name: <input class="form-control" type="text" name="last_name"><br>
                    Email: <input class="form-control" type="email" name="email"><br>
                    Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                    
                    Training Plan:
                    <select class="form-control" name="training_plan_id">
                        <option value="" disabled selected>Training Plan</option>
                        <option value="2">12 sessions plan</option>
                        <option value="3">30 sessions plan</option>
                        <?php foreach($training_plans as $plan): ?>
                             <option value="<?=$plan['plan_id'] ?>">
                              <?= $plan['name'] ?>
                             </option>
                            <?php endforeach; ?>
                    </select><br>

                    <input type="hidden" name="photo_path" id="photoPathInput">
                    
                    <div id="dropzone-upload" class="dropzone"></div>
                    
                    <input class="btn btn-primary mt-3" type="submit" value="Register Member">
                </form>
             </div>
            </div>
         </div>
</body>
</html>