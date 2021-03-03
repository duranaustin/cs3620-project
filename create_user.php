<!-- 
<form method="POST" action="user_insert.php">

    Username/Email:<input type="text" name="username"/><br />

    First Name:<input type="text" name="firstName"/><br />

    Last Name:<input type="text" name="lastName"/><br />

    Password:<input type="text" name="password"/><br />

    <input type="submit" value="Create User"/>

</form> -->

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
    <form class="form-signin" method="POST" action="user_insert.php">
      <h1 class="h3 mb-3 font-weight-normal">Create a user</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputFirstName" class="sr-only">First Name</label>
      <input type="firstName" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
      <label for="inputLastName" class="sr-only">Last Name</label>
      <input type="lastName" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Create User</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>