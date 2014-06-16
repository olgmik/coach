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
              <section class="col col-lg-1">
                <h5 class="pull-left">Image</h5>
              </section>
              <section class="col col-lg-2">
                <h5 class="pull-left">Name</h5>
              </section>
              <section class="col col-lg-6">
                <h5 class="pull-left">CSS</h5>
              </section>
               <section class="col col-lg-3">
                <h5 class="pull-left">Usage</h5>
              </section>
            </div><!-- end of the table header row -->

            <div class="horiz-rule-10"><!-- under-header rule -->
            </div>

            <div class="content row table-row"><!-- table content row 1 -->
              <section class="col col-lg-1">
                <span class="rsArrow-xs"></span>
                <span class="lsArrow-xs"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  x-small left and right arrows
                </p>
              </section>
              <section class="col col-lg-6">
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
              <section class="col col-lg-1">
                <span class="rsArrow-sm"></span>
                <span class="lsArrow-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  small left and right arrows
                </p>
              </section>
              <section class="col col-lg-6">
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
              <section class="col col-lg-1">
                <span class="upArrow-sm"></span>
                <span class="downArrow-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  small up and down arrows
                </p>
              </section>
              <section class="col col-lg-6">
                <p>.upArrow-sm, .rsArrow-sm  { width:15px;height:15px;display: inline-block;}</p>
                <p>.upArrow-sm{ background: url("../../images/icons/pdp_sprite.png") no-repeat 5px -93px;}</p>
                <p>.downArrow-sm{ background: url("../../images/icons/pdp_sprite.png") no-repeat 5px -105px;}</p>
              </section>
              <section class="col col-lg-3">
                <p>smaller drop-down menus as is currently on PDP page's "QTY In Stock"</p>
              </section>
            </div><!-- end of the table content row 3 -->

            <div class="content row table-row"><!-- table content row 4 -->
              <section class="col col-lg-1">
                <span class="downArrow-med"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  medium down arrows
                </p>
              </section>
              <section class="col col-lg-6">
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
              <section class="col col-lg-1">
                <span class="lsArrow-lg"></span>
                <span class="rsArrow-lg"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Large arrows
                </p>
              </section>
              <section class="col col-lg-6">
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
              <section class="col col-lg-1">
                <span class="lsArrow-xlg"></span>
                <span class="rsArrow-xlg"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Extra-large arrows
                </p>
              </section>
              <section class="col col-lg-6">
                <p>.lsArrow-xlg {
                  width: 33px;
                  height: 111px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -30px -138px;
                }</p>
                .lsArrow-xlg:hover {
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -30px -26px;
                }
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
            </div><!-- end of the table content row 5 -->

            <div class="content row table-row"><!-- table content row 6 -->
              <section class="col col-lg-1">
                <span class="close-lg"></span>
                <span class="close-sm"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Large and small "Close" icons
                </p>
              </section>
              <section class="col col-lg-6">
                <p>.close-lg{width: 23px;height: 23px;display: inline-block;background: url("../../images/icons/pdp_sprite.png") no-repeat -55px 0px;}</p>
                <p>.close-sm{width: 14px;height: 15px;display: inline-block;background: url("../../images/icons/pdp_sprite.png") no-repeat -79px 0px;}</p>
              </section>
              <section class="col col-lg-3">
                <p>Lg "X" appears on large overlays such as "Wishlist", sm - on smaller ones such as "Chat with a gift specialist"</p>
              </section>
            </div><!-- end of the table content row 4 -->

            <div class="content row table-row"><!-- table content row 5 -->
              <section class="col col-lg-1">
                <span class="plus"></span>
                <span class="minus"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Plus and minus icons
                </p>
              </section>
              <section class="col col-lg-6">
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
            </div><!-- end of the table content row 5 -->

            <div class="content row table-row"><!-- table content row 6 -->
              <section class="col col-lg-1">
                <span class="icon-chat"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Chat icon on the PDP page
                </p>
              </section>
              <section class="col col-lg-6">
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
            </div><!-- end of the table content row 6 -->

            <div class="content row table-row"><!-- table content row 7 -->
              <section class="col col-lg-1">
                <div class="background-icon-nav"><span class="icon-bag"></span></div>
                <div class="background-icon-nav"><span class="icon-search"></span></div>
              </section>
              <section class="col col-lg-2">
                <p>
                  Navigation icons: bag and search
                </p>
              </section>
              <section class="col col-lg-6">
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
            </div><!-- end of the table content row 7 -->
            <div class="content row table-row"><!-- table content row 8 -->
              <section class="col col-lg-1">
                <span class="icon-monogram"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Monogram icon
                </p>
              </section>
              <section class="col col-lg-6">
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
            </div><!-- end of the table content row 8 -->

            <div class="content row table-row"><!-- table content row 9 -->
              <section class="col col-lg-1">
                <span class="icon-rating-5"></span>
                <span class="icon-rating-none"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  Rating - all stars selected
                </p>
                 <p>
                  Rating - all stars de-selected
                </p>
              </section>
              <section class="col col-lg-6">
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
            </div><!-- end of the table content row 9 -->

            <div class="content row table-row"><!-- table content row 11 -->
              <section class="col col-lg-1">
                <span class="carousel-dots-1"></span>
              </section>
              <section class="col col-lg-2">
                <p style="padding-left: 45px; ">
                  Carousel dots
                </p>
              </section>
              <section class="col col-lg-6">
                <p>.carousel-dots-1 {
                  width: 117px;
                  height: 9px;
                  display: inline-block;
                  background: url("../../images/icons/pdp_sprite.png") no-repeat -104px -26px;
                }</p>
              </section>
              <section class="col col-lg-3">
                <p>Desktop carousel</p>
              </section>
            </div><!-- end of the table content row 11 -->

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