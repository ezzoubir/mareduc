<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html<?php if(isset($declaration_entete_html)) echo $declaration_entete_html; ?>>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<base href="<?php echo BASE_URL; ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>favicon.ico" />
<?php
  // on recupere meta
  $sql='select * from '.PREFIXE_BDD.'metatags where language="'.$_GET['language'].'"';
  $res=mysql_query($sql);
  $row=mysql_fetch_assoc($res); 
  define('META_TITLE',$row['titre']);
  define('META_DESCRIPTION',$row['description']);
  define('META_KEYWORDS',$row['mots']);
?>
<title><?php echo META_TITLE; ?></title>
<meta name="keywords" content="<?php echo META_KEYWORDS; ?>" />
<meta name="description" content="<?php echo META_DESCRIPTION; ?>" />
<meta name="revisit-after" content="1 days" />
<meta name="robots" content="index, follow" />
<?php
if(isset($header_article_facebook))
{
  echo $header_article_facebook;
}
?>
<link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery_002.css">
    <link rel="stylesheet" href="css/jquery.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-dark.css">
    <link rel="stylesheet" href="css/style-gray.css">
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="css/res-menu.css">
    <link rel="stylesheet" href="css/responsive.css">


<link href="css/css.css" type="text/css" rel="stylesheet">
<style type="text/css">#html5-text {color:#333; font-size:13px;font-weight:700; overflow:hidden; }.html5-error {text-align:center; color:#ff0000; font-size:14px; }</style></head>
<body class="gray"><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <?php include 'header.php'; ?>
        <?php include 'mainmenu.php'; ?>
        <?php include 'slide.php'; ?>
        <?php include 'filter.php'; ?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            New Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">Save $1.50 on two</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$5.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                    </div>
                </div><!--end block: New Coupons-->
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            Featured Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">VIEW COUPON CODE</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$17.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">17GH0097</a>
                            </div>
                            <i class="stick-lbl trust-brand-y"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$3.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl trust-brand-b"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$11.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">SunMart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$4.5 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                    </div>
                    <a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a>
                </div><!--end block: Featured Coupons-->
				<?php include 'newsletter.php'; ?>
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            POPULAR BRANDS (129)
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</div>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/jquery_004.js"></script>
<script type="text/javascript" src="js/jquery_003.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->
</body></html>