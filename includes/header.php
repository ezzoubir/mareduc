<header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="accueil.html">
                                    <img src="images/logo.png" alt="<?php echo META_TITLE; ?>">
                                </a>
                            </h1>
                            <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                    <li class="active">
                                        <a href="accueil.html">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="coupons.html">Coupons</a>
                                    </li>
									<li>
                                        <a href="marchands.html">Marchands</a>
                                    </li>
									<!--li>
                                        <a href="collection.html">New Collection</a>
                                    </li-->
                                    <!--li class="has-sub">
                                        <a href="coupon-code.html">Bons à imprimer</a>
                                        <ul class="sub-menu">
                                            <li><a href="coupon-code.html">Bons marchands</a></li>
                                            <li><a href="coupon-code-2.html">Bons produits</a></li>
                                        </ul>
                                    </li-->
                                    <!--li class="has-sub">
                                        <a href="brand-list.html">Deals</a>
                                        <ul class="sub-menu">
                                            <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                            <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                            <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                            <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                            <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                        </ul>
                                    </li-->
                                    <li>
                                        <a href="my-coupon.html">Mes coupons</a>
                                        <i class="icon iPickRed lbl-count"><span>12</span></i>
                                    </li>
                                </ul>
                                <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sys_pop_login" class="pop-login">
                <div class="viewport-pop">
                    <div class="transport-viewer clearfix">
                        <div class="mod-register">
                            <h3 class="rs title-mod">Déjà membre ?<br/>Merci de vous connecter en utilisant le formulaire ci-dessous </h3>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email">
                                            <input class="input-txt" id="sys_email" placeholder="you@mail.com" type="email" name="FORM_EMAIL">
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass" placeholder="password svp!" type="password" name="FORM_PASSWORD">
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news">
                                            <a class="lost-pass" href="#">Forgot password ?</a>
                                        </label>
                                        <div class="wrap-login-btn">
                                            <button class="btn-flat gr btn-submit-reg" type="submit" name="LOGIN_FORM_ENVOYER">Connexion</button>
                                            <div class="sep-connect">
                                                <span>Ou</span>
                                            </div>
                                            <div class="grp-connect">
                                                <a class="btn-flat fb" href="#">Facebook</a>
                                                <a class="btn-flat gg" href="#">Google</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-create-acc">
                                        <img class="account" src="images/reg-account.png" alt="Couponday.com">
                                        <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                        <a id="sys_link_reg_panel" href="register.html" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                        <div style="display: block;" id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News">No disturb</div>
                                    </div>
                                </form>
                                <i class="line-sep"></i>
                            </div>
                        </div><!--end: Login panel -->
                        <div class="mod-register">
                            <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                            <div class="desc-reg">Sign up for free and 
get exclusive access to members-only savings, rewards and special 
promotions from Coupons.com. Enter in an email and a password or sign up
 with Facebook.</div>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email_reg">
                                            <input class="input-txt" id="sys_email_reg" placeholder="you@mail.com" type="email" name="FORM_EMAIL">
                                        </label>
                                        <label class="wrap-txt" for="sys_pass_reg">
                                            <input class="input-txt" id="sys_pass_reg" placeholder="password please!" type="password" name="FORM_PASSWORD">
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news_reg">
                                            <input id="sys_chk_news_reg" class="input-chk" type="checkbox"> Send me the weekly Couponday.com’s offers.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                        <label class="wrap-check" for="sys_chk_agree">
                                            <input id="sys_chk_agree" class="input-chk" type="checkbox"> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                    </div>
                                    <div class="right-connect">
                                        <button class="btn-flat yellow btn-submit-reg" type="submit" name="ESPACE_MEMBRE_FORM_INSCRIPTION">Create an account</button>
                                        <div class="sep-connect">
                                            <span>Or</span>
                                        </div>
                                        <div class="grp-connect">
                                            <p class="rs">Sign up using your account on:</p>
                                            <a class="btn-flat fb" href="#">Facebook</a>
                                            <a class="btn-flat gg" href="#">Google</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="rs wrap-link-back">
                                <a id="sys_link_login_panel" href="login.html" class="link-back">
                                    <i class="pick-r"></i>
                                    Back to login
                                </a>
                            </p>
                        </div><!--end: Register panel -->
                    </div>
                    <div id="sys_paging_state" class="paging-state">
                        <i class="active"></i>
                        <i></i>
                    </div>
                    <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
                </div>
            </div>
        </header><!--end: header.mod-header -->