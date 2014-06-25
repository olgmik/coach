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
  <body id="buttons">
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
                <h3>Buttons</h3>
                <p>All buttons are divided into 2 types:</p>
              </hgroup>
            </section>
            
            <section class="content row emphasis-panel"><!-- dos and donts row -->
              <div class="main col col-lg-3">
                <h4>Primary</h4>
                <ul>
                  <li>Only one black primary button per page</li>
                  <li>Width is flexible</li>
                  <li>Height (30px) and font size are constant fixed</li>
                  <li>Shown below are the large and small default sizes</li>
                </ul>
              </div>
              <div class="main col col-lg-3">
                <h4>Secondary</h4>
                <ul>
                  <li>Used for additional buttons and secondary actions</li>
                  <li>Width is flexible</li>
                  <li>Height and font size are constant</li>
                  <li>Shown below are the large and small default sizes</li>
                </ul>
              </div>
               <div class="main col col-lg-3"></div>
            </section><!-- end of dos and donts row -->  
            </article><!-- end of introduction text row's colum-12 -->
          </div><!-- end of introduction text row -->

        <div class="content row"><!-- the ENTIRE table row -->
          <section class="col col-lg-12"><!-- the ENTIRE table 12 columns -->

            <div class="content row table-row"><!-- table header row -->
              <section class="col col-lg-3">
                <h5 class="pull-left">Button</h5>
              </section>
              <section class="col col-lg-2">
                <h5 class="pull-left">Name</h5>
              </section>
              <section class="col col-lg-5">
                <h5 class="pull-left">HTML/CSS</h5>
              </section>
               <section class="col col-lg-2">
                <h5 class="pull-left">Usage</h5>
              </section>
            </div><!-- end of the table header row -->

            <div class="horiz-rule-10"><!-- under-header rule -->
            </div>
            
            <div class="content row table-row"><!-- table content row 1 -->
              <section class="col col-lg-3">
                
              </section>
              <section class="col col-lg-2">
                <p>
                  Base <p>
                  <?php
                  $new = htmlspecialchars("<button>", ENT_QUOTES);
                  echo $new; 
                  ?> style that applies to all buttons + shared classes 
                </p>
              </section>
              <section class="col col-lg-5">
                <p><?php
                  $new = htmlspecialchars("<a href='#'>
                  <button class=' '>
                    <span>Copy</span>
                  </button>
                </a>", ENT_QUOTES);
                  echo $new; 
                ?></p>
                <p>button {
                  font-family: 'Lato',Helvetica,Arial,sans-serif;
                  text-transform: uppercase;
                  font-size: 1.2em;
                  font-weight: 700;
                  letter-spacing: 1px;
                  height: 28px; 
                  display: inline-block;
                  cursor: pointer;
                  text-align: center;
                }</p>
                <p>.primaryButton{
                  background: #000;
                  color: #fff;
                  border: 1px solid #000;
                }</p>
                <p>.primaryButton:hover{
                  background: #999999;
                  border: #999999; 
                }</p>
                <p>.secondaryButton {
                  background: #fff;
                  color: #666666;
                  border: 1px solid #666666;
                }</p>
                <p>.secondaryButton:hover {
                  background: #fff;
                  color: #000;
                  border: 1px solid #000;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>All buttons</p>
              </section>
            </div><!-- end of the table content row 1 -->

            <div class="content row table-row"><!-- table content row 2 -->
              <section class="col col-lg-3">
                <a href="#">
                  <button class="primaryButton button-wide">
                    <span>Add to bag</span>
                  </button>
                </a>
              </section>
              <section class="col col-lg-2">
                <p>
                  Primary default large button
                </p>
              </section>
              <section class="col col-lg-5">
                <p><?php
                  $new = htmlspecialchars("<a href='#'>
                  <button class='primaryButton button-wide'>
                    <span>Add to bag</span>
                  </button>
                </a>", ENT_QUOTES);
                  echo $new; 
                ?></p>
                <p>.button-wide{
                  width: 250px;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>Forms</p>
              </section>
            </div><!-- end of the table content row 2 -->

            <div class="content row table-row"><!-- table content row 3 -->
              <section class="col col-lg-3">
                <a href="#">
                  <button class="secondaryButton button-wide">
                    <span>Cancel</span>
                  </button>
                </a>
              </section>
              <section class="col col-lg-2">
                <p>
                  Secondary default large button
                </p>
              </section>
              <section class="col col-lg-5">
                <p><?php
                  $new = htmlspecialchars("<a href='#'>
                  <button class='secondaryButton button-wide'>
                    <span>Cancel</span>
                  </button>
                </a>", ENT_QUOTES);
                  echo $new; 
                ?></p>
                <p>.button-wide{
                  width: 250px;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>Forms</p>
              </section>
            </div><!-- end of the table content row 3 -->

            <div class="content row table-row"><!-- table content row 4 -->
              <section class="col col-lg-3">
                <a href="#">
                  <button class="primaryButton button-narrow">
                    <span>Next</span>
                  </button>
                </a>
              </section>
              <section class="col col-lg-2">
                <p>
                  Primary default small button
                </p>
              </section>
              <section class="col col-lg-5">
                <p><?php
                  $new = htmlspecialchars("<a href='#'>
                  <button class='secondaryButton button-narrow'>
                    <span>Cancel</span>
                  </button>
                </a>", ENT_QUOTES);
                  echo $new; 
                ?></p>
                <p>.button-narrow{
                  width: 140px;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>Forms</p>
              </section>
            </div><!-- end of the table content row 4 -->

            <div class="content row table-row"><!-- table content row 5 -->
              <section class="col col-lg-3">
                <a href="#">
                  <button class="secondaryButton button-narrow">
                    <span>Cancel</span>
                  </button>
                </a>
              </section>
              <section class="col col-lg-2">
                <p>
                  Secondary default small button
                </p>
              </section>
              <section class="col col-lg-5">
                <p><?php
                  $new = htmlspecialchars("<a href='#'>
                  <button class='secondaryButton button-narrow'>
                    <span>Cancel</span>
                  </button>
                </a>", ENT_QUOTES);
                  echo $new; 
                ?></p>
                <p>.button-narrow{
                  width: 140px;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>Forms</p>
              </section>
            </div><!-- end of the table content row 5 -->

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