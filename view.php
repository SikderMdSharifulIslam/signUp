<!-- Header Part Start -->
<?php
include 'includes/header.php';
include 'includes/navbar.php';

// Database Connection
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "sign_up");
$db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);

$select_query = "SELECT id,full_name,email_address FROM users";
$data_from_db = mysqli_query($db_connect, $select_query);
?>
<!-- Header Part End -->


<div class="row">
    <div class="col-lg-11 m-auto bg-success p-0">
        <div class="card bg-success">
            <div class="card-header text-white text-center">
                User List
            </div>
            <div class="card-body">
                <!-- User Table -->
                <table class="table table-striped">
                    <tbody>
                        <?php
                            foreach($data_from_db as $user_value)
                            {
                                // print_r($user_value);
                            // }
                        ?>
                        <tr>
                            <th>
                                <?php
                                    print_r($user_value['id']);
                                ?>
                            </th>
                            <td>
                            <?php
                                    print_r($user_value['full_name']);
                                ?>
                            </td>
                            <td>
                            <?php
                                    print_r($user_value['email_address']);
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
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