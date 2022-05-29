<html>
<head>
  <style>
       .menu-btn {
            
            color: white;
            padding: 5px;
            font-size: 20px;
            font-weight: bolder;
            font-family: "Times New Roman", Times, serif;
	    
            border: none;
        }
        
        .don {
            background-color: BLACK;
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
        }
        
        .do {
            color: #F6C667;
            font-weight: bolder;
            font-size: 40px;
	    
        }
        
.do1 {
            color: white;
            font-weight: bolder;
            font-size: 25px;
        }

.do2 {
            color: #fa8072;
            font-weight: bolder;
            font-size: 25px;
        }
.do3 {
            color: black;
            font-weight: bolder;
            font-size: 40px;
        }
        .dropdown-menu {
            position: relative;
            display: inline-block;
        }
        
        .menu-content {

            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            z-index: 1;
        }
        
        nav {
            text-align: right;
	    font-family: "Times New Roman", Times, serif;
	    font-size: 20px;
      background-color: #F6C667;
	    
        }
        
        .links,
        .links-hidden {
            display: inline-block;
            color: rgb(255, 255, 255);
            padding: 5px 5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        
        .links-hidden {
            display: block;
            text-align: center;
        }
        
        .links {
            display: inline-block;
        }
        
        .links-hidden:hover,
        .links:hover {
            background-color: rgb(8, 107, 46);
        }
        
        .dropdown-menu:hover .menu-content {
           display: block;
        }
      .dropdown-menu:hover .menu-btn {
            background-color: rgb(8, 107, 46);
        }
        img {
        border-radius: 50%;
        border: 5px solid #555;
        }


        body {
               align-items: center;
               text-align: center;
               background-image:url("form-background-1024x683.jpg");
               background-repeat: no-repeat;
               background-size: cover;
            }
</style>
</head>
<body>
   
<b><a href ="main.html">

<div class="do"> <img src="child-care-logo-design-template.jpg"> FORTUNATE FUTURE</div></a></b>

 <br>
<br>
 
    <nav>
        <div class="dropdown-menu">
	
            <div class="menu-btn">WHO WE ARE</div>	
            <div class="menu-content">
                <a class="links-hidden" href="Vision&Mission.html">VISION and MISSION</a>
               <a class="links-hidden" href="about.html" >ABOUT US</a>
            </div>
        </div>

        <a class="links" href="gallery1.html">GALLERY</a>
        <div class="dropdown-menu">
            <div class="menu-btn">WHAT WE DO</div>
            <div class="menu-content">
                <a class="links-hidden" href="volunteer.php">VOLUNTEER</a>
               <a class="links-hidden" href="events.html">EVENTS/PROGRAMS</a>
            </div>
        </div>

	<a class="links" href="feedback.php">FEEDBACK</a>
        <a class="links" href="our team.php">EMPLOYEES</a>
        <a class="links" href="contact.html">CONTACT US</a>
        <div class="don">
            <a class="links" href="Donate.php">DONATE</a>
        </div>

    </nav>  
  
    <br><br>
<div class="do"><u>VOLUNTEER</u></div></b>

<?php
// define variables and set to empty values
$name = $email = $Program = $gender = $Qualification ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $Program = test_input($_POST["Program"]);
  $Qualification = test_input($_POST["Qualification"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<br>
<br>
<br>

<div class="do2">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<br> <input type="text" name="name" required>
  <br><br>
  E-mail:<br> <input type="text" name="email" required>
  <br><br>
Program:<br>
  <input type="radio" name="Program" value="Project_Khushi">Project_Khushi
  <input type="radio" name="Program" value="Pavement_Project">Pavement_Project
  <input type="radio" name="Program" value="Make_a_change">Make_a_change
  <br><br>
 
  
  Qualification:<br> <textarea name="Qualification" rows="5" cols="30" required></textarea>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>
</div>


<div class="do1">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $Program;
echo "<br>";
echo $Qualification;
echo "<br>";
$conn = mysqli_connect("localhost","root","","ngo");

$sql = "INSERT INTO `volunteer` (`name`, `email`, `Program`, `Qualification`) VALUES ('$name', '$email', '$Program', '$Qualification')";
$result = mysqli_query($conn,$sql);

if($conn){
  echo "connected";
}




?>
</div>
</body>
</html>

<!--INSERT INTO `volunteer` (`name`, `email`, `Program`, `Qualification`) VALUES ('$name', 'kashyap.pari88@gmail.com', 'Project_Khushi', 'B.Tech');-->