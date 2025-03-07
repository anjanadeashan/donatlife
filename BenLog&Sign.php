<html lang="en">

<head>
    <title>Login</title>
    <?php include("./header.php"); ?>
    <link rel="stylesheet" href="Sass/Login/main.css">
</head>

<body style="background-image: url(Images/BGPic.jpg); background-size: cover;" class=" m-0 border-0">

    <?php include("./navigation.php"); ?>

    <script>
    function checkValidate() {
        let re = document.getElementById("repass").value;
        let pw = document.getElementById("pw").value;
        if (pw == "") {
            Swal.fire(
                'Required Field',
                'Enter the password',
                'warning'
            )
            return false;
        }
        if (re == "") {
            Swal.fire(
                'Required Field',
                'Enter the confirm password',
                'warning'
            )
            return false;
        }

        if (re != pw) {
            Swal.fire(
                'Inavlid data',
                'Enterd passwords don\'t match',
                'warning'
            )
            return false;
        }
        return true;
    }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-6 pt-1">
                <div class="card card-img">
                    <img src="Images/LogInPic.png" alt="">
                </div>
            </div>

            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="">

                    <div class="container-form">
                        <!-- Sign Up-->
                        <form action="./database/function.php" onsubmit="return checkValidate()" method="post">
                            <div class="signup">

                                <h2 class="form-title m-0" id="signup">
                                    <div>Don’t have an account? </div>Sign Up Benificiary
                                </h2>
                                <div class="form-holder mt-4">

                                    <div class="input-group flex-nowrap form-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="text" class="input" name="fname" placeholder="Username" id="uname"
                                            required>
                                    </div>

                                    <div class="input-group flex-nowrap form-group col-md-6">
                                        <span class="input-group-text">
                                            <i class="fi fi-bs-at"></i>
                                        </span>
                                        <input type="email" class="input" name="email" placeholder="Email" id="email"
                                            required>
                                    </div>

                                    <div class="input-group flex-nowrap form-group col-md-6">
                                        <span class="input-group-text">
                                            <i class="bi bi-telephone-fill"></i>
                                        </span>
                                        <input type="text" class="input" name="tnum" placeholder="Telephone Number"
                                            id="tnum" required>
                                    </div>

                                    <div class="input-group flex-nowrap form-group col-md-6">
                                        <span class="input-group-text">
                                            <i class="bi bi-shield-lock-fill"></i>
                                        </span>
                                        <input type="password" class="input" name="pw" placeholder="Password" id="pw"
                                            required>
                                    </div>

                                    <div class="input-group flex-nowrap form-group col-md-6">
                                        <span class="input-group-text">
                                            <i class="bi bi-shield-lock-fill"></i>
                                        </span>
                                        <input type="password" class="input" name="repassword"
                                            placeholder="Re-Enter Password" id="repass" required>
                                    </div>

                                </div>
                                <button type="submit" class="submit-btn" name="b_sign_up">Sign Up</button>


                        </form>
                    </div>

                    <!-- Login-->
                    <form action="./database/function.php" method="post">
                        <div class="login slide-up">

                            <div class="center">
                                <h2 class="form-title" id="login">
                                    <div>Alredy have an Account ?</div>Login
                                </h2>
                                <div class="form-holder">
                                    <input type="email" class="input" placeholder="Email" name="email" required>
                                    <input type="password" class="input" placeholder="Password" name="pw" required>
                                </div>
                                <button type="submit" class="submit-btn" name="b_log_in">Login</button>
                                <p class="forgotPw">Forgot password ?</p>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>


        <!-- Script File -->

        <script>
        console.clear();
        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');
        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            })
        })
        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            })
        })
        </script>

    </div>
    </div>


    <!-- Footer -->
    <div class="container-fluid">
        
    <footer class="row flex-wrap row-cols-1 row-cols-sm-2 row-cols-md-3 pt-3 mt-5 px-5 border-top footer fixed-bottom">
            <div class="col mb-3 pt-2 ps-5">
                <ul class="nav flex-column">

                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> colombo</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +94 77 1234 567</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            organlife@gmail.com</a>
                    </li>

                </ul>
            </div>

            <div class="col mb-3 ps-5">
                <ul class="nav flex-column">
                    <h6>Quick Links</h6>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>

                </ul>
            </div>

            <div class="col ps-5 pt-3">
                <a href="/"
                    class="d-flex align-items-center mb-3 link-dark text-decoration-none d-flex align-items-center justify-content-center">
                    <img src="Images/Logo.png" class="bi" height="100" style="mix-blend-mode: luminosity;">
                </a>

            </div>

        </footer>
    </div>

</body>

</html>