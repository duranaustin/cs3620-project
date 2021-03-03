<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="show_insert.php">
      <h1 class="h3 mb-3 font-weight-normal">Add a Show</h1>
      <label for="inputName" class="sr-only">Show Name</label>
      <input type="name" id="name" name="name" class="form-control" placeholder="Show Name" required autofocus>
      <label for="inputDescription" class="sr-only">Show Description</label>
      <input type="description" id="description" name="description" class="form-control" placeholder="Show Description" required>
      <label for="inputRating" class="sr-only">Show Rating</label>
      <input type="rating" id="rating" name="rating" class="form-control" placeholder="Show Rating" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Add Show</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>