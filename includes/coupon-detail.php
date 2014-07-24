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
                        <div class="save-price">Save <?php echo $dtcp['reduction']; ?> Off</div>
                        <a href="#" class="brand-name"><?php echo $dtmch['marchand']; ?></a>
                        <div class="coupon-desc"><?php echo $dtcp['presentation']; ?></div>
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
                            <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                        <div class="wrap-action clearfix">
                            <div class="left-vote">
                                <!--span class="lbl-work">100% work</span>
                                <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                <span class="lbl-vote">2 <i class="icon iSubVote"></i></span-->
                            </div>
                            <div class="right-social">
                                Share now
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
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
                    <div class="grid_12">
                        <h3 class="title-block">
                            Related coupons
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
						<?php
							$sqc='select * from coupons';
							$rec=mysql_query($sqc);
							while($dtc2=mysql_fetch_array($rec)){
						?>
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/photos/<?php echo $dtc2['logo']; ?>" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price"><?php echo $dtc2['reduction']; ?> Off</div>
                                <div class="coupon-brand"><?php echo $dtc2['titre']; ?></div>
                                <div class="coupon-desc"><?php echo $dtc2['presentation']; ?> </div>
                                <div class="time-left"><br/>
									<div class="countdown<?php echo $dtc2['id']; ?> styled"></div>
									<script type="text/javascript">
									  $(function() {
										<?php
											$dt = explode('-',$dtc2['date_fin']);
											$monthName = date("F", mktime(0, 0, 0, $dt[1], 10));
										?>
										var endDate = "<?php echo $monthName; ?> <?php echo $dt[2]; ?>, <?php echo $dt[0]; ?> 23:59:59";

										$('.countdown<?php echo $dtc2['id']; ?>.styled').countdown({
										  date: endDate,
										  render: function(data) {
											$(this.el).html("<div>" + this.leadingZeros(data.days, 3) + " <span>jours</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>heures</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>minutes</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>secondes</span></div>");
										  }
										});
										});
									</script>
								</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
						<?php } ?>
                    </div>
                 </div><!--end block: Related coupons-->
            </div>
        </div>