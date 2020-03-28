<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <img src="image.png" alt="not loading..">
</head>
<h1>Register Here</h1>
<body class="main">
     <div><form action="registration.php" method="POST">
      <table id="table">
       <tr>
        <td>Name :</td>
        <td><input type="text" name="user" required="manadatory !!"></td>
       </tr>
       <tr>
        <td>Branch</td>
        <td><input type="text" name="branch" required="manadatory !!"></td>
       </tr>
       <tr>
        <td>Year</td>
        <td><input type="text" name="year" required="manadatory !!"></td>
      </tr>
       <tr>
        <td>Email :</td>
        <td><input type="email" name="email" required="manadatory !!"></td>
       </tr> 
       <tr>
        <td>Phone no :</td>
        <td>
         <input type="text" name="phone" required="manadatory !!">
        </td>
       </tr>
       <tr>
        <td>
        <button><input type="submit" value="Submit"></button>
      </td>
       </tr>
      </table>
     </form>
     </div>
     <div>
      <h1>Login Here</h1>
      <form action="validation.php" method="POST">
      <table id="table">
       <tr>
        <td>Name :</td>
        <td><input type="text" name="user" required="manadatory !!"></td>
       </tr>
       <tr>
        <td>Branch</td>
        <td><input type="text" name="branch" required="manadatory !!"></td>
       </tr>
       <tr>
        <td>Year</td>
        <td><input type="text" name="year" required="manadatory !!"></td>
      </tr>
       <tr>
        <td>Email :</td>
        <td><input type="email" name="email" required="manadatory !!"></td>
       </tr> 
       <tr>
        <td>Phone no :</td>
        <td>
         <input type="text" name="phone" required>
        </td>
       </tr>
       <tr>
        <td>
        <button><input type="submit" value="Submit"></button>
      </td>
       </tr>
      </table>
     </form>

</body>
</html>
