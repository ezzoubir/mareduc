		<?php 
			$sql='select * from marchands where order by marchand';
			$req=mysql_query($sql);
			$num=mysql_num_rows($req);
			$dtmch=mysql_fetch_assoc($req);
		?>
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title"><?php echo $num; ?> Brands are waiting for you</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'filter.php'; ?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-alphabetical block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block">Brand library</h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="grid_12 alphabe">
                            <div class="wrap-list-char">
                                <a href="#marchands-a">A</a>
                                <a href="#marchands-b">B</a>
                                <a href="#marchands-c">C</a>
                                <a href="#marchands-d">D</a>
                                <a href="#marchands-e">E</a>
                                <a href="#marchands-f">F</a>
                                <a href="#marchands-g" class="disable">G</a>
                                <a href="#marchands-h">H</a>
                                <a href="#marchands-i">I</a>
                                <a href="#marchands-j" class="disable">J</a>
                                <a href="#marchands-k">K</a>
                                <a href="#marchands-l">L</a>
                                <a href="#marchands-m">M</a>
                                <a href="#marchands-n">N</a>
                                <a href="#marchands-o">O</a>
                                <a href="#marchands-p">P</a>
                                <a href="#marchands-q">Q</a>
                                <a href="#marchands-r" class="disable">R</a>
                                <a href="#marchands-s" class="disable">S</a>
                                <a href="#marchands-t">T</a>
                                <a href="#marchands-u" class="disable">U</a>
                                <a href="#marchands-v">V</a>
                                <a href="#marchands-w" class="disable">W</a>
                                <a href="#marchands-x">X</a>
                                <a href="#marchands-y">Y</a>
                                <a href="#marchands-z" class="disable">Z</a>
                                <a href="#marchands-0-9">0-9</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div style="position: relative; height: 1808.6px;" id="container_list_link" class="clearfix link-alpha-link">
                            <div style="position: absolute; left: 0px; top: 0px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">A</div>
                                <div class="list-follow">
                                    <div><a href="#">Abreva</a></div>
                                    <div><a href="#">Activia</a></div>
                                    <div><a href="#">Advantage</a></div>
                                    <div><a href="#">Advil</a></div>
                                    <div><a href="#">Air Wick</a></div>
                                    <div><a href="#">Ajax</a></div>
                                    <div><a href="#">Aleve</a></div>
                                    <div><a href="#">Align</a></div>
                                    <div><a href="#">Alli</a></div>
                                    <div><a href="#">Almay</a></div>
                                    <div><a href="#">Alpo</a></div>
                                    <div><a href="#">Always</a></div>
                                    <div><a href="#">Angel Soft</a></div>
                                    <div><a href="#">Aquafresh</a></div>
                                    <div><a href="#">Arm &amp; Hammer</a></div>
                                    <div><a href="#">AT&amp;T</a></div>
                                    <div><a href="#">Atkins</a></div>
                                    <div><a href="#">Aunt Jemima</a></div>
                                    <div><a href="#">Aveeno</a></div>
                                    <div><a href="#">Avent</a></div>
                                    <div><a href="#">Axe</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 270px; top: 0px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">B</div>
                                <div class="list-follow">
                                    <div><a href="#">Ball Park</a></div>
                                    <div><a href="#">Band-Aid</a></div>
                                    <div><a href="#">Banquet</a></div>
                                    <div><a href="#">Barilla</a></div>
                                    <div><a href="#">Bayer</a></div>
                                    <div><a href="#">Belvita</a></div>
                                    <div><a href="#">Beneful</a></div>
                                    <div><a href="#">Bertolli</a></div>
                                    <div><a href="#">Betty Crocker</a></div>
                                    <div><a href="#">Bic</a></div>
                                    <div><a href="#">Biotene</a></div>
                                    <div><a href="#">Birds Eye</a></div>
                                    <div><a href="#">Blue Bell</a></div>
                                    <div><a href="#">Blue Buffalo</a></div>
                                    <div><a href="#">Blue Diamond</a></div>
                                    <div><a href="#">Bolthouse Farms</a></div>
                                    <div><a href="#">Boost</a></div>
                                    <div><a href="#">Bounce</a></div>
                                    <div><a href="#">Bounty</a></div>
                                    <div><a href="#">Brawny</a></div>
                                    <div><a href="#">Breyers</a></div>
                                    <div><a href="#">Brita</a></div>
                                    <div><a href="#">Burts Bees</a></div>
                                    <div><a href="#">Butterball</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 540px; top: 0px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">C</div>
                                <div class="list-follow">
                                    <div><a href="#">Campbells</a></div>
                                    <div><a href="#">Capri Sun</a></div>
                                    <div><a href="#">Carefree</a></div>
                                    <div><a href="#">Caress</a></div>
                                    <div><a href="#">Carvel</a></div>
                                    <div><a href="#">Cascade</a></div>
                                    <div><a href="#">Centrum</a></div>
                                    <div><a href="#">Cerave</a></div>
                                    <div><a href="#">Cetaphil</a></div>
                                    <div><a href="#">Chapstick</a></div>
                                    <div><a href="#">Charmin</a></div>
                                    <div><a href="#">Cheer </a></div>
                                    <div><a href="#">Cheetos</a></div>
                                    <div><a href="#">Cheez It</a></div>
                                    <div><a href="#">Chef Boyardee</a></div>
                                    <div><a href="#">Chex</a></div>
                                    <div><a href="#">Chobani</a></div>
                                    <div><a href="#">Clairol</a></div>
                                    <div><a href="#">Claritin</a></div>
                                    <div><a href="#">Clif Bar</a></div>
                                    <div><a href="#">Clorox</a></div>
                                    <div><a href="#">Coca-Cola</a></div>
                                    <div><a href="#">Coffee-Mate</a></div>
                                    <div><a href="#">Colgate</a></div>
                                    <div><a href="#">Cool Whip</a></div>
                                    <div><a href="#">Cottonelle</a></div>
                                    <div><a href="#">Covergirl</a></div>
                                    <div><a href="#">Cracker Barrel</a></div>
                                    <div><a href="#">Crayola</a></div>
                                    <div><a href="#">Crest</a></div>
                                    <div><a href="#">Crisco</a></div>
                                    <div><a href="#">Crystal Light</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 810px; top: 0px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">D</div>
                                <div class="list-follow">
                                    <div><a href="#">Dannon</a></div>
                                    <div><a href="#">Dawn</a></div>
                                    <div><a href="#">Degree</a></div>
                                    <div><a href="#">Del Monte</a></div>
                                    <div><a href="#">Dial</a></div>
                                    <div><a href="#">Digiorno</a></div>
                                    <div><a href="#">Dixie</a></div>
                                    <div><a href="#">Dole</a></div>
                                    <div><a href="#">Domino Sugar</a></div>
                                    <div><a href="#">Doritos</a></div>
                                    <div><a href="#">Dove</a></div>
                                    <div><a href="#">Downy</a></div>
                                    <div><a href="#">Dreft</a></div>
                                    <div><a href="#">Dr Pepper</a></div>
                                    <div><a href="#">Duncan Hines</a></div>
                                    <div><a href="#">Duracell</a></div>
                                    <div><a href="#">Duraflame</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 810px; top: 504px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">E</div>
                                <div class="list-follow">
                                    <div><a href="#">Eldership</a></div>
                                    <div><a href="#">Eldest</a></div>
                                    <div><a href="#">Electre</a></div>
                                    <div><a href="#">Electrical</a></div>
                                    <div><a href="#">Electricity</a></div>
                                    <div><a href="#">Electrick</a></div>
                                    <div><a href="#">Eleemosynary</a></div>
                                    <div><a href="#">Elegant</a></div>
                                    <div><a href="#">Esplanade</a></div>
                                    <div><a href="#">Estrich</a></div>
                                    <div><a href="#">Ethical</a></div>
                                    <div><a href="#">Ethically</a></div>
                                    <div><a href="#">Ethick</a></div>
                                    <div><a href="#">Ethicks</a></div>
                                    <div><a href="#">Eucrasy</a></div>
                                    <div><a href="#">Eyebright</a></div>
                                    <div><a href="#">Eyebrow</a></div>
                                    <div><a href="#">Eyedrop</a></div>
                                    <div><a href="#">Eyeglance</a></div>
                                    <div><a href="#">Eyeglass</a></div>
                                    <div><a href="#">Eyeless</a></div>
                                    <div><a href="#">Eyelet</a></div>
                                    <div><a href="#">Eyelid</a></div>
                                    <div><a href="#">Eyeservant</a></div>
                                    <div><a href="#">Eyeservice</a></div>
                                    <div><a href="#">Eyeshot</a></div>
                                    <div><a href="#">Eyesight</a></div>
                                    <div><a href="#">Eyesore</a></div>
                                    <div><a href="#">Eyespotted</a></div>
                                    <div><a href="#">Eyestring</a></div>
                                    <div><a href="#">Eyetooth</a></div>
                                    <div><a href="#">Eyewink</a></div>
                                    <div><a href="#">Eyewitness</a></div>
                                    <div><a href="#">Eyre</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; top: 607px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">F</div>
                                <div class="list-follow">
                                    <div><a href="#">Facetious</a></div>
                                    <div><a href="#">Facetiously</a></div>
                                    <div><a href="#">Facetiousness</a></div>
                                    <div><a href="#">Facile</a></div>
                                    <div><a href="#">Facilitate</a></div>
                                    <div><a href="#">Facility</a></div>
                                    <div><a href="#">Facinerious</a></div>
                                    <div><a href="#">Facing</a></div>
                                    <div><a href="#">Facinorous</a></div>
                                    <div><a href="#">Facinorousness</a></div>
                                    <div><a href="#">Fact</a></div>
                                    <div><a href="#">Faction</a></div>
                                    <div><a href="#">Factionary</a></div>
                                    <div><a href="#">Factious</a></div>
                                    <div><a href="#">Factotum</a></div>
                                    <div><a href="#">Fitz</a></div>
                                    <div><a href="#">Fleam</a></div>
                                    <div><a href="#">Flexanimous</a></div>
                                    <div><a href="#">Flog</a></div>
                                    <div><a href="#">Flook</a></div>
                                    <div><a href="#">Florin</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 270px; top: 685px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">G</div>
                                <div class="list-follow">
                                    <div><a href="#">Gabbler</a></div>
                                    <div><a href="#">Gabel</a></div>
                                    <div><a href="#">Gabion</a></div>
                                    <div><a href="#">Gable</a></div>
                                    <div><a href="#">Gadder</a></div>
                                    <div><a href="#">Gaddingly</a></div>
                                    <div><a href="#">Gadfly</a></div>
                                    <div><a href="#">Gaff</a></div>
                                    <div><a href="#">Gaffer</a></div>
                                    <div><a href="#">Gaffles</a></div>
                                    <div><a href="#">Gormand</a></div>
                                    <div><a href="#">Gormandize</a></div>
                                    <div><a href="#">Gormandizer</a></div>
                                    <div><a href="#">Gorse</a></div>
                                    <div><a href="#">Gory</a></div>
                                    <div><a href="#">Gradient</a></div>
                                    <div><a href="#">Gramineous</a></div>
                                    <div><a href="#">Graminivorous</a></div>
                                    <div><a href="#">Grammar</a></div>
                                    <div><a href="#">Grammar School</a></div>
                                    <div><a href="#">Grammaticaster</a></div>
                                    <div><a href="#">Grand</a></div>
                                    <div><a href="#">Grandevity</a></div>
                                    <div><a href="#">Grandevous</a></div>
                                    <div><a href="#">Grange</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 540px; top: 891px;" class="grid_3 grp-by-alpha">
                                <div class="head-char">H</div>
                                <div class="list-follow">
                                    <div><a href="#">Habitableness</a></div>
                                    <div><a href="#">Habitance</a></div>
                                    <div><a href="#">Habitant</a></div>
                                    <div><a href="#">Habitation</a></div>
                                    <div><a href="#">Habitator</a></div>
                                    <div><a href="#">Habitual</a></div>
                                    <div><a href="#">Habitually</a></div>
                                    <div><a href="#">Habituate</a></div>
                                    <div><a href="#">Habitude</a></div>
                                    <div><a href="#">Habnab</a></div>
                                    <div><a href="#">Handsomely</a></div>
                                    <div><a href="#">Handsomeness</a></div>
                                    <div><a href="#">Handvice</a></div>
                                    <div><a href="#">Handwriting</a></div>
                                    <div><a href="#">Handy</a></div>
                                    <div><a href="#">Handydandy</a></div>
                                    <div><a href="#">Hebdomad</a></div>
                                    <div><a href="#">Hebdomadal</a></div>
                                    <div><a href="#">Hebdomadary</a></div>
                                    <div><a href="#">Hebetate</a></div>
                                    <div><a href="#">Hebetation</a></div>
                                    <div><a href="#">Hebetude</a></div>
                                    <div><a href="#">Hebraism</a></div>
                                    <div><a href="#">Hebraist</a></div>
                                    <div><a href="#">Hebrician</a></div>
                                    <div><a href="#">Hecatomb</a></div>
                                    <div><a href="#">Hectical</a></div>
                                    <div><a href="#">Hypochondres</a></div>
                                    <div><a href="#">Hypochondriacal</a></div>
                                    <div><a href="#">Hypochondriack</a></div>
                                    <div><a href="#">Hysterical</a></div>
                                    <div><a href="#">Hysterick</a></div>
                                    <div><a href="#">Hystericks</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end block: Featured Coupons-->
                <div class="mod-email-newsletter clearfix">
                    <div class="grid_12">
                        <div class="wrap-form clearfix">
                            <div class="left-lbl">
                                <div class="big-lbl">newsletter</div>
                                <div class="sml-lbl">Don't miss a chance!</div>
                            </div>
                            <div class="wrap-email">
                                <label for="sys_email_newsletter">
                                    <input id="sys_email_newsletter" placeholder="Enter your email here" type="email">
                                </label>
                            </div>
                            <button class="btn btn-orange btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                        </div>
                    </div>
                </div><!--end: .mod-email-newsletter-->
            </div>
        </div>
