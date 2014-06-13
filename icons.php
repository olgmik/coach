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
                <span class="lsArrow-med"></span>
                <span class="rsArrow-med"></span>
              </section>
              <section class="col col-lg-2">
                <p>
                  medium left and right arrows
                </p>
              </section>
              <section class="col col-lg-5">
                <p>
                  .lsArrow-med{</br>
                  width: 15px;</br>
                  height: 15px;</br>
                  display: inline-block;</br>
                  background: url("../../images/icons/pdp_sprite_1.png") no-repeat 5px -93px;
                }
                </p>
              </section>
              <section class="col col-lg-3">
                <p>pagination, capitalized links</p>
              </section>
            </div><!-- end of the table content row 1 -->

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