<footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_3">
                            <div class="company-info">
                                <img src="images/logo-gray.png" alt="CouponDay">
                                <p class="rs">Lorem ipsum dolor sit 
												amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
												tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
												 minim veniam, quis nostrud</p>
                                <p class="rs">
                                    Avenue Anfa N 256 Etage 5 <br>
                                    Bureau 6 Casablanca
                                </p>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Suivez nous</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Our Facebook page</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Tweets</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                        <div class="grid_3">
                            <div class="block intro-video">
                                <h3 class="title-block">Contactez nous</h3>
                                <div class="block-content">
                                    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
										<label class="wrap-txt" for="">
                                            <input class="input-txt" id="sys_email" placeholder="you@mail.com" type="email" name="FORM_NAME">
											<input class="input-txt" id="sys_pass" placeholder="Ville" type="text" name="FORM_VILLE">
											<input class="input-txt" id="sys_pass" placeholder="Email" type="text" name="FORM_EMAIL">
											<input class="input-txt" id="sys_pass" placeholder="Sujet" type="text" name="FORM_SUJET">
											<textarea name="FORM_MSG" placeholder="Message"></textarea>
											<button class="btn-flat gr btn-submit-reg" type="submit" name="CONTACT_FORM_ENVOYER">Connexion</button>
                                        </label>
									</form>
                                </div>
                            </div>
                        </div><!--end: Intro Video -->
                        <div class="grid_3">
                            <div class="block blog-recent">
                                <h3 class="title-block">Latest blog</h3>
                                <div class="block-content">
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/04-15.jpg" alt="$TITLE">
                                        </a>
                                        <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                                    </div>
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/04-16.jpg" alt="$TITLE">
                                        </a>
                                        <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: blog-recent -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="accueil.html">Accueil</a>
                            <a href="mentions.html">Mentions légales</a>
                            <a href="commerciaux.html">Commerciaux</a>
                            <a href="contact.html">Contact</a>
                        </div>
                        <div class="copyright">
                            www.groupromo.ma Copyright © 2014 by INTELLIGENCIA
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php
  if(isset($inscription_newsletter))
  {
      echo '<script type="text/javascript">alert("'.$inscription_newsletter.'");</script>';
  }
?>