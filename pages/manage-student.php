<?php include 'include/header.php' ?>
<?php
if (!isset($_SESSION['id'])){
    header('Location: route.php?page=login');
}
?>
<!--<h1 class="text-center mt-2 fw-bolder">Manage Student</h1>-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3 class="fw-bolder text-center">Manage Student</h3>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $index => $student) { ?>
                                <tr>
                                    <td><?php echo ++$index?></td>
                                    <td><?php echo $student['name']?></td>
                                    <td><?php echo $student['email']?></td>
                                    <td><?php echo $student['mobile']?></td>
                                    <td>
                                        <img src="<?php echo $student['image']?>" alt="" class="img-fluid" style="height: 80px; width: 80px"/>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>
