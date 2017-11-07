<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>

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
         <h1>Sign up</h1>
             <img src="images/burnt_okra_logo.png" alt="Burnt Okra Logo" height="150" Width="300"/>
     </header>
     <div class="assign 3">
     <p id= "seeother"> See our other pages for more information.</p>
     </div>

    <!--got code from Bootsnip.com-->

        <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="#" role="form">
						<div class="form-group">
							<h2>Create account</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Your name</label>
							<input id="signupName" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Email</label>
							<input id="signupEmail" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmailagain">Email again</label>
							<input id="signupEmailagain" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Password</label>
							<input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password again</label>
							<input id="signupPasswordagain" type="password" maxlength="25" class="form-control">
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
						</div>
						<p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						<hr>
						<p></p>Already have an account? <a href="#">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

  <?php include '../resources/footer.php'; ?>

</body>
