<!-- Header Part Start -->
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<!-- Header Part End -->


<div class="row">
    <div class="col-lg-8 m-auto bg-success">
        <div class="card bg-success mb-3">
            <div class="card-header text-white text-center">
                Header
            </div>
            <div class="card-body text-success">
                <!-- form start -->
                <form action="result.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label text-white">Email</label>
                        <input type="email" class="form-control" name="your_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" class="form-control" name="your_password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>


<!-- Footer Part Start -->
<?php
include 'includes/footer.php';
?>
<!-- Footer Part End -->