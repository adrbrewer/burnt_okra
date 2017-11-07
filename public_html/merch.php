<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Merch</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type ="text/css" href = "style_sheet.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">

  </head>

  <body>

    <?php include '../resources/navigation.php'; ?>

    <div class="container">
      <div class="below_menu_container">
      </div>
    </div>

     <header>
         <img src="images/burnt_okra_logo.png" alt="Burnt Okra Logo" height="150" Width="300"/>
     </header>
     <h1>
        Merchandise
    </h1>

      <table>
            <tbody>
                <tr>
                    <th>Tee Shirts
                    <p> All shirts are $20 and come in White, Black, and Grey.
                    </th>
                    <th>Wristbands
                      <p> All wristbands are $4 and come in White, Black, Red, and Green.
                    </th>
                </tr>
                <tr>
                  
                    <td><img src="images/i_heart_shirt.JPG" alt="I heart Burnt Okra" style="width:375px;height:500px;"/></td>
                    <td><img src="images/rules_wristband.JPG" alt="Burnt Okra Rules Wristband" style="width:500px;height:375px;"/></td>
                </tr>
                <tr>
                    <td><img src="images/rules_shirt.JPG" alt="Burnt Okra Rules" style="width:375px;height:500px;"/></td>
                    <td><img src="images/i_heart_wristband.JPG" alt="I Heart Burnt Okra Wristband" style="width:500px;height:375px;"/></td>
                </tr>
            </tbody>
        </table>

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