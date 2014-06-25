<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coach Style Guide - Home Page</title>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="_/components/js/bootstrap-select.js"></script>
    <script src="_/js/myscript.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic|Libre+Baskerville:400,700|Radley:400,400italic|Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/bootstrap-select.css" rel="stylesheet">
     <link href="_/css/mystyles.css" rel="stylesheet">
    <link href="_/css/scrollyou.css" rel="stylesheet">

  </head>
  <body id="forms">
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
                <h3>FORMS</h3>
                  <ul>
                    <li>Drop down default is a light grey background. However, if grey background does not work for layout, a white drop down with 1px grey stroke can be used.</li> 
                    <li>Down carrot (v) is used whenever for true drop down interactions, where content is selected on click and fills the field.</li> 
                    <li>Plus sign (+) is used for any accordion toggle interaction, where additional content is revealed that can be accessed independently.</li>
                    <li>Field widths are flexible dependent on needs (small number vs. text)</li>
                    <li>Field Height of all form fields is 28px to maintain tappability on tablet</li>
                  </ul>
              </hgroup>
              <p></p>
            </section>
          </article><!-- end of introduction text row's colum-12 -->
        </div><!-- end of introduction text row -->

        <div class="content row"><!-- the ENTIRE table row -->

          <section class="col col-lg-12"><!-- the ENTIRE table 12 columns -->

            <div class="content row table-row"><!-- table header row -->
              <section class="col col-lg-3">
                <h5 class="pull-left">Form field</h5>
              </section>
              <section class="col col-lg-2">
                <h5 class="pull-left">Type</h5>
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
                <form>
                  <label for="search">SEC Filing Keyword Search</label>
                  <input name="search" class="search" type="search">
                  <div class="label-bottom"><a href="#">view search tips</a></div>
                </form>

                <form>
                  <label for="search">SEC Filing Keyword Search</label>
                  <div class="input-group input-group-sm">
                    
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                    
                    <input name="search" class="search form-control" type="search">
                    
                  </div>
                  <div class="label-bottom"><a href="#">view search tips</a></div>
                </form>

              </section>
              <section class="col col-lg-2">
                <p>Lato label outside</p>
              </section>
              <section class="col col-lg-5">
                <p>/* DISABLING HTML5 FORM STYLING */</p>
                <p>input[type="search"] {
                  -webkit-appearance: textfield;
                }
                input[type="search"]::-webkit-search-decoration,
                input[type="search"]::-webkit-search-cancel-button,
                input[type="search"]::-webkit-search-results-button,
                input[type="search"]::-webkit-search-results-decoration {
                  display: none;
                }</p>
                <p>input, textarea {
                  -webkit-appearance: none;
                  border-radius: 0;
                  outline: none;
                  vertical-align: middle;
                  width: 250px; 
                  height: 30px;
                  border:1px solid #cccccc;
                  font-size: 1.2em; 
                  line-height: 1em; 
                  padding: 0 2% 1px 2%;
                }</p>
                <p>label {
                  font-size: 1em;
                  color: #545454;
                  text-transform: uppercase;
                  letter-spacing: 0.1em;
                  font-weight: 700;
                  display: block;
                  line-height: 1em; 
                }</p>
                <p>.label-bottom {
                  line-height: 1.6em;
                  width: 250px;
                  font-size: 1em;
                  letter-spacing: 0.1em;
                  color: #999999;
                  font-size: 1em;
                  font-weight: 400;
                  font-style: italic;
                  text-transform: lowercase;
                }</p>
                <p>.label-bottom a {
                  color: #999999;
                  text-decoration: underline; 
                }</p>
                <p>.label-bottom a:hover {
                  color: black;
                }</p>
              </section>
              <section class="col col-lg-2">
                <p>Semantic</p>
              </section>
            </div><!-- end of the table content row 1 -->


            <div class="content row table-row margin-top-10"><!-- table content row 4 -->
              <section class="col col-lg-3">       
                <label for="id_select">your options</label>
                <select id="id_select" class="selectpicker" multiple data-live-search="false" >
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                    <option>option 6</option>
                </select>
              </section>

              <section class="col col-lg-2">
                <p>Bootstrap SELECT form</p>
              </section>
              <section class="col col-lg-5">
                <p>To customize Bootstrap's SELECT picker(http://getbootstrap.com/css/#forms) in a form one must use a jQuery plugin. 
                The plugin used here is called bootstrap-select.js. </p>
                <p><?php $new = htmlspecialchars(
                "<label for='id_select'>your options</label>
                <select id='id_select' class='selectpicker' multiple data-live-search='false' >
                    <option>option 1</option>
                    <option>option 2</option>
                    ...
                    <option>option 6</option>
                </select>", ENT_QUOTES); echo $new; ?>
                </p>
                <p>Add 
                  <?php $new = htmlspecialchars("<script type='text/javascript' src='_/components/js/bootstrap-select.js'></script> ", ENT_QUOTES);
                  echo $new; 
                  ?> to your page and $('.selectpicker').selectpicker(); to _myscript.js</p>
              </section>
              <section class="col col-lg-2">
                <p>In a form</p>
              </section>

            </div><!-- end of the table content row 4 -->

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

  </body>
</html>