
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Catalogues</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'filter.php'; ?>
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
                                <div class="coupons-code-item right-action flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="<?php echo BASE_URL.RepPhoto.$dtcp['catalogue']; ?>" class="ver_container">
													<img src="images/photos/<?php echo $dtcp['photo']; ?>" alt<?php echo $dtcp['catalogue_titre']; ?>">
												</a>
                                            </div>
                                        </div>
                                    </div>
									<div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#"><?php echo $dtcp['catalogue_titre']; ?></a></p>
                                        <div class="bottom-action">
                                            <a class="btn btn-blue btn-view-coupon" href="<?php echo BASE_URL.RepPhoto.$dtcp['catalogue']; ?>">Voir le catalogue</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
							<?php } ?>
                            </div>
                        </div><!--end: .mod-coupons-code -->
                    </div>
                </div>
            </div>
        </div>