<?php
	$sql='select * from coupons where slug = "'.$_GET['slug'].'"';
	$req=mysql_query($sql);
	$dtcp=mysql_fetch_assoc($req);
	
	$sql='select * from marchands where id = "'.$dtcp['id_marchand'].'"';
	$req=mysql_query($sql);
	$dtmch=mysql_fetch_assoc($req);
?>
		<div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Coupons</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-breadcrumb clearfix">
                    <div class="grid_12">
                        <a href="#">Accueil</a>
                        <span>&gt;</span>
                        <a href="#">Coupons</a>
                        <span>&gt;</span>
                        <a href="#"><?php echo $dtcp['titre'].' : '.$dtcp['reduction']; ?> off</a>
                    </div>
                </div><!--end: .mod-breadcrumb -->
                <div class="mod-coupon-detail clearfix">
                    <div class="grid_4">
                        <div class="wrap-thumb">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="images/photos/<?php echo $dtcp['logo']; ?>" alt="<?php echo $dtcp['titre']; ?>"></a>
                                </div>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div>
                    </div>
                    <div class="grid_5">
                        <div class="save-price">Réduction de : <?php echo $dtcp['reduction']; ?></div>
                        <a href="#" class="brand-name"><?php echo $dtmch['marchand']; ?></a>
                        <div class="coupon-desc"><?php echo $dtcp['presentation']; ?></div>
						<div class="coupon-desc">
							<b>Adresse : <?php echo $dtmch['adresse']; ?></b><br/>
							<b>Tél :</b> <?php echo $dtmch['tel']; ?><br/>
							<b>Site :</b> <?php echo $dtmch['site']; ?><br/>
						</div>
                        <div class="wrap-btn clearfix">
                            <div class="day-left">
							<div class="countdown<?php echo $dtcp['id']; ?> styled"></div>
									<script type="text/javascript">
									  $(function() {
										<?php
											$dt = explode('-',$dtcp['date_fin']);
											$monthName = date("F", mktime(0, 0, 0, $dt[1], 10));
										?>
										var endDate = "<?php echo $monthName; ?> <?php echo $dt[2]; ?>, <?php echo $dt[0]; ?> 23:59:59";

										$('.countdown<?php echo $dtcp['id']; ?>.styled').countdown({
										  date: endDate,
										  render: function(data) {
											$(this.el).html("<div>" + this.leadingZeros(data.days, 3) + " <span>jours</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>heures</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>minutes</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>secondes</span></div>");
										  }
										});
										});
									</script>
							</div>
                            <a class="btn btn-blue btn-take-coupon" href="#">Imprimer le coupon</a>
                        </div>
                        <div class="wrap-action clearfix">
                            <div class="left-vote">
                                <!--span class="lbl-work">100% work</span>
                                <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                <span class="lbl-vote">2 <i class="icon iSubVote"></i></span-->
                            </div>
                            <div class="right-social">
                                Share now
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL.$_SERVER['REQUEST_URI']; ?>" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="wrap-tag">
                            <span class="btn btn-gray type-tag tag-lbl">Tag</span>
							<?php 
								$tags = explode('-',$dtcp['tags']);
								foreach($tags as $tag) {
									echo '<a class="btn btn-gray type-tag" href="#">'.$tag.'</a>';
								}
							?>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="brand-info ta-c">
                            <div class="brand-logo"><img src="images/photos/<?php echo $dtmch['logo']; ?>" alt="<?php echo $dtmch['marchand']; ?>"></div>
                            <span class="star-rate"><span style="width: 91%"></span></span>
                            <div class="rated-number">
							<?php 
								$sql=mysql_query('select count(*) as total from followers where id_marchand = "'.$dtmch['id'].'"');
								$data = mysql_fetch_array($sql);
								echo $data['total']; 
							?>
							Followers</div>
                            <div class="brand-desc ta-l"><?php echo $dtmch['presentation']; ?></div>
                            <a class="link-brand" href="marchand-<?php echo $dtmch['slug']; ?>.html">View Brand</a>
                        </div>
                    </div>
                </div><!--end: .mod-coupon-detail -->
                <div class="mod-grp-coupon block clearfix">
                    <div class="block-content list-coupon clearfix">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.598032501732!2d-7.635176239085455!3d33.589784538628365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C+Maroc!5e0!3m2!1sfr!2sfr!4v1407169225429" width="100%" height="450" frameborder="0" style="border:0"></iframe><br/><br/>
                    </div>
                 </div><!--end block: Related coupons-->
            </div>
        </div>