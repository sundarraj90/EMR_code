<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dr.Carrot</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/app_logo.png  ') }}">
    <!-- Jquery CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #e2e2e2;
        }

        .row {
            background: white;
            border-radius: 15px;
            box-shadow: 1px 1px 10px rgba(52, 120, 179, 0.867);
            /* margin:auto;  */
        }

        img {
            border-radius: 15px;
            /* border-top-left-radius: 30px;
        border-bottom-left-radius: 30px; */
        }

        /* .btn1{
        border: none;
        outline: none;
        height:50px;
        width: 100%;
        background-color: #207DFF;
        color: white;
        border-radius: 4px;
        font-weight: bold;
        
      }
      .btn1:hover,.btn1:focus-visible {
        cursor: pointer;
        background: white;
        border: 2px solid  #207DFF;
        color: #207DFF;
      } */
        button {
            text-align: center;
            /* border: none; */
            /* outline: none; */
            height: 50px;
            width: 100%;
            padding: 12px;
            margin: 10px;
            border-radius: 6px;
            color: #207DFF;
            border: 2px solid #207DFF;
            cursor: pointer;
            background: transparent;
            /* background-image: url('https://web.archive.org/web/20160312084140im_/http://splatoon.nintendo.com/assets/img/nav-bg-fill-blue.png?1443460871'); */
            background-image: url({{ asset('assets/images/animations/water-wave-primary.png') }});
            background-repeat: repeat-x;
            background-position: 0 -100%;
            transition: 1.5s ease;
            font-weight: bold;
        }

        button:hover {
            color: #ffff;
            background-position: center;
        }

        button:nth-child(1) {
            filter: hue-rotate(0deg);
        }

        .login {
            color: rgba(1, 12, 14, 0.867);
        }

        /* style icon */
        .logo {
            position: relative;
            padding: 10px;
        }

        .pot {
            position: absolute;
            -webkit-animation: linear initial;
            -webkit-animation-name: run;
            -webkit-animation-duration: 2s;
        }

        @-webkit-keyframes run {
            0% {
                left: calc(100% - 100px);
            }

            50% {
                left: 70;
            }

            100% {
                left: 0;
            }
        }


        .input-wrapper {
            position: relative;
        }

        input {
            border: 1px solid gray;
            border-radius: 6px;
            /* position: relative; */
            width: 200px;
            margin: 10px;
            line-height: 6ex;
        }

        label {
            position: absolute;
            top: 0.2ex;
            z-index: 1;
            left: 2em;
            background-color: white;
            padding: 0 5px;
            color: #4d4d4d;
        }

        .input-icon {
            margin-top: -56px;
            float: right;
            height: 18px;
            width: 19px;
            cursor: pointer;
            filter: grayscale(100%);

        }

        .form-control:focus {
            border-color: #207DFF;
            box-shadow: 0px 1px 1px rgba(4, 1, 16, 0.075) inset, 0px 0px 2px #207DFF;

            /* .control-label {
                color: #207DFF;
            } */
        }

        /* .form-control:focus, */
        .form-control:focus~.control-label {
            color: #207DFF;
        }
    </style>
</head>

<body>
    <section class="Form my-5 mx-md-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/auth/sign_in_logo.png') }}" class="img-fluid logo pot"
                        alt="">
                    <img src="{{ asset('assets/images/auth/sign-in.png') }}" class="img-fluid sign" height="auto"
                        alt="hi">
                </div>
                <div class="col-12 col-lg-6 px-5 pt-md-5">
                    <h1 class="font-wight-bold py-md-3 login">Sign in</h1>
                    <form action="{{ route('dashboard') }}" class="mt-md-5">
                        <div class="form-row">
                            <div class="col-lg-12">
                                <label class="control-label" for="email">User Id</label>
                                <input type="email" placeholder="test.sample@testmail.com" autofocus id="email"
                                    class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <label for="email">Password</label>
                                <input type="password" placeholder="********" id="password"
                                    class="form-control my-3 p-3">
                                <i class="fa fa-fw fa-eye field_icon input-icon password-toggle"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <a href="#" class="float-right">Forget Password?</a>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <button class="btn1 mt-3 mb-3">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $(".password-toggle").on('click', function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
