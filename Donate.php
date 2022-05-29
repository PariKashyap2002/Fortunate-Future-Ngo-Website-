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
            color: #06113C;
            font-weight: bolder;
            font-size: 40px;
          
        }
        
.do1 {
            color: #000000;
            font-weight: bolder;
            font-size: 25px;
        }

.do2 {
            color: #D4ECDD;
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
      background-color: tomato;
	    
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
               background-image:url("donations-box.jpg");
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
    <br><br><br><br><br>
    <div class="do"><u>DONATE</u></div></b>

    <?php
   
    $Card_owner = $Address = $Age = $Card_no = $Exp = $Cvv = $Amt = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $Card_owner = test_input($_POST["Card_owner"]);
      $Address = test_input($_POST["Address"]);
      $Age = test_input($_POST["Age"]);
      $Card_no = test_input($_POST["Card_no"]);
      $Exp = test_input($_POST["Exp"]);
      $Cvv = test_input($_POST["Cvv"]);
      $Amt = test_input($_POST["Amt"]);
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
  Card Owner:<br> <input type="text" name="Card_owner" required>
  <br><br>
  Address:<br> <input type="text" name="Address" required>
  <br><br>
  Age:<br> <input type="text" name="Age" required>
  <br><br>
  Card Number:<br> <input type="text" name="Card_no" required>
  <br><br>
  Expiry:<br> <input type="text" name="Exp" required>
  <br><br>
  Cvv:<br> <input type="text" name="Cvv" required>
  <br><br>
  Amount:<br> <input type="text" name="Amt" required>
  <br><br>

 
  <input type="submit" name="submit" value="Pay Here!">  
</form>
</div>


<div class="do1">
<?php
echo "<h2>Your Input:</h2>";
echo $Card_owner;
echo "<br>";
echo $Address;
echo "<br>";
echo $Age;
echo "<br>";
echo $Card_no;
echo "<br>";
echo $Exp;
echo "<br>" ;
echo $Cvv;
echo "<br>";
echo $Amt;
echo "<br>";

$conn = mysqli_connect("localhost","root","","ngo");

$sql = "INSERT INTO `donate` (`Card_owner`, `Address`, `Age`, `Card_no`, `Exp`, `Cvv`, `Amt`) VALUES ('$Card_owner', '$Address', '$Age', '$Card_no', '$Exp', '$Cvv', '$Amt')";
$result = mysqli_query($conn,$sql);

if($conn){
  echo "connected";
}




?>
</div>
</body>
</html>
<!--INSERT INTO `donate` (`Card_owner`, `Address`, `Age`, `Card_no`, `Exp`, `Cvv`, `Amt`) VALUES ('Pari Kashyap', '88, Subhash Nagar, Pal Road, Jodhpur', '19', '1234567891234567', '2025-08-20', '456', '45645');-->