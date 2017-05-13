<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Vission - Forums</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="logo">
          <h1 id="title">Vission Roleplay</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="forums">Forums</a></li>
            <li><a href="shop">Shop</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    <section id="server-showcase">
      <div class="container">
        <h1>DarkRP</h1>
        <p>We offer a DarkRP server with lots of custom features that improve the overall user experience!</p>
      </div>
    </section>
    
    <section id="auth">
      <h1>Login</h1>
      <form action="login.php" method="POST">
        Username: <input type="text" name="uid"> <br>
        Password: <input type="password" name="pwd"> <br>
        <button type="submit">Login</button>
      </form> 
      <h1>Register</h1>
      <form action="register.php" method="POST">
        Username: <input type="text" name="uid"> <br>
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="pwd"> <br>
        Repeat Password: <input type="password" name="pwd2"> <br>
        <button type="submit">Login</button>
      </form>
    </section>
  </body>
</html>