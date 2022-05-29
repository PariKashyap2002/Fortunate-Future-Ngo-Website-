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
            color: #FAEEE7;
            font-weight: bolder;
            font-size: 25px;
        }
.do3 {
            color: black;
            font-weight: Italic;
            font-size: 20px;
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
               background-image:url("images (1).jfif");
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
        <a class="links" href="Our team.php">EMPLOYEES</a>
        <a class="links" href="contact.html">CONTACT US</a>
        <div class="don">
            <a class="links" href="Donate.php">DONATE</a>
        </div>

    </nav>  
    <br><br>
    <div class="do"><i>FEEDBACK</i></div></b>

<?php
// define variables and set to empty values
$name = $email = $Experience =$volunteer = $objective = $assistance = $Suggestions ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $Experience = test_input($_POST["Experience"]);
  $volunteer = test_input($_POST["volunteer"]);
  $objective = test_input($_POST["objective"]);
  $assistance = test_input($_POST["assistance"]);
  $Suggestions = test_input($_POST["Suggestions"]);
  
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
  <br><br><br><br>
  E-mail:<br> <input type="text" name="email" required>
  <br><br><br><br>
How was your overall experience?<br>
  <input type="radio" name="Experience" value="Poor">Poor
  <input type="radio" name="Experience" value="Good">Good
  <input type="radio" name="Experience" value="Excellent">Excellent
  <br><br><br><br>

 How satisfied are you with your experience at our volunteer program?<br>
  <input type="radio" name="volunteer" value="Very Satisfied">Very Satisfied
  <input type="radio" name="volunteer" value="Satisfied">Satisfied
  <input type="radio" name="volunteer" value="Dissatisfied">Dissatisfied
<br><br><br><br>

 According to you, were Ngo's objectives fullfilled?<br>
  <input type="radio" name="objective" value="Yes">Yes
  <input type="radio" name="objective" value="No">No
<br><br><br><br>

 Please rate your satisfaction with the assistance by the staff members<br>
  <input type="radio" name="assistance" value="Poor">Poor
  <input type="radio" name="assistance" value="Good">Good
  <input type="radio" name="assistance" value="Excellent">Excellent
<br><br> <br><br>
  
  Any Suggestions:<br> <textarea name="Suggestions" rows="5" cols="30" required></textarea>
  <br><br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

<br><br>
<div class="do1">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $Experience;
echo "<br>";
echo $volunteer;
echo "<br>";
echo $objective;
echo "<br>" ;
echo $assistance;
echo "<br>";  
echo $Suggestions;
echo "<br>";
$conn = mysqli_connect("localhost","root","","ngo");

$msql = "INSERT INTO `feedback` (`name`, `email`, `Experience`, `volunteer`, `objective`, `assistance`, `Suggestions`) VALUES ('$name', '$email', '$Experience', '$volunteer', '$objective', '$assistance', '$Suggestions')";
$result = mysqli_query($conn,$msql);

if($conn){
  echo "connected";
}




?>
</div>
</body>
</html>

<!--INSERT INTO `feedback` (`name`, `email`, `Experience`, `volunteer`, `objective`, `assistance`, `Suggestions`) VALUES ('pari', 'kashyap.pari88@gmail.com', 'Good', 'Satisfied', 'Yes', 'Excellent', 'According to my experience website can be more dynamic. ');-->