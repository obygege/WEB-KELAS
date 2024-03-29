

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login ke akun anda</title>
    <style>
        .body-login {
  background: rgba(0, 0, 0, 0.9) url(assets/images/polsky.jpg);
  background-size: cover;
  width: 100%;
  height: 100vh;
  background-blend-mode: darken;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}

.login {
  background-color: white;
  width: 300px;
  height: 370px;
  border-radius: 10px;
  background-color: rgba(107, 107, 107, 0.4);
  text-align: center;
}

.login h1 {
  padding: 20px;
  color: rgba(255, 255, 255, 0.9);
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  text-decoration: underline;
  text-decoration-color: #bfff00;
}

.login .input-group {
  border: none;
  margin-bottom: 25px;
  margin-top: 10px;
}

.login .input-group input {
  height: 40px;
  width: 80%;
  padding: 0 20px;
  box-sizing: border-box;
  font-size: 12px;
  border: none;
  background-color: rgba(255, 255, 255, 0.4);
  border-radius: 10px;
  color: white;
}

.login .input-group span {
  color: white;
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  padding: 10px;
  margin-top: 20px;
}

.button {
  background-color: #bfff00;
  width: 100px;
  height: 40px;
  border-radius: 5px;
  font-style: none;
  align-items: center;
  display: flex;
  justify-content: center;
  text-align: center;
  margin: auto;
  box-shadow: 2px 3px 1px rgba(0, 0, 0, 0.8);
}

.button a {
  color: rgb(0, 0, 0);
  text-decoration: none;
  font-family: sans-serif;
  font-size: 20px;
}

.button:hover {
  background-color: rgba(255, 255, 255, 0.7);
  transition: all ease-in-out;
}

.button a:hover {
  color: rgba(0, 0, 0, 0.8);
  transition: all ease-in-out;
}

.login h3 {
  color: white;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 10px;
  padding-top: 12px;
}

.login h3 span a {
  color: white;
  text-decoration: none;
}

.login h3 span a:hover {
  color: rgba(19, 0, 189, 0.8);
  transition: all ease-in-out;
}

.login h4 {
  padding-top: 10px;
}

.login h4 a {
  color: white;
  text-decoration: none;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 12px;
}

.login h4 a:hover {
  color: rgba(19, 0, 189, 0.8);
  transition: all ease-in-out;
}

.h22 {
  background-color: #bfff00;
  width: 100px;
  height: 40px;
  border-radius: 5px;
  font-style: none;
  align-items: center;
  display: flex;
  justify-content: center;
  text-align: center;
  margin: auto;
  box-shadow: 2px 3px 1px rgba(0, 0, 0, 0.8);
}

.h22:hover {
  background-color: rgba(255, 255, 255, 0.7);
  transition: all ease-in-out 0.1s;
}
    </style>
  </head>
  <body class="body-login">
    <form action="proses-login.php" method="POST">
      <!-- Untuk background form -->
      <div class="login">
        <!-- background-form end -->

        <!-- Title form -->
        <h1>FORM LOGIN</h1>
        <!-- Title form end -->

        <!-- Form username -->
        <div class="input-group">
          <input type="text" name="username" placeholder="username" />
          <span>username/email</span>
        </div>
        <!-- form username end -->

        <!-- form password -->
        <div class="input-group">
          <input type="password" name="password" placeholder="password" />
          <span>password</span>
        </div>
        <!-- form password end -->

        <button type="submit" class="h22">Masuk</button>

      </div>
    </form>
  </body>
</html>
