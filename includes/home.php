<div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            New Coupons
                            <a href="coupons.html" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <?php
							$sqc='select * from coupons order by id desc limit 4';
							$rec=mysql_query($sqc);
							while($dtc2=mysql_fetch_array($rec)){
						?>
						
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
                                <div class="time-left"><?php echo $dtc2['date_fin']; ?>9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="coupon-<?php echo $dtc2['slug']; ?>.html">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
						<?php } ?>
                    </div>
					<a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a>
                </div><!--end block: New Coupons-->
				<?php include 'newsletter.php'; ?>
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            POPULAR BRANDS (129)
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <?php
							$sql='select * from marchands order by id desc limit 12';
							$req=mysql_query($sql);
							while($dtmch=mysql_fetch_assoc($req)){
						?>
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="marchand-<?php echo $dtmch['slug']; ?>.html" class="ver_container"><img src="images/photos/<?php echo $dtmch['logo']; ?>" alt="<?php echo $dtmch['marchand']; ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<?php } ?>
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>