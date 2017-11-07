<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Events </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type ="text/css" href = "style_sheet.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">

  </head>

  <body>

       <?php include '../resources/navigation.php'; ?>

        <div class="container"></div>
          <div class="below_menu_container"></div>
         
         <header>
             <img src="images/burnt_okra_logo.png" alt="Burnt Okra Logo" height="150" Width="300"/>
         </header>

        <div class="container"></div>

    <h2>Agenda</h2>
        <p class="lead">
            Below you will see our upcoming events on our calendar, if you would like to come to one of the shows on the calendar, please contact the ticketing office at the venue we are performing at.
        </p>

        <div class="agenda"></div>
            <div class="table-responsive"></div>
                <table class="table table-condensed table-bordered"></table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="agenda-date"></td>
                            <td class="active" rowspan="1">
                                <div class="dayofmonth">18</div>
                                <div class="dayofweek">Wednesday</div>
                                <div class="shortdate text-muted">July, 2018</div>
                            </td>
                            <td class="agenda-time">
                                9:30 PM
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Show in Cedar Rapids
                                </div>
                            </td>
                        </tr>
                    <tr>
                            <td class="agenda-date rowspan="1"></td>
                            <td class = "active">

                                <div class="dayofmonth">19</div>
                                <div class="dayofweek">Thursday</div>
                                <div class="shortdate text-muted">July, 2018</div>
                            </td>
                            <td class="agenda-time">
                                9:30 PM
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Show in Davenport
                                </div>
                            </td>
                        </tr>
                    <tr>
                            <td class="agenda-date"></td>
                            <td class="active" rowspan="1">
                                <div class="dayofmonth">27</div>
                                <div class="dayofweek">Friday</div>
                                <div class="shortdate text-muted">July, 2018</div>
                            </td>
                            <td class="agenda-time">
                                9:30 PM
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Show in West Des Moines
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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