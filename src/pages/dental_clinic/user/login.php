<div class="page d-none" id="page_login">
    <section>
        <div class="container login_container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form" style=" display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 0rem 5rem; transition: all 0.2s 0.7s; overflow: hidden; grid-column: 1 / 2; grid-row: 1 / 2;">
                        <h1 class="che"> C H E R O N Z E L L E </h1>
                        <BR>
                        <h2 class="title text-black">Sign in</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" id="txt_username" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="txt_password" placeholder="Password" />
                        </div>
                        <input type="button" id="btn_login" value="Login" class="btn solid" />
                        <p class="social-text">Or Sign in with social platforms</p>
                        <div class="social-media">
                            <a href="home/indexx.html" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>


                    </form>
                    <form action="#" class="sign-up-form" style=" display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 0rem 5rem; transition: all 0.2s 0.7s; overflow: hidden; grid-column: 1 / 2; grid-row: 1 / 2;">
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" id="txt_sign_up_uid" placeholder="Username" />
                        </div>
                        <div class="input-field" style="position:relative;">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="txt_sign_up_email" placeholder="Email" />
                            <button class="verify_email_outputs" id="btn_send_code" style="display:none; position:absolute; right:0; top:15px; font-size:9pt; background:transparent; border:none;">Send Code</button>
                        </div>
                        <div class="verify_email_outputs" style="display:none; ">
                        <small class="text-secondary">You need to verify your email</small>

                        </div>

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="txt_sign_up_pass"  placeholder="Password" />
                        </div>
                        <input type="submit" id="btn_submit" class="btn" value="Sign up" />
                        <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here ?</h3>
                        <p>
                            Register and be one of us!
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="src/resources/img/signup-pic.png" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Welcome back!</h3>
                        <p>
                            Check your account for updates and more.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Sign in
                        </button>
                    </div>
                    <img src="src/resources/img/signup-pic2.png" class="image" alt="" />
                </div>
            </div>
        </div>

    </section>
</div>