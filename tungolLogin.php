<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="tungolLogin.css">
    <title>Student Log in</title>
  <script>
    function clearForm(){
        document.getElementById("loginForm").reset();
    }
    </script>

</head>
<body>
    <center>
   
<form id="loginForm" action="tungolLoginCheck.php" method="post">
     <h1> Student Login</h1>
    <table>
        <tr>
            <td><label for="tungolUsername" >Student ID</label></td>
            <td><input type="text" name="tungolUsername" id="tungolUserName" placeholder="MA-12345678" required></td>
        </tr>

        <tr>
            <td><label for="tungolPassword" >Password</label></td>
            <td><input type="password" name="tungolPassword" id="tungolPassword" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="tungolLogin" id="tungolbtn1">Login</button>
               
            </td>
        </tr>
</table>
 <p> Dont have an account? <a href="tungolRegistration.php">Sign Up</a>
</form>

</center>
</body>
</html>