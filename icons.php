<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coach Style Guide - Home Page</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic|Libre+Baskerville:400,700|Radley:400,400italic|Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
	<link href="_/css/mystyles.css" rel="stylesheet">
  </head>
  <body id="icons">
    <section class="main-container">

      <div class="content row">
        <section class="main col col-lg-12" id="header">
          <?php include "_/components/php/header.php"; ?>
        </section>
      </div><!-- header -->

      <div class="content row"><!-- fonts and side row -->

        <section class="main col col-lg-10"><!-- main content area -->

          <div class="content row"><!-- introduction text row --> 
            <article class="main col col-lg-12"><!-- introduction text row's colum-12 -->

            <section class="content row"><!-- top explanation row --> 
              <hgroup class="main col col-lg-12">
                <h3>Icons</h3>
                <p>Icons presented here are all a part of one sprite.</p>
              </hgroup>
            </section>
            
            <section class="content row emphasis-panel"><!-- dos and donts row -->
              <div class="main col col-lg-3">
                <h4>Do<span class="lower-case">s</span></h4>
                <ul>
                  <li>Use flat color</li>
                  <li>Use simple shapes</li>
                  <li>Use simple labels or call to action i.e. SHARE, SHOP, BAG</li>
                </ul>
              </div>
              <div class="main col col-lg-3">
                <h4>don't<span class="lower-case">s</span></h4>
                <ul>
                  <li>Add gradient</li>
                  <li>Add drop shadow</li>
                  <li>Use round corners</li>
                </ul>
              </div>
               <div class="main col col-lg-3"></div>
            </section><!-- end of dos and donts row -->  
            </article><!-- end of introduction text row's colum-12 -->
          </div><!-- end of introduction text row -->

        <div class="content row"><!-- the ENTIRE table row -->
          <section class="col col-lg-12"><!-- the ENTIRE table 12 columns -->

            <div class="content row table-row"><!-- table header row -->
              <section class="col col-lg-2">
                <h5 class="pull-left">Image</h5>
              </section>
              <section class="col col-lg-2">
                <h5 class="pull-left">Name</h5>
              </section>
              <section class="col col-lg-5">
                <h5 class="pull-left">CSS</h5>
              </section>
               <section class="col col-lg-3">
                <h5 class="pull-left">Usage</h5>
              </section>
            </div><!-- end of the table header row -->

            <div class="horiz-rule-10"><!-- under-header rule -->
            </div>

            <div class="content row table-row"><!-- table content row 1 -->
              <section class="col col-lg-2">
                <span class="rsArrow-xs"></span>
                <span class="lsArrow-xs"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  x-small left and right arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.rsArrow-xs, .lsArrow-xs {
                  width: 8px;
                  height: 8px;
                  display: inline-block;
                }</p>
                <p>.rsArrow-xs{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -128px;
                }</p>
                <p>.rsArrow-xs:hover{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -8px -128px;
                  cursor: pointer;
                }</p>
                <p>.lsArrow-xs{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -143px;
                }</p>
                <p>.lsArrow-xs:hover{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -8px -143px;
                  cursor: pointer;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>text links with right arrows</p>
              </section>
            </div><!-- end of the table content row 1 -->

            <div class="content row table-row"><!-- table content row 2 -->
              <section class="col col-lg-2">
                <span class="rsArrow-sm"></span>
                <span class="lsArrow-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  small left and right arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.rsArrow-sm, .lsArrow-sm, .upArrow-sm, .downArrow-sm{
                  width: 7px;
                  height: 11px;
                  display: inline-block;
                }</p>
                <p>.rsArrow-sm{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -94px;
                }</p>
                <p>.rsArrow-sm:hover{
                  background: url(../../images/icons/pdp_sprite.png) no-repeat -13px -94px;
                  cursor: pointer;
                }</p>
                <p>.lsArrow-sm{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -106px;
                }</p>
                <p>.lsArrow-sm:hover{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -13px -106px;
                  cursor: pointer;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>pagination arrows are gray and black on focus in reverse of regular text links arrows</p>
              </section>
            </div><!-- end of the table content row 2 -->

            <div class="content row table-row"><!-- table content row 3 -->
              <section class="col col-lg-2">
                <span class="upArrow-sm"></span>
                <span class="downArrow-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  small up and down arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.upArrow-sm, .rsArrow-sm  { width:15px;height:15px;display: inline-block;}</p>
                <p>.upArrow-sm{ background: url("../../images/icons/pdp_sprite.png") no-repeat 5px -93px;}</p>
                <p>.downArrow-sm{ background: url("../../images/icons/pdp_sprite.png") no-repeat 5px -105px;}</p>
              </section>
              <section class="col col-lg-3">
                <p>smaller drop-down menus as is currently on PDP page's "QTY In Stock"</p>
              </section>
            </div><!-- end of the table content row 3 -->

            <div class="content row table-row"><!-- table content row 4 -->
              <section class="col col-lg-2">
                <span class="downArrow-med"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  medium down arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.downArrow-med{
                  width: 13px;
                  height: 8px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -45px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>standard size (250px wide) drop-down menus</p>
              </section>
            </div><!-- end of the table content row 4 -->

            <div class="content row table-row"><!-- table content row 5 -->
              <section class="col col-lg-2">
                <span class="lsArrow-lg"></span>
                <span class="rsArrow-lg"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Large arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.lsArrow-lg {
                  width: 20px;
                  height: 66px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -104px -184px;
                }</p>
                <p>.lsArrow-lg:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -104px -116px;
                }</p>
                <p>.rsArrow-lg {
                  width: 20px;
                  height: 66px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -125px -184px;
                }</p>
                <p>.rsArrow-lg:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -125px -116px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Usually used on home page carousel</p>
              </section>
            </div><!-- end of the table content row 5 -->

            <div class="content row table-row"><!-- table content row 6 -->
              <section class="col col-lg-2">
                <span class="lsArrow-xlg"></span>
                <span class="rsArrow-xlg"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Extra-large arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.lsArrow-xlg {
                  width: 33px;
                  height: 111px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -30px -138px;
                }</p>
                <p>.lsArrow-xlg:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -30px -26px;
                }</p>
                <p>.rsArrow-xlg {
                  width: 33px;
                  height: 111px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -63px -138px;
                }</p>
                <p>.rsArrow-xlg:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -63px -26px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Usually used on creative content pages such as New York Stories</p>
              </section>
            </div><!-- end of the table content row 6 -->

            <div class="content row table-row"><!-- table content row 7 -->
              <section class="col col-lg-2">
                <span class="close-lg"></span>
                <span class="close-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Large and small "Close" icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.close-lg{width: 23px;height: 23px;display: inline-block;background: url("../../images/icons/pdp_sprite.png") no-repeat -55px 0px;}</p>
                <p>.close-sm{width: 14px;height: 15px;display: inline-block;background: url("../../images/icons/pdp_sprite.png") no-repeat -79px 0px;}</p>
              </section>
              <section class="col col-lg-3">
                <p>Lg "X" appears on large overlays such as "Wishlist", sm - on smaller ones such as "Chat with a gift specialist"</p>
              </section>
            </div><!-- end of the table content row 7 -->

            <div class="content row table-row"><!-- table content row 8 -->
              <section class="col col-lg-2">
                  <span class="close-blackSquare-font"></span><h4 class="closeButton">Close</h4>
              </section>
              <section class="col col-lg-2">
                <p >
                  Close button
                </p>
              </section>
              <section class="col col-lg-5">
                <p>span.close-blackSquare-font{ 
                  width: 20px;
                  height: 20px;
                  display: block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat 0px -280px;
                  float: left; 
                  margin-right: 8px; 
                }
                h4.closeButton{
                  height: 20px; 
                  line-height: 20px; 
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Overlays</p>
              </section>
            </div><!-- end of the table content row 8 -->

            <div class="content row table-row"><!-- table content row 9 -->
              <section class="col col-lg-2">
                <span class="plus"></span>
                <span class="minus"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Plus and minus icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.plus, .minus {
                  width: 9px;
                  height: 9px;
                  display: inline-block;
                }</p>
                <p>.plus {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -95px 0px;
                }</p>
                <p>.minus {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -105px 0px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>in accordions for "expand" and "close"</p>
              </section>
            </div><!-- end of the table content row 9 -->

            <div class="content row table-row"><!-- table content row 10 -->
              <section class="col col-lg-2">
                <span class="icon-chat"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Chat icon on the PDP page
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-chat {
                  width: 15px;
                  height: 14px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -117px 0px;
                }</p>
                <p>.icon-chat:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -134px 0px;
                  cursor: pointer;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>on the PDP page</p>
              </section>
            </div><!-- end of the table content row 10 -->

            <div class="content row table-row"><!-- table content row 11 -->
              <section class="col col-lg-2">
                <div class="background-icon-nav"><span class="icon-bag"></span></div>
                <div class="background-icon-nav"><span class="icon-search"></span></div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Navigation icons: bag and search
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-bag {  
                  display: inline-block;
                  background-size: contain; 
                    width: 12px;
                  height: 13px;
                    background: url("../../images/icons/pdp_sprite.png") no-repeat -152px 0px; 
                }</p>
                <p>.icon-bag:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -175px 0px; 
                }</p>
                <p>.icon-search{
                  display: inline-block;
                  background-size: contain; 
                    width: 11px;
                  height: 13px;
                    background: url("../../images/icons/pdp_sprite.png") no-repeat -220px 0px; 
                }</p>
                <p>.icon-search:hover{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -198px 0px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>black global top bar</p>
              </section>
            </div><!-- end of the table content row 11 -->

            <div class="content row table-row"><!-- table content row 12 -->
              <section class="col col-lg-2">
                <span class="icon-monogram"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Monogram icon
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-monogram {
                  display: inline-block;
                  background-size: contain; 
                  width: 22px;
                  height: 16px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -242px 0px; 
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>to the left of "Add a Monogram" link on PDP pages</p>
              </section>
            </div><!-- end of the table content row 12 -->

            <div class="content row table-row"><!-- table content row 13 -->
              <section class="col col-lg-2">
                <span class="icon-rating-5"></span>
                <span class="icon-rating-none"></span>
                <!-- working example -->
                
              <!-- end of working example -->
              </section>
              <section class="col col-lg-2">
                <p>
                  Rating - all stars selected
                </p>
                 <p>
                  Rating - all stars de-selected
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-monogram {
                  display: inline-block;
                  background-size: contain; 
                  width: 22px;
                  height: 16px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -242px 0px; 
                }</p>
              </section>

              <section class="col col-lg-3">
                <p>Product reviewing and reviews - desktop</p>
              </section>
            </div><!-- end of the table content row 13 -->

            <div class="content row table-row"><!-- table content row 14 -->
              <section class="col col-lg-2">
                <span class="carousel-dots-1"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Carousel dots
                </p>
              </section>
              <section class="col col-lg-5">
                <p class="italic">This is the image on the sprite</p>
                <p>.carousel-dots-1 {
                  width: 117px;
                  height: 9px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -104px -26px;
                }</p>
                <p class="italic">This is the carousel CSS</p>
                <p>.carousel-indicators {
                  position: absolute;
                  bottom: 0px;
                  left: 50%;
                  z-index: 15;
                  width: 60%;
                  margin-left: -30%;
                  padding-left: 0;
                  list-style: none;
                  text-align: center;
                }</p>
                <p>.carousel-indicators li {
                  display: inline-block;
                  width: 9px;
                  height: 9px;
                  margin: 5px 5px 5px;
                  text-indent: -999px;
                  border: none;
                  border-radius: 8px;
                  cursor: pointer;

                  // IE8-9 hack for event handling
                    //
                    // Internet Explorer 8-9 does not support clicks on elements without a set
                    // `background-color`. We cannot use `filter` since that's not viewed as a
                    // background color by the browser. Thus, a hack is needed.
                    //
                    // For IE8, we set solid black as it doesn't support `rgba()`. For IE9, we
                    // set alpha transparency for the best results possible.

                    background-color: #666666 \9; // IE8
                    background-color: rgba(102,102,102,100); // IE9
                }</p>
                <p>.carousel-indicators .active {
                  margin: 5px 5px 5px;
                  width: 9px;
                  height: 9px;
                  background-color: #cccccc;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Desktop carousel, creative content pages such as New York Stories</p>
              </section>
            </div><!-- end of the table content row 14 -->

            <div class="content row table-row"><!-- table content row 15 -->
              <section class="col col-lg-2">
                <span class="ajax-loader-white"></span>
                <span class="ajax-loader-black"></span>
                <span class="ajax-loader-gray"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Ajax loaders
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.ajax-loader-white,.ajax-loader-gray,.ajax-loader-black {
                  display: block;
                  background-size: contain; 
                  width: 16px;
                  height: 16px;
                  float: left; 
                }</p>
                <p>.ajax-loader-white {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -401px 0px;
                }</p>
                <p>.ajax-loader-gray {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -439px 0px;
                }</p>
                <p>.ajax-loader-black {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -420px 0px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>The colored background preloaders are to be used when needed to avoid pixelation from a transparent background. 
                </p>
              </section>
            </div><!-- end of the table content row 15 -->

            <div class="content row table-row"><!-- table content row 16 -->
              <section class="col col-lg-2">
                <div class="loader-default-lg">
                  <span class="default-loader"></span>
                  <h4>loading...</h4>
                </div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Default loader
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.loader-default-lg{
                  text-align: center; 
                }</p>
                <p>.default-loader{
                  display: inline-block;
                  background-size: contain; 
                  width: 32px;
                  height: 32px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -413px -20px;
                  margin-bottom: 8px; 
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>On web page load. This preloader is only to be used when custom is not an option due to scope or timing and a default preloader must be chosen. </p>
              </section>
            </div><!-- end of the table content row 16 -->

            <div class="content row table-row"><!-- table content row 17 -->
              <section class="col col-lg-2">
                  <span class="loader-custom"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Custom loader
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.loader-custom{
                  display: inline-block; 
                  width: 132px;
                  height: 72px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -361px -75px;
                  position: absolute; 
                  left: 0; 
                }</p>
              </section>
              <section class="col col-lg-3">
              </section>
            </div><!-- end of the table content row 17 -->

            <div class="content row table-row"><!-- table content row 18 -->
              <section class="col col-lg-2">
                  <span class="icon-fb-like"></span></br>
                  <span class="icon-fb"></span>
                  <span class="icon-twitter"></span>
                  <span class="icon-youtube"></span>
                  <span class="icon-pintrest"></span>
                  <span class="icon-instagram"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Share icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-fb,.icon-twitter,.icon-youtube,.icon-pintrest,.icon-instagram{
                  display: inline-block; 
                    width: 17px;
                  height: 25px;
                  margin-right: 10px; 
                }</p>
                <p>.icon-fb{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -390px -177px;
                }</p>
                <p>.icon-twitter{
                  background: ... -411px -177px;
                }</p>
                <p>.icon-youtube{
                  background: ... -432px -177px;
                }</p>
                <p>.icon-pintrest{
                  background: ... -452px -177px;
                }</p>
                <p>.icon-instagram{
                  background: ... -472px -177px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Used in the footer on desktop and mobile</p>
              </section>
            </div><!-- end of the table content row 18 -->

            <div class="content row table-row"><!-- table content row 19 -->
              <section class="col col-lg-2">
                  <span class="icon-desktop-black"></span>
                  <span class="icon-fb-black"></span>
                  <span class="icon-gPlus-black"></span>
                  <span class="icon-instagram-black"></span>
                  <span class="icon-pintrest-black"></span>
                  <span class="icon-twitter-black"></span>
                  <span class="icon-tumblr-black"></span>
                  <span class="icon-share-black"></span>
                  <span class="icon-youtube-black"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Social media icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-desktop-black,.icon-fb-black,.icon-instagram-black,.icon-pintrest-black,.icon-twitter-black,.icon-tumblr-black,.icon-share-black,.icon-youtube-black{
                  display: inline-block; 
                    width: 25px;
                  height: 25px;
                  margin-right: 5px;
                }</p>
                <p>.icon-desktop-black {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -390px -205px;
                }</p>
                <p>.icon-fb-black {
                  background: ... -418px -205px;
                }</p>
                <p>.icon-gPlus-black {
                  background: ... -446px -205px;
                }</p>
                <p>.icon-instagram-black {
                  background: ... -474px -205px;
                }</p>
                <p>.icon-pintrest-black {
                  background: ... -390px -233px;
                }</p>
                <p>.icon-twitter-black {
                  background: ... -418px -233px;
                }</p>
                <p>.icon-tumblr-black {
                  background: ... -446px -233px;
                }</p>
                <p>.icon-share-black {
                  background: ... -474px -233px;
                }</p>
                <p>.icon-youtube-black {
                  background: ... -390px -260px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>For creative content such as Mother's day card</p>
              </section>
            </div><!-- end of the table content row 19 -->

            <div class="content row table-row"><!-- table content row 20 -->
              <section class="col col-lg-2">
                  <span class="icon-fb-features"></span>
                  <span class="icon-twitter-features"></span>
                  <span class="icon-pintrest-features"></span>
                  <div class="black-background">
                    <span class="icon-fb-features-white"></span>
                    <span class="icon-twitter-features-white"></span>
                    <span class="icon-pintrest-features-white"></span>
                  </div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Sharing icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-fb-features,.icon-twitter-features,.icon-pintrest-features,.icon-fb-features-white,.icon-twitter-features-white,.icon-pintrest-features-white{
                  display: inline-block; 
                    width: 17px;
                  height: 17px;
                } </p>
                <p>.icon-fb-features{
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -418px -260px;
                }</p>
                <p>.icon-twitter-features{
                  background: ... -439px -260px;
                }</p>
                <p>.icon-pintrest-features{
                  background: ... -459px -260px;
                }</p>
                <p>.icon-fb-features-white{
                  background: ... -418px -280px;
                }</p>
                <p>.icon-twitter-features-white{
                  background: ... -439px -280px;
                }</p>
                <p>.icon-pintrest-features-white{
                  background: ... -459px -280px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Features</p>
              </section>
            </div><!-- end of the table content row 20 -->

            <div class="content row table-row"><!-- table content row 21 -->
              <section class="col col-lg-2">
                  <span class="icon-click-to-zoom"></span>
                  <div class="black-background">
                    <span class="icon-click-to-zoom-transp"></span>
                  </div>
                  <div class="black-background">
                    <span class="icon-tap-to-zoom"></span>
                  </div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Zoom icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.icon-click-to-zoom{
                  display: inline-block; 
                  width: 49px;
                  height: 49px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -275px 0px;
                }</p>
                <p>.icon-click-to-zoom-transp{
                  display: inline-block; 
                    width: 93px;
                  height: 71px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -238px -56px;
                }</p>
                <p>.icon-tap-to-zoom{
                  display: inline-block; 
                  width: 151px;
                  height: 71px;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -181px -134px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>tbd</p>
              </section>
            </div><!-- end of the table content row 21 -->

            <div class="content row table-row"><!-- table content row 22 -->
              <section class="col col-lg-2">
                  <div class="iconsAll">
                    <span class="icon-alert"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-mail"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-print"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-rss"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-excel"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-pdf"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-word"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-report"></span>
                  </div>
                  <div class="iconsAll">
                    <span class="icon-contact"></span>
                  </div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Investor information icons
                </p>
              </section>
              <section class="col col-lg-5">
                <p>.iconsAll{
                  display: inline-block;
                  margin-right: 10px;
                  margin-bottom: 10px; 
                }</p>
                <p>iconsAll:hover{
                  opacity: .6; 
                }</p>
                <p>.icon-alert,.icon-mail,.icon-print,.icon-rss,.icon-excel,.icon-pdf,.icon-word,.icon-report,.icon-contact{
                  display: inline-block;
                  width: 24px;
                  height: 24px;
                  background-repeat: no-repeat; 
                  background-image: url("../../images/icons/pdp_sprite.png"); 
                }</p>
                <p>.icon-alert {
                  background-position: -181px -213px;
                }</p>
                <p>.icon-mail {
                  background-position: -209px -213px;
                }</p>
                <p>.icon-print {
                  background-position: -237px -213px;
                }</p>
                <p>.icon-rss {
                  background-position: -265px -213px;
                }</p>
                <p>.icon-excel {
                  background-position: -181px -240px;
                }</p>
                <p>.icon-pdf {
                  background-position: -209px -240px;
                }</p>
                <p>.icon-word {
                  background-position: -237px -240px;
                }</p>
                <p>.icon-report {
                  background-position: -265px -240px;
                }</p>
                <p>.icon-contact {
                  background-position: -291px -240px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Company information pages</p>
              </section>
            </div><!-- end of the table content row 22 -->

          </section><!-- end of the ENTIRE table 12 columns -->
        </div><!-- end of the entire table row-->

      </section><!-- end of main content area -->

      <section class="sidebar col col-lg-2">
        <h4>Sidenote</h4>
        <p>
          Lorem ipsum dolor sit amet, in tibique sapientem vulputate eum. Laoreet indoctum principes mea et, vis nusquam volutpat dissentiunt an. Quas animal dolorum no vix, qui an unum splendide incorrupte. Et stet vitae consequat pro, ei ubique nostrum comprehensam sed. Eam erat choro at, graece oporteat no vim, harum copiosae his at. Te nec viris impetus iudicabit, sed in justo dicta doctus, nam ea novum vocibus dolores.
          Sanctus sadipscing qui eu, quem alterum patrioque ea vim. Appareat scribentur sit id, nec ad saepe repudiare, eu tritani nostrum expetenda sed. No sed veri autem, per te hinc viderer. Ius virtute fuisset antiopam ut.
          Ea mel nonumy graecis tractatos. Sit posse fabulas cu. Sit sale erroribus id, cu habemus forensibus pro, eum te percipit voluptatibus. Pro ea meis graeci utroque, te eam scripta abhorreant. Eum euripidis honestatis interpretaris in, ne deleniti electram has. Aeque partem inciderint ea eum, ea mei aliquam cotidieque.
        </p>
      </section><!-- sidebar -->

      </div><!-- fonts and side content row -->
    </section><!-- main-container -->

    <section class="container">
      <div class="row">
        <section class="main col col-lg-12" id="footer" class="footer">
          <?php include "_/components/php/footer.php"; ?>
        </section><!-- main -->
      </div>
    </section>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>