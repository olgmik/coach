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
  <body id="accordions">
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
              <hgroup class="main col col-lg-5">
                <h3>ACCORDIONS</h3>
                <p>Currently accordion exosts only on PDP page. This accordion utilized Collapse.js which is included in Bootstrap 3. It's responsive, however on the current PDP page it is set to max-width: 412px and so it is here. </p>
              </hgroup>
            </section>
          </article><!-- end of introduction text row's colum-12 -->
        </div><!-- end of introduction text row -->

        <div class="content row"><!-- the ENTIRE table row -->
          <section class="col col-lg-12"><!-- the ENTIRE table 12 columns -->

            <div class="content row table-row"><!-- table header row -->
              <section class="col col-lg-5">
                <h5 class="pull-left">Accordion</h5>
              </section>
              <section class="col col-lg-7">
                <h5 class="pull-left">HTML/CSS</h5>
              </section>
            </div><!-- end of the table header row -->

            <div class="horiz-rule-10"><!-- under-header rule -->
            </div>

            <div class="content row table-row"><!-- table content row 1 -->
              <section class="col col-lg-5">
                <div class="panel-group" id="accordion" >
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          Collapsible Group Item #1
                          <div class="accordion_icon"><span class="plus"></span></div>
                        </a>     
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          Collapsible Group Item #2
                          <div class="accordion_icon"><span class="plus"></span></div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Collapsible Group Item #3
                          <div class="accordion_icon"><span class="plus"></span></div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
              </div>
              </section>

              <section class="col col-lg-7">
                <p class="strong">HTML</p>
<xmp id="snippet-container">
  <div class="panel-group" id="accordion" >
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Collapsible Group Item #1
          <div class="accordion_icon"><span class="plus"></span></div>
        </a>     
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Collapsible Group Item #2
          <div class="accordion_icon"><span class="plus"></span></div>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
          <div class="accordion_icon"><span class="plus"></span></div>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</section>
</xmp>
<p class="strong">CSS</p>
<p>
@font-size-base:          16px;</br>
@line-height-base: 1.7; </br>
@line-height-computed:    17px; </br>
@panel-inner-border:          #ccc;</br>
@panel-bg: #fff; </br>
@panel-body-padding:  15px;</br>
@panel-heading-padding: 10px 15px;</br>

// Base class</br>

.panel-body{</br>
  padding-left: 0; </br>
}</br>
.panel-group {</br>
  font-size: @font-size-p; </br>
    .panel {</br>
      margin-bottom: 0;</br>
      border-radius: 0;</br>
      + .panel {</br>
        margin-top: 0;</br>
      }</br>
      background-color: @panel-bg;</br>
      border: 1px solid transparent;</br>
      border-radius: 0;</br>
      max-width: 412px; </br>
    border: none; </br>
    -webkit-box-shadow: 0; </br>
    box-shadow: 0;</br>
    }</br>
  .panel:last-child{</br>
    border-bottom: 1px solid @panel-inner-border; </br>
    border-radius: 0; </br>
  }</br>
    .panel-heading {</br>
      + .panel-collapse .panel-body {</br>
          border-top: 0;</br>
      }</br>
      background-color: @panel-bg;</br>
    color: @gray;</br>
    border-color: @stroke-color;</br>
    border: 0; </br>
    border-top: 1px solid @panel-inner-border; </br>
    border-radius: 0; </br>
    height: 30px; </br>
    vertical-align: middle; </br>
    padding: 0; </br>
    }</br>
    .panel-title {</br>
    display: inline-block; </br>
      font-size: 12px;</br>
      letter-spacing: 1px;</br>
      line-height: 30px;</br>
      width: 100%; </br>
  }</br>
}</br>
.accordion_icon{</br>
  display: inline-block; </br>
  float:right; </br>
}</br>
a.accordion-toggle:hover{</br>
  text-decoration: none;</br>
  color: black;  </br>
}</br>
.plus, .minus{</br>
  display: inline-block; </br>
  margin-left: 2px;</br>
  margin-bottom: 2px; </br>
    vertical-align: middle;</br>
    border-top:   none;</br>
    border-right: none;</br>
    order-left:  none; </br>
  content: ""; </br>
  background-size:contain;</br>
  width: 9px; </br>
  height: 9px; </br>
}</br>
.plus{</br>
  background: url("../../images/icons/pdp_sprite.png") no-repeat -95px 0px;</br>
}</br>
.minus{</br>
  background: url("../../images/icons/pdp_sprite.png") no-repeat -105px 0px;</br>
}</br>
// change color on hover</br>

a.accordion-toggle:hover .plus{</br>
  background: url("../../images/icons/pdp_sprite.png") no-repeat -95px -11px;</br>
}</br>
a.accordion-toggle:hover .minus{</br>
  background: url("../../images/icons/pdp_sprite.png") no-repeat -105px -11px;</br>
}</p></br>
              
            </div><!-- end of the table content row 1 -->
            
          </section><!-- end of the ENTIRE table 12 columns -->
        </div><!-- end of the entire table row-->

      </section><!-- end of main content area -->


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
    <script src="_/components/js/_myscript.js"></script>
  </body>
</html>