<?php
include_once('pdo1.php');
$signupdata=new Database_Connection();
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['locality']) && isset($_POST['state']))
{
// Posted Values
$Name=$_POST['name'];
$Username=$_POST['username'];
$Useremail=$_POST['email'];
$locality = $_POST['locality'];
$Userpassword=md5($_POST['psw']);
$state = $_POST['state'];
$sql = $signupdata->checking($Name);

if($sql->num_rows > 0)
{
  echo "<script>alert('Username exists Try something else');</script>";
  echo "<script>window.location.href='sign_up.php'</script>";
}
else
{
$sql=$signupdata->signup($Name,$Username,$Useremail,$Userpassword,$locality,$state);
if($sql)
{
echo "<script>window.location.href='login.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='sign_up.php'</script>";
}
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Eclec | SIGN-UP</title>
    <link rel="stylesheet" href="../CSS/login.css?v=<?php echo time(); ?>">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
  <img class="nhdd_logo" src="../Images/NHDD_logo.png" alt="NHDD logo">
    <div>
    <div class="login__holder">
      <div class="login__container">
        <img class="bg__img" src=" ../images/half background.jpg" />
        <div class="login__field">
          <h1 class="login__name">Sign Up</h1>
          <form method
          ="POST">
          <input
            type="text"
            class="user__field__signup"
            placeholder="Enter name"
            name="username"
            required
          />
          <input
            type="text"
            placeholder="Enter Username"
            name="name"
            required
          />
        	<input
            class="field"
            type="text"
            placeholder="Enter locality(just one word)"
            name="locality"
            required
          />
<input
            type="text"
            placeholder="Enter State"
            name="state"
            required
          />
          <input
            type="text"
            placeholder="Enter email"
            name="email"
            required
          />
          <input
            class="field"
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />
          <input
            class="field"
            type="password"
            placeholder="Renter Password"
            name="password"
            required
          />
          <button class="BUTTON_KMY">Sign Up</button>
        </form>
        </div>
      </div>
    </div>
    </div>
  </body>
  <!-- <script src="../Script/Common.js"></script> -->
 </html>
