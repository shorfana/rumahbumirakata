            <br><br><br><br><br><br>
            <center>    
                <div class="col-md-4 col-sm-4">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo base_url() ?>login/login_act" method="post">
                                    <div class="form-fild">
                                        <p><label>Username or email address <span class="required">*</span></label></p>
                                        <input name="username" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="password" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <button type="submit" class="btn">Login</button>
                                        <label>
                                            <input class="checkbox" name="rememberme" value="" type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <div class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>    