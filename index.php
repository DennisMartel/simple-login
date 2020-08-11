<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>login php y js</title>
</head>

<body>
    <!-- singin form -->
    <div class="login-box">
        <img src="image/avatar.svg" class="avatar-login" alt="avatar login">
        <h1 class="login-title">login</h1>
        <form id="form" method="POST">
            <!-- email input -->
            <label for="email">email</label>
            <input type="email" name="email" id="email" class="input-field">

            <!-- password input-->
            <label for="password"">password</label>
            <input type="password" name="password" id="password" class="input-field">
            
            <!-- submit input-->
            <input type="submit" value="login" class="btn-submit">
            <a href="#" class="link-login">forgot password</a>
        </form>
    </div>
    <div id="alert" class="alert"></div>

    <script src="js/app.js"></script>
</body>

</html>