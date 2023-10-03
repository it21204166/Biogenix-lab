<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registr.css">
</head>
<body>
    <header id="showcase">
        <h1>Welcome to BIOGENIX MEDI LAB</h1>
        <p>This is to our Registration page. enter the access your laboratory services</p>
        <br>
        <br>
        <div id="new">
    <form action="action_page.php">   
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="Firstname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="lastname"><br>
      <form action="/action_page.php">
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"><br>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" placeholder="email"><br>
            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
            <label for="Identity card no">Identity card no:</label>
            <input type="text" id="Identity card no" name="Identity card no"
             pattern="[A-Za-z]{3}" title="Identity card no" placeholder="identity card"><br>
             <label>Select Your Gender</label>
             <input type="radio" name="gender"/>Male
             <input type="radio" name="gender"/>Female
            <br>
            <label for="pin">Enter Password:</label><br>
            <input type="text" id="Password" name="pin" size="12" placeholder="password">
            <br>
            <label for="pin">ReEnter Password:</label>
            <input type="text" id="Password" name="pin" size="12" placeholder="reenter password"><br><br>
            <input type="submit" value="Submit" class="button">
            <input type="reset" value="Reset" class="button">

          </form>
        </div>
        
    </ul>
    </nav>
      </form>
    </center>
</body>
</html>