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
  <body id="dropdowns">
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
              <hgroup class="main col col-lg-6">
                <h3>DROPDOWNS</h3>
                <p>These are regular dropdowns that utilize Bootstrap's Dropdown component. They utilize &ltul&gt&ltli&gt&lt/li&gt&lt/ul&gt tags. For &ltselect&gt&ltoption&gt&lt/option&gt&lt/select&gt dropdowns check out FORMS page.
              </hgroup>
            </section>
          </article><!-- end of introduction text row's colum-12 -->
        </div><!-- end of introduction text row -->

        <div class="content row"><!-- the ENTIRE table row -->
          <section class="col col-lg-12"><!-- the ENTIRE table 12 columns -->

            <div class="content row table-row"><!-- table header row -->
              <section class="col col-lg-4">
                <h5 class="pull-left">Dropdown</h5>
              </section>
              <section class="col col-lg-1">
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
              <section class="col col-lg-4">
                <div class="btn-group">
                  <div class="btn btn-group filter">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Filter
                      <div class="filter-icon"><span class="plusMinus"></span></div>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>
                  <div class="btn btn-group sort">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Sort
                      <div class="filter-icon"><span class="caret-sm"></span></div>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Price-High to Low</a></li>
                      <li><a href="#">Price-Low to High</a></li>
                    </ul>
                  </div>
                </div>
                </section>
              <section class="col col-lg-1">
                <p>Filter and Sort</p>
              </section>
              <section class="col col-lg-5">
                <p class="strong">HTML</p>
                <p>&ltdiv class='btn-group'&gt</br>
                  &ltdiv class='btn btn-group filter'&gt</br>
                    &ltbutton type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'&gt</br>
                      Filter</br>
                      &ltdiv class='filter-icon'&gt&ltspan class='plusMinus'&gt&lt/span&gt&lt/div&gt</br>
                    &lt/button&gt</br>
                    &ltul class='dropdown-menu'&gt</br>
                      &ltli&gt&lta href='#'&gtDropdown link&lt/a&gt&lt/li&gt</br>
                      &ltli&gt&lta href='#'&gtDropdown link&lt/a&gt&lt/li&gt</br>
                    &lt/ul&gt</br>
                  &lt/div&gt</br>
                  &ltdiv class='btn btn-group sort'&gt</br>
                    &ltbutton type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'&gt</br>
                      Sort</br>
                      &ltdiv class='filter-icon'&gt&ltspan class='caret-sm'&gt&lt/span&gt&lt/div&gt</br>
                    &lt/button&gt</br>
                    &ltul class='dropdown-menu'&gt</br>
                      &ltli&gt&lta href='#'&gtPrice-High to Low&lt/a&gt&lt/li&gt</br>
                      &ltli&gt&lta href='#'&gtPrice-Low to High&lt/a&gt&lt/li&gt</br>
                    &lt/ul&gt</br>
                  &lt/div&gt</br>
                &lt/div&gt
                </p>
                <p class="strong">CSS</p>
                  <p>.dropdown-menu{
                    webkit-box-shadow: none; 
                    box-shadow: none;
                    border-radius: 0;
                    border: 1px solid #cccccc;
                    min-width: 100%;
                    margin: 0;
                    font-size: @font-size-dd;
                    position: absolute; 
                    padding: 0; 
                  }</p>
                  <p>.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{
                    color: @gray;
                  }</p>
                  <p>.dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus {
                    color: #000;
                    text-decoration: none;
                    outline: 0;
                    background-color: #eeeeee;
                  }</p>
                  <p>.btn.btn-group.filter.open ul.dropdown-menu > li, .btn.btn-group.sort.open ul.dropdown-menu>li{
                    background-color: #fff; 
                    border: none; 
                    border-bottom: 1px solid #ccc; 
                  }</p>
                  <p>.btn.btn-group.filter.open ul.dropdown-menu li:last-child, .btn.btn-group.sort.open ul.dropdown-menu li:last-child{
                    border: none; 
                  }</p>
                  <p>.btn.btn-group.filter.open ul.dropdown-menu > li:hover, .btn.btn-group.sort.open ul.dropdown-menu>li:hover{
                    background-color: #eee;  
                  }</p>
                  <p>.btn.btn-group.filter ul.dropdown-menu, .btn.btn-group.sort ul.dropdown-menu{
                    position: relative; 
                    width: 142px; 
                    border-top: none; 
                    letter-spacing: 1px; 
                  }</p>
                  <p>.btn.btn-group.filter.open button, .btn.btn-group.sort.open button{
                    background-color: #eee; 
                  }
                </p>
              </section>
              <section class="col col-lg-2">
                <p>Landing pages</p>
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