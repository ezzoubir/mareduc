
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Catalogues</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php //include 'filter.php'; ?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="layout-2cols clearfix">
                    <div class="grid_8 content">
                        <div class="mod-coupons-code">
                            <div id="catalogues_list" class="wrap-list couponslist">
							<?php
								$sql='select * from catalogues order by id desc';
								$req=mysql_query($sql);
								while($dtcp=mysql_fetch_assoc($req)){
							?>
                                <div class="coupon-item grid_3">
								<div class="coupon-content">
									<div class="img-thumb-center">
										<div class="wrap-img-thumb">
											<span class="ver_hold"></span>
											<a href="<?php echo BASE_URL.RepPhoto.$dtcp['catalogue']; ?>" target="_blank" class="ver_container">
													<img src="images/photos/<?php echo $dtcp['photo']; ?>" alt<?php echo $dtcp['catalogue_titre']; ?>"><br/>
													<div class="coupon-brand"><?php echo $dtcp['catalogue_titre']; ?></div>
											</a>
										</div>
									</div>
									
									<a class="btn btn-blue btn-view-coupon" href="<?php echo BASE_URL.RepPhoto.$dtcp['catalogue']; ?>">Voir le catalogue</a>
								</div>
								<i class="stick-lbl hot-sale"></i>
							</div><!--end: .coupon-item -->
							<?php } ?>
                            </div>
                        </div><!--end: .mod-coupons-code -->
                    </div>
                </div>
            </div>
        </div>