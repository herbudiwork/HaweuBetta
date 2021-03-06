<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="modules/css/message_modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Research</title>
    <link rel="icon" href="assets/image/title_logo.png" type="image/icon type">
</head>

<body>
    <section id="signup">
        <div class="container-fluid">
            <div class="card o-hidden border-0 mt-2 mx-auto ">
                <div class="card-body p-0">
                    <div class="row main-content">
                        <div class="col-md-6 text-center company__info">
                            <span class="holder">
                                <img src="assets/image/sign-up-image.jpg">
                            </span>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 login_form ">
                            <div class="form-title mb-4">
                                <h3>Sign Up</h3>
                            </div>
                            <form action="modules/encrypt.php" id="formSignUp" class="form-group" enctype="multipart/form-data" method="POST">
                                <div class="row mb-2">
                                    <input type="text" name="username" id="Username" class="form__input" placeholder="Username" required>
                                    <span class="fa fa-user icon"></span>
                                </div>
                                <div class="row mb-2 has-danger">
                                    <input type="password" name="password" id="Password1" class="form__input" placeholder="Password" required>
                                    <span class="fa fa-lock icon"></span>
                                    <span class="fa fa-eye togglePassword" id="togglePassword"></span>

                                    <div id="passwordRules" class="password-rule">
                                        <small>
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <span class="eight-character"><i class="fa fa-ban text-danger  " aria-hidden="true"></i></span>
                                                    &nbsp; Must have a minimum 8 character</li>
                                                <li class="">
                                                    <span class="upper-case"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must have at least 1 uppercase</li>
                                                <li class="">
                                                    <span class="lower-case"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must include at least 1 lowercase</li>
                                                <li class="">
                                                    <span class="one-number"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must include at least 1 number</li>

                                            </ul>
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <input type="password" name="confirmPassword" id="Password2" class="form__input" placeholder="Confirm Password" required>
                                    <span class="fa fa-lock icon"></span>
                                    <span class="fa fa-eye togglePassword" id="toggleConfirmPassword"></span>
                                    <div class="hide password-not-match mt-1" id="error-confirmpassword">
                                        <small><span class="">
                                                <i class="fa fa-ban text-danger  " aria-hidden="true"></i> &nbsp; Password and confirm password does not match!</span></small>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <span class="fa fa-address-card icon"></span>
                                    <input type="text" name="name" id="Name" class="form__input" placeholder="Name" required>
                                </div>


                                <div class="row mt-4 text-center">
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <div class="preview-zone hidden">
                                                <div class="box box-solid">

                                                    <div class="box-body">

                                                    </div>
                                                    <div class="">
                                                        <button id="closePreview" type="button" class="btn btn-danger btn-sm remove-preview mt-3">
                                                            Close Preview
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropzone-wrapper" id="selectFile">
                                                <div class="dropzone-desc">
                                                    <i class="fa fa-download"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" id="file1" name="fileToUpload" accept=" .png, .jpg, .jpeg" class="dropzone">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <input type="submit" value="Submit" class="btn-form" id="btn-submit" disabled>
                                    <span class="login_form">
                                        <a href="#" id="to-sign-in">I am already member</a>
                                        <a href="#" id="up-to-forgot-password">Forgot Password?</a>
                                    </span>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="sign-in">
        <div class=" container-fluid">
            <div class="card o-hidden border-0 mt-2 mx-auto ">
                <div class="card-body p-0">
                    <div class="row main-content">
                        <div class="col-md-6 text-center company__info">
                            <span class="holder">
                                <img src="assets/image/sign-in-image.jpg">
                            </span>
                        </div>

                        <div class="col-md-6 col-xs-12 col-sm-12 login_form ">

                            <div class="form-title mb-4">
                                <h3>Sign In</h3>
                            </div>

                            <form action="modules/decrypt.php" control="" class="form-group" enctype="multipart/form-data" method="POST">
                                <div class="row mb-2">
                                    <span class="fa fa-user icon"></span>
                                    <input type="text" name="username" id="Username" class="form__input" placeholder="Username">
                                </div>

                                <div class="row mt-4 text-center">
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <div class="preview-zone hidden">
                                                <div class="box box-solid">

                                                    <div class="box-body">

                                                    </div>
                                                    <div class="">
                                                        <button id="closePreview2" type="button" class="btn btn-danger btn-sm remove-preview mt-3">
                                                            Close Preview
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropzone-wrapper" id="selectFile2">
                                                <div class="dropzone-desc">
                                                    <i class="fa fa-download"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" id="file2" name="fileToUpload" class="dropzone" accept=" .png, .jpg, .jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <input type="submit" value="Submit" class="btn-form">
                                    <span class="login_form">
                                        <a href="#" id="to-sign-up">Create an account!</a>
                                        <a href="#" id="in-to-forgot-password">Forgot Password?</a>
                                    </span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="forgot-password">
        <div class=" container-fluid">
            <div class="card o-hidden border-0 mt-2 mx-auto ">
                <div class="card-body p-0">
                    <div class="row main-content">
                        <div class="col-md-6 text-center company__info">
                            <span class="holder">
                                <img src="assets/image/sign-in-image.jpg">
                            </span>
                        </div>

                        <div class="col-md-6 col-xs-12 col-sm-12 login_form ">

                            <div class="form-title mb-4">
                                <h3>Forgot Password</h3>
                            </div>

                            <form action="modules/reset_password.php" id="formResetPassword" class="form-group" enctype="multipart/form-data" method="POST">
                                <div class="row mb-2">
                                    <span class="fa fa-user icon"></span>
                                    <input type="text" name="username" id="Username2" class="form__input" placeholder="Username">
                                </div>

                                <div class="row mb-2 has-danger">
                                    <input type="password" name="password" id="Password_reset" class="form__input" placeholder="Password" required>
                                    <span class="fa fa-lock icon"></span>
                                    <span class="fa fa-eye togglePassword" id="togglePassword_reset"></span>

                                    <div id="passwordRules_reset" class="password-rule">
                                        <small>
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <span class="eight-character"><i class="fa fa-ban text-danger  " aria-hidden="true"></i></span>
                                                    &nbsp; Must have a minimum 8 character</li>
                                                <li class="">
                                                    <span class="upper-case"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must have at least 1 uppercase</li>
                                                <li class="">
                                                    <span class="lower-case"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must include at least 1 lowercase</li>
                                                <li class="">
                                                    <span class="one-number"><i class="fa fa-ban text-danger " aria-hidden="true"></i></span>
                                                    &nbsp; Must include at least 1 number</li>
                                            </ul>
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <input type="password" name="confirmPassword" id="confirmPassword_reset" class="form__input" placeholder="Confirm Password" required>
                                    <span class="fa fa-lock icon"></span>
                                    <span class="fa fa-eye togglePassword" id="toggleConfirmPassword_reset"></span>
                                    <div class="hide password-not-match mt-1" id="error-confirmpassword-reset">
                                        <small><span class="">
                                                <i class="fa fa-ban text-danger  " aria-hidden="true"></i> &nbsp; Password and confirm password does not match!</span></small>
                                    </div>
                                </div>
                                <div class="row mt-4 text-center">
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <div class="preview-zone hidden">
                                                <div class="box box-solid">

                                                    <div class="box-body">

                                                    </div>
                                                    <div class="">
                                                        <button id="closePreview3" type="button" class="btn btn-danger btn-sm remove-preview mt-3">
                                                            Close Preview
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropzone-wrapper" id="selectFile3">
                                                <div class="dropzone-desc">
                                                    <i class="fa fa-download"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" id="file3" name="fileToUpload" class="dropzone" accept=" .png, .jpg, .jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <input type="submit" value="Reset Password" class="btn-form" id="btn-submit2" disabled>
                                    <span class="login_form">
                                        <a href="#" id="back-to-sign-in">Back to Login!</a>
                                    </span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalSuccess">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modalbox success center animate">
                <div class="icon">
                    <span class="fa fa-check"></span>
                </div>
                <!--/.icon-->
                <h1 class="mt-3">Success!</h1>
                <p>Your account has been created!</p>
                <button type="button" class="btn" data-dismiss="modal" onclick="javascript:window.location='generatedpassword.php?username=<?= $_GET['username']; ?>'">Ok</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFailed">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modalbox error center animate">
                <div class="icon">
                    <span class="fa fa-warning"></span>
                </div>
                <!--/.icon-->
                <h1 class="mt-3">Failed!</h1>
                <p><?= $_GET['message']; ?></p>
                <button type="button" class="btn" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
    <!--/.container-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="modules/js/draganddrop.js"></script>
    <script src="modules/js/function.js"></script>
    <script src="modules/js/validation_password.js"></script>
    <script src="modules/js/validation_password_reset.js"></script>

    <script>
        <?php if (isset($_GET['message'])) { ?>
            <?php if ($_GET['message'] == 'success') { ?>
                $('#modalSuccess').modal({
                    backdrop: 'static',
                    keyboard: false
                }, 'show');
            <?php } else { ?>
                $('#modalFailed').modal('show');
            <?php } ?>
        <?php } ?>
    </script>
</body>

</html>