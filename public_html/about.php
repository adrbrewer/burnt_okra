<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type ="text/css" href = "style_sheet.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    </head>

  <body>
    <?php include '../resources/navigation.php'; ?>

    <div class="container">
      <div class="below_menu_container">
      </div>
    </div>

         <!--code gotten from Bootsnipp.com-->
  

    <div class="container">
      <div class="row">
        <div class='col-md-offset-2 col-md-8 text-center'>
        <h2>Quotes from our amazing fans!</h2>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-offset-2 col-md-8'>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">

              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                         <img class="img-circle" src="images/burnt_okra_logo.png" alt="Burnt Okra Logo" style="width: 120px;height:120px;"/>
                    </div>
                    <div class="col-sm-9">
                      <p>I love Burnt Okra! I've gone to almost every show!</p>
                      <small>Ashley, fan for 10 years</small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                        <img class="img-circle" src="images/titlepage.jpg" alt="Title Page" style="width: 120px;height:120px;">
                    </div>
                    <div class="col-sm-9">
                      <p>I don't know how I've lived this long without knowing who Burnt Okra was! They're great!</p>
                      <small>Jacob, just discovered Burnt Okra</small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                        <img class="img-circle" src="images/jim_johnson.jpg" alt="Jim Johnson" style="width: 120px;height:120px;">
                    </div>
                    <div class="col-sm-9">
                      <p>This band appels to everyone of all ages. My son loves Burnt Okra and it makes me so happy that he enjoys the concerts I take him to. </p>
                      <small>Mike Jenson</small>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>

            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>

         <h1>
            About Burnt Okra
        </h1>
               <div class="mycolor col-xs-6">
                   <p>Jim Johnson is the lead drummer for Burnt Okra. He is 40 years old and currently resides in Urbandale, Iowa
                   with his wife and two kids. When he's not rocking, he enjoys spending time fishing and playing pick-up basketball. You can find Jim on Twitter: @Jimmyj.
                   <img src="images/jim_johnson.jpg" alt="Jim Johnson" style="width:375px;height:500px;"/>
               </div>

                <div class="mycolor col-xs-6">
                    <img src="images/sandy_wagner.jpg" alt="Sandy Wagner" style="width:375px;height:500px;"/>
                    <p>Sandy Wagner is the lead guitarist for Burnt Okra. She is 37 years old and lives in Zearing, Iowa
                    with her husband and daughter Hailey. When she is not rocking, she enjoys spending her time riding motorcycles
                    or going to the park with Hailey. Want to see more in the life of a rocker and her child? Follow her on Instagram: @SandynHailey to see inside the life!
                    <img src="images/ben_jeffery.jpg" alt="Ben Jeffery" style="width:375px;height:500px;"/>
                    <p>Ben Jeffery is the lead vocalist for Burnt Okra. He is 38 years old and lives in Ames, Iowa.
                    When he is not rocking he enjoys spending his time with his pet lizards and knitting. Ben even loves cuddling his lizards any chance he gets.
                </div>

        <a href="#" class="btn btn-default">Main Page</a>
        <a href="#" class="btn btn-primary">Sign Up Here</a>
        <a href="#" class="btn btn-success">Login Here</a>
        <a href="#" class="btn btn-info">Info</a>
        <a href="#" class="btn btn-warning">Prices</a>
        <a href="#" class="btn btn-danger">Copyright</a>

          <?php include '../resources/footer.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>