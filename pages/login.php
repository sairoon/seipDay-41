<?php include 'include/header.php' ?>
<?php
if (isset($_SESSION['id'])){
    header('Location: route.php?page=home');
}
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card text-bg-dark shadow">
                    <div class="card-header "></div>
                    <div class="card-body">
                        <form action="?page=login-submit" method="post" >
                            <h3 class="text-center fw-bolder">LOGIN</h3>
                            <hr>
                            <div class="text-center mb-3">
                                <span class="text-danger fw-bolder"><?php echo isset($message) ? $message : ''?></span>
                            </div>
                            <div class="row mt-2">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Email" name="email"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Password" name="password"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Log In"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php' ?>
