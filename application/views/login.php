<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->load->view("_partials/head.php") ?>
    
</head>
<body>

    <section class="kosong"></section>
    <section class="login text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('assets/img/user.png')?>" height="200px" width="200px">
                    <h2 class="text-center">LOGIN</h2>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <form action="/action_page.php">
                            <div class="form-group col-sm-6 col-sm-offset-3">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group col-sm-6 col-sm-offset-3">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-group form-check col-sm-6 col-sm-offset-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("_partials/js.php") ?>
    
</body>
</html>