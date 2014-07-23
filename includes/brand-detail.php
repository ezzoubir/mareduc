    <?php
		$sql='select * from marchands where slug = "'.$_GET['slug'].'"';
		$req=mysql_query($sql);
		$dtmch=mysql_fetch_assoc($req);
	
	?>
		<div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title"><?php echo $dtmch['marchand']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-detail-2 clearfix">
                    <div class="grid_9 wrap-left-info">
                        <p class="rs ta-c banner-brand"><img src="images/08-03.jpg" alt="<?php echo $dtmch['marchand']; ?>"></p>
                        <div class="brand-info-right">
                            <p class="rs ta-c brand-logo"><img src="images/photos/<?php echo $dtmch['logo']; ?>" alt="<?php echo $dtmch['marchand']; ?>"></p>
                            <div class="rate-brand clearfix">
                                <div class="basic" data-average="12" data-id="1"></div>
                            </div>
                            <div class="count-info clearfix">
                                <span class="lbl">Follower</span>
                                <span class="val">
									<?php 
										$sql=mysql_query('select count(*) as total from followers where id_marchand = "'.$dtmch['id'].'"');
										$dataf = mysql_fetch_array($sql);
										echo $dataf['total']; 
									?>
								</span>
                            </div>
                            <div class="count-info clearfix">
                                <span class="lbl">Coupons</span>
                                <span class="val">
									<?php 
										$sql=mysql_query('select count(*) as total from coupons where id_marchand = "'.$dtmch['id'].'"');
										$datac = mysql_fetch_array($sql);
										echo $datac['total']; 
									?>
								</span>
                            </div>
                            <a class="btn btn-blue btn-follow-brand" href="#">Follow brand</a>
                            <div class="brand-desc">
                                <div class="title-desc">About <?php echo $dtmch['marchand']; ?></div>
                                <p class="rs"><?php echo $dtmch['presentation']; ?> </p>
                            </div>
                            <i class="stick-lbl trust-brand-y"></i>
                        </div><!--end: .brand-info-right -->
                        <div class="mod-grp-coupon block clearfix">
                            <h3 class="title-block"><?php echo $datac['total']; ?> Lindt’s coupons</h3>
                            <div class="block-content list-coupon clearfix">
								<?php
									$sqc='select * from coupons where id_marchand = "'.$dtmch['id'].'"';
									$rec=mysql_query($sqc);
									while($dtc2=mysql_fetch_array($rec)){
								?>
                                <div class="coupon-item">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/photos/<?php echo $dtc2['logo']; ?>" alt="<?php echo $dtc2['titre']; ?>"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price"><?php echo $dtc2['reduction']; ?> Off</div>
                                        <div class="coupon-brand"><?php echo $dtc2['titre']; ?></div>
                                        <div class="coupon-desc"><?php echo $dtc2['presentation']; ?> </div>
                                        <div class="time-left"><?php echo $dtc2['date_fin']; ?>9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="coupon-<?php echo $dtc2['slug']; ?>.html">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
								<?php } ?>
                            </div>
                         </div><!--end block: group coupons-->
                    </div>
                </div><!--end: .mod-brand-detail-2 -->
            </div>
        </div>
        