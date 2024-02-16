<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    <link rel="stylesheet" href="{{ 'assets/bootstrap/css/bootstrap.css' }}">
    <style>
        main{
            height: 100vh;
            background-color: rgba(240, 235, 235, 0.897);
        }

        a{
            text-decoration: none;
        }

        @media (min-width: 800px){
            
            .card{
                background-color: rgb(252, 246, 246);
                width: 25% !important;
            }
        }

        #pLogin{
            position: absolute;
        }

        .nHide{
            display: none;
        }

        .down{
            z-index: -1;
        }

        .up{
            z-index: 1;
        }

        .animation-change{
            animation: 3s changeOut ease-in;
        }

        .animation-changeIn{
            animation: 3s changeIn ease-in;
        }

        @keyframes changeOut {
            0% {
                transform: translateX(0);
                z-index: 1;
            }
            50% {
                transform: translateX(-200px);
            }
            100% {
                transform: translateX(0);
                z-index: -1;
                opacity: 0;
            }
        }

        @keyframes changeIn {
            0% {
                transform: translateX(0);
                z-index: -1;
            }
            50% {
                transform: translateX(200px);
                z-index: 1;
            }
            100% {
                transform: translateX(0);
                z-index: 1;
            }
        }

    </style>
</head>
<body>
    
    <main class="d-flex justify-content-center align-items-center">
        {{-- Login --}}
        <div class="card w-75 h-75 m-2 shadow absolute" id="pLogin">
            <div class="card-header text-center">
                <h4>Welcome, Friend . . .</h4>
            </div>
            <div class="card-body">
                <form action="{{ '/login' }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Your Password">
                    </div>

                    <button type="submit" class="btn btn-outline-primary w-100">
                        Login
                    </button>

                    <label class="mt-2">
                        don't have an account? 
                        <a target="_blank" rel="noopener noreferrer">
                            <button type="button" id="register" style="background: transparent; border: none;">Register</button>
                        </a>
                    </label>
                    

                </form>
            </div>
        </div>

        {{-- Register --}}
        <div class="card w-75 h-75 m-2 shadow down" id="pRegister">
            <div class="card-header text-center">
                <h4>Come Join Us, Friend . . .</h4>
            </div>
            <div class="card-body">
                <form action=" {{ '/regist' }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Your Password">
                    </div>

                    <button type="submit" class="btn btn-outline-primary w-100">
                        Submit
                    </button>

                    <label class="mt-2">
                        have an account? 
                        <a target="_blank" rel="noopener noreferrer">
                            <button type="button" id="login" style="background: transparent; border: none;">login</button>
                        </a>
                    </label>
                    

                </form>
            </div>
        </div>

    </main>

    <script src="{{ 'assets/jquery.js' }}"></script>
    <script src="{{ 'assets/bootstrap/js/bootstrap.js' }}"></script>


    <script>
        $('#register').on('click', function() {
            $('#pLogin').addClass('animation-change');
            
            // $('#pRegister').removeClass('nHide');
            $('#pRegister').removeClass('down');
            $('#pRegister').addClass('animation-changeIn');


            console.log("Register Click");
        })

        $('#login').on('click', function() {
            $('#pLogin').removeClass('animation-change');
            $('#pLogin').addClass('animation-changeIn ');
            
            
            $('#pRegister').removeClass('animation-changeIn');
            $('#pRegister').addClass('animation-change down');
            // $('#pRegister').addClass('down');


            console.log("Register Click");
        })
    </script>

</body>
</html>