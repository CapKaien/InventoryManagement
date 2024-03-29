<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image: linear-gradient(to right, #CA5B6F, #B01041);
        background-repeat: no-repeat;
    }

    input,
    textarea {
        background-color: #F3E5F5;
        border-radius: 50px !important;
        padding: 12px 15px 12px 15px !important;
        width: 100%;
        box-sizing: border-box;
        border: none !important;
        border: 1px solid #F3E5F5 !important;
        font-size: 16px !important;
        color: #000 !important;
        font-weight: 400;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #CA5B6F !important;
        outline-width: 0;
        font-weight: 400;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    .card {
        border-radius: 0;
        border: none;
    }

    .card1 {
        width: 50%;
        padding: 40px 30px 10px 30px;
    }

    .card2 {
        width: 50%;
        background-image: linear-gradient(to right, #B01041, #CA5B6F);
    }

    #logo {
        width: 70px;
        height: 60px;
    }

    .heading {
        margin-bottom: 60px !important;
    }

    ::placeholder {
        color: #000 !important;
        opacity: 1;
    }

    :-ms-input-placeholder {
        color: #000 !important;
    }

    ::-ms-input-placeholder {
        color: #000 !important;
    }

    .form-control-label {
        font-size: 12px;
        margin-left: 15px;
    }

    .msg-info {
        padding-left: 15px;
        margin-bottom: 30px;
    }

    .btn-color {
        border-radius: 50px;
        color: #fff;
        background-image: linear-gradient(to right, #B01041, #CA5B6F);
        padding: 15px;
        cursor: pointer;
        border: none !important;
        margin-top: 40px;
    }

    .btn-color:hover {
        color: #fff;
        background-image: linear-gradient(to right, #CA5B6F, #B01041);
    }

    .btn-white {
        border-radius: 50px;
        color: #CA5B6F;
        background-color: #fff;
        padding: 8px 40px;
        cursor: pointer;
        border: 2px solid #CA5B6F !important;
    }

    .btn-white:hover {
        color: #fff;
        background-image: linear-gradient(to right, #B01041, #CA5B6F);
    }

    a {
        color: #000;
    }

    a:hover {
        color: #000;
    }

    .bottom {
        width: 100%;
        margin-top: 50px !important;
    }

    .sm-text {
        font-size: 15px;
    }

    @media screen and (max-width: 992px) {
        .card1 {
            width: 100%;
            padding: 40px 30px 10px 30px;
        }

        .card2 {
            width: 100%;
        }

        .right {
            margin-top: 100px !important;
            margin-bottom: 100px !important;
        }
    }

    @media screen and (max-width: 768px) {
        .container {
            padding: 10px !important;
        }

        .card2 {
            padding: 50px;
        }

        .right {
            margin-top: 50px !important;
            margin-bottom: 50px !important;
        }
    }

    .create-new-button {
        margin-left: 10px;
    }
</style>

<body>

    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3">
                                <img id="logo" src="https://i.imgur.com/PSXxjNY.png">
                            </div>
                            <h3 class="mb-5 text-center heading">We are Tidi</h3>

                            <h6 class="msg-info">Please login to your account</h6>

                            <div class="form-group">
                                <label class="form-control-label text-muted ">Username</label>
                                <input type="text" id="email" name="email" placeholder="Username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
                            </div>

                            <div class="row justify-content-center my-3 px-3">
                            <a href="index.php" class="btn-block btn-color text-center" style="text-decoration: none;">Login</a>

                            </div>

                            <div class="row justify-content-center my-2">
                                <a href="#"><small class="text-muted">Forgot Password?</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="#" class="sm-text mx-auto mb-3 ">Don't have an account?<button class="btn btn-white ml-2 create-new-button">Create new</button></p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">We are more than just a company</h3>
                        <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
