        <?php
			$sql='SELECT * from coupons cp 
				  LEFT JOIN users_coupons usp 
				  ON cp.id=usp.id_coupon 
				  WHERE usp.id_membre="'.$_SESSION['id_membre'].'"';
				  
			$req=mysql_query($sql);
			$total = mysql_num_rows($req);
		?>
		<div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Mes Coupons</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="my-coupon mod-grp-coupon block clearfix tabbable tab-style-2">
                    <div class="grid_12">
                        <h3 class="title-block">
                            <span class="wrap-tab clearfix">
                                <span class="lbl-tab active">COUPONS (<?php echo $total; ?>)</span>
                                <span class="lbl-tab">MARCHANDS (6)</span>
                            </span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="tab-content">
                            <div class="tab-content-item clearfix active">
                                <?php while($dtc2=mysql_fetch_array($req)){ ?>
								<div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
										<div class="wrap-img-thumb">
											<span class="ver_hold"></span>
											<a href="coupon-detail.html" class="ver_container"><img src="images/photos/<?php echo $dtc2['logo']; ?>" alt="<?php echo $dtc2['titre']; ?>"></a>
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
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
								<?php } ?>
                                <div class="grid_12">
                                    <div class="pagination">
                                        <a class="txt-nav" href="#">Newer <span>post</span></a>
                                        <a class="page-num active" href="#">1</a>
                                        <a class="page-num" href="#">2</a>
                                        <a class="page-num" href="#">3</a>
                                        <a class="page-num" href="#">4</a>
                                        <a class="page-num" href="#">5</a>
                                        <a class="txt-nav" href="#">Older <span>post</span></a>
                                    </div>
                                </div>
                            </div><!--end: tab coupon-->
                            <div class="tab-content-item clearfix">
                                <div class="coupons-code-item view-code flex grid_6">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a> <i class="icon iI"></i></p>
                                        <div class="bottom-action clearfix">
                                            <span class="codes">223487 GHT 379</span>
                                            <a class="btn-discard" href="#">Discard</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item view-code flex grid_6">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a> <i class="icon iI"></i></p>
                                        <div class="bottom-action clearfix">
                                            <span class="codes">223487 GHT 379</span>
                                            <a class="btn-discard" href="#">Discard</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item view-code flex grid_6">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a> <i class="icon iI"></i></p>
                                        <div class="bottom-action clearfix">
                                            <span class="codes">223487 GHT 379</span>
                                            <a class="btn-discard" href="#">Discard</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item view-code flex grid_6">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a> <i class="icon iI"></i></p>
                                        <div class="bottom-action clearfix">
                                            <span class="codes">223487 GHT 379</span>
                                            <a class="btn-discard" href="#">Discard</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="grid_12">
                                    <div class="pagination">
                                        <a class="txt-nav" href="#">Newer post</a>
                                        <a class="page-num active" href="#">1</a>
                                        <a class="page-num" href="#">2</a>
                                        <a class="page-num" href="#">3</a>
                                        <a class="page-num" href="#">4</a>
                                        <a class="page-num" href="#">5</a>
                                        <a class="txt-nav" href="#">Older post</a>
                                    </div>
                                </div>
                            </div><!--end: tab Coupon codes-->
                            <div class="tab-content-item clearfix">
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                                <div class="brand-item grid_4">
                                    <div class="brand-content">
                                        <div class="brand-logo">
                                            <div class="wrap-img-logo">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-unfollow ta-c">
                                        <a class="btn-discard" href="#">Unfollow</a>
                                    </div>
                                </div><!--end: .brand-item -->
                            </div><!--end: tab Brands-->
                        </div>
                    </div>
                </div><!--end block: Tab Coupons-->
            </div>
        </div>