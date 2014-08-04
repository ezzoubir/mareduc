
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Coupon Code</h2>
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
                            <div id="coupons_list" class="wrap-list couponslist">
							<?php
								$sql='select * from coupons order by id desc';
								$req=mysql_query($sql);
								while($dtcp=mysql_fetch_assoc($req)){
							?>
                                <div class="coupons-code-item right-action flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-<?php echo $dtcp['slug']; ?>.html" class="ver_container">
													<img class="lazy" data-original="images/photos/<?php echo $dtcp['logo']; ?>" alt<?php echo $dtcp['titre']; ?>">
												</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Réduction de: <?php echo $dtcp['reduction']; ?> <br/> <?php echo $dtcp['presentation']; ?></a></p>
                                        <p class="rs coupon-desc">
											<div class="time-left"><br/>
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
											</script></div>
										</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% ça marche</span>
                                                <!--span>
                                                    <span class="lbl-vote"><span class="vtop">12</span> <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote"><span class="vbot">2</span> <i class="icon iSubVote"></i></span>
                                                </span-->
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="coupon-<?php echo $dtcp['slug']; ?>.html">Voir le coupon</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
							<?php } ?>
                            </div>
                            <div class="pagination">
                                <a class="page-nav" href="#"><i class="icon iPrev"></i></a>
                                <a class="page-num active" href="#">1</a>
                                <a class="page-num" href="#">2</a>
                                <a class="page-num" href="#">3</a>
                                <a class="page-num" href="#">4</a>
                                <a class="page-num" href="#">5</a>
                                <a class="page-nav" href="#"><i class="icon iNext"></i></a>
                            </div>
                        </div><!--end: .mod-coupons-code -->
                    </div>
                    <div class="grid_4 sidebar">
                        <div class="mod-list-store block">
                            <h3 class="title-block">Popular store</h3>
                            <div class="block-content">
                                <div class="wrap-list-store clearfix">
								<?php	
									$sql='select * from marchands order by id desc limit 4';
									$req=mysql_query($sql);
									while($dtmch=mysql_fetch_assoc($req)){
								?>
                                    <a class="brand-logo" href="marchand-<?php echo $dtmch['slug']; ?>.html">
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/photos/<?php echo $dtmch['logo']; ?>" alt<?php echo $dtmch['marchand']; ?>"></span>
                                            </span>
                                        </span>
                                    </a>
								<?php } ?>
                                </div>
                            </div>
                        </div><!--end: .mod-list-store -->
                        <div class="mod-ads"><a href="#"><img src="images/04-17.jpg" alt="$NAME"></a></div>
                        <div class="mod-popular-tag block">
                            <h3 class="title-block">Popular Tag</h3>
                            <div class="block-content">
							<?php
								$sql='select tags from coupons';
								$req=mysql_query($sql);
								while($data=mysql_fetch_array($req)){
									$tagscp[] = $data['tags'];
								}
								foreach($tagscp as $tag) {
									$tags = explode('-',$tag);
									foreach($tags as $tag) {
										echo '<span class="btn btn-gray type-tag" data-value="'.$tag.'">'.$tag.'</span>';
									}
								}
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>