<!-- Header Part Start -->
<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';

$select_query = "SELECT id,full_name,email_address FROM users";
$data_from_db = mysqli_query($db_connect, $select_query);

// count total users
$totalU = mysqli_query($db_connect,"SELECT COUNT(*) as total FROM users");
$totalA = mysqli_fetch_assoc($totalU);
$total_user = $totalA['total'];

?>
<!-- Header Part End -->


<div class="row">
    <div class="col-lg-12 m-auto">
        <div class="alert alert-light">Total User: <?=$total_user?></div>
        <div class="card bg-light mb-3">
            <div class="card-header">User List</div>
            <div class="card-body">
                <!-- User Table -->
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Serial No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $serial_no = 1;
                            foreach($data_from_db as $user_value):
                            
                                // print_r($user_value);
                            // }
                        ?>
                        <tr>
                            <td><?=$serial_no++?></td>
                            <td><?=$user_value['id']?></td>
                            <td><?=$user_value['full_name']?></td>
                            <td><?=$user_value['email_address']?></td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?=$user_value['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
                <!-- User Table -->
            </div>
        </div>
    </div>
</div>


<!-- Footer Part Start -->
<?php
include 'includes/footer.php';
?>
<!-- Footer Part End -->