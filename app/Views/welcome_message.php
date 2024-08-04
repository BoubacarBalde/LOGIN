<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoginAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php $validation = \Config\Services::validation()?>
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="text-white">Secure Login system using CodeIgniter4 with mySql database</h5>
                <h6><?php echo session()->get('error'); ?></h6>
                <h6><?php echo session()->get('success'); ?></h6>
            </div>

            <div class="card-body shadow-sm">
                <div class="container h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100 my-4">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="<?php echo base_url('connexion.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1">
                            <form method="POST" action="<?php echo site_url('/'); ?>">
                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <p class="lead fw-normal">Sign in with</p>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <div class="text-center fw-bold mx-3 mb-0">Or</div>
                                </div>

                                <!-- Input email -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" <?php echo $validation->getError("username") == true ? 'is-invalid' : null ?> value="<?php echo old('username')?>" />
                                    <label for="username" class="form-label form-control-lg">Username</label>
                                    <?php if($validation->getError('username')) {?>
                                        <div class="invalid-feedback">
                                            <?php echo $validation->getError('username') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <!-- Input Password -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" <?php echo $validation->getError("password") == true ? 'is-invalid' : null ?> value="<?php echo old('password')?>" />
                                    <label for="password" class="form-label form-control-lg">Password</label>
                                    <?php if($validation->getError('username')) {?>
                                        <div class="invalid-feedback">
                                            <?php echo $validation->getError('password') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" id="form2Example2">
                                        <label class="form-check-label" for="form2Example2">Remember me</label>
                                    </div>

                                    <a href="#" class="text-body">Forgot password?</a>
                                </div>

                                <div class="text-center text-lg-start my-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-primary">
                <div class="d-flex flex-column flex-md-row text-center justify-content-between">
                    <div class="text-white">
                        <h5>Copyright 2024. All rights reserved</h5>
                    </div>
                    <div>
                        <a href="#" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="text-white me-4">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
