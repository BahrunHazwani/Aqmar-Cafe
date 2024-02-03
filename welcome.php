<?php 

session_start();

if (!isset($_SESSION['username'])) {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Aqmar Cafe - Table Rservation</title>
</head>
<body style = "background-image: url('images/tablebg.jpg')">
    <?php echo "<h1 style=' color: #FFFFF0;font-family: Trebuchet MS, sans-serif;text-align:center;''>Welcome " . $_SESSION['username'] . "</h1>"; ?>
 <center>
    <table style=" font-family: Trebuchet MS, sans-serif;font-size: 20px;line-height: 1.6;background-color:black;opacity: 0.6; width: 70%; font-weight: 900;padding: 100px; margin:8px; ">

            <form action = "welcome.php" method="POST" >
                <tr><td><h2 style=" color: white;font-family: Trebuchet MS, sans-serif;text-align:center;">Table Reservation Form</h2></td></tr>
               <tr>
               <td> <label  style=" font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;f">First Name</label></td></tr>
                <tr> <td><input type="text" name="fname"  id= "fname" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;" required></td></tr>
                <tr><td><p style="font-size:15px;color:#E59866;font-family: Trebuchet MS, sans-serif;  ">First name must be 2-20 characters long</p></td></tr>
              

                  <tr><td><label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Last Name</label></td></tr>
              
                <tr><td><input type="text"  name="lname" id = "lname" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;" required></td></tr>

            <tr><td><p style="font-size:15px;color:#E59866;font-family: Trebuchet MS, sans-serif;  ">Last name must be 2-20 characters long</p></td></tr>
             

           
               <tr><td> <label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Enter Date</label></td></tr>
                <tr><td><input type="date" name="date1" id = "date1" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;" required></td></tr>

           
                <tr><td><label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Enter Time Zone</label></td></tr>
                <tr><td><select  name="time" id = "time" style=" width: 105%; height:100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: 900; font-size: 17px;" required>
                    <option value="12:00 - 16:00" style=" font-weight: bold;">12:00 - 16:00</option>
                    <option value="16:00 - 20:00" style=" font-weight: bold;">16:00 - 20:00</option>
                    <option value="20:00 - 00:00" style=" font-weight: bold;">20:00 - 00:00</option>
                </select></td></tr>
      
<tr><td><label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Enter number of Guests</label></td></tr>
                <tr><td><input type="number" min="1" name="numGuests" id = "numGuests" style=" width: 100%; height:100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: 900; font-size: 17px;"></td></tr>
                <tr><td><p style="font-size:15px;color:#E59866;font-family: Trebuchet MS, sans-serif;  " required>Minimum value is 1</p></td></tr>
           
            
               <tr><td> <label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Enter your Telephone Number</label></td></tr>
               <tr> <td><input type="tel" name="phone" id="phone"style= "width: 100.2%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;" required></td></tr>
               <tr> <td><p style="font-size:15px;color:#E59866;font-family: Trebuchet MS, sans-serif;  ">Telephone must be 6-20 characters long</p></td></tr>
           

               <tr><td> <label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 20px;">Enter extra Comments</label></td></tr>
               <tr><td> <textarea  name="comments"  id = "comments" rows="3" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;"></textarea></td></tr>
               <tr><td> <p style="font-size:15px;color:#E59866;font-family: Trebuchet MS, sans-serif;  ">Comments must be less than 200 characters</p></td></tr>
               

                <tr><td><label  style="font-weight: bold; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 18px"><input type="checkbox" required> I accept the Terms of Use &amp; Privacy Policy</label></td></tr>
         
           
                <tr><td><button type="submit" name="submit" value="submit" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:104.5%">Submit Reservation</button></td></tr>
            </form>
        </table>
        </center>

    <div><br>
<center><a href=  "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
    </div>
</body>
</html>
    
<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "case study" ; 

$conn = mysqli_connect($server , $username, $password, $dbname);
    
if(isset($_POST['submit'])){
    
    
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date1']) && !empty($_POST['time']) && !empty($_POST['numGuests']) && !empty($_POST['phone']) && !empty($_POST['comments'])){
        
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $date1 = $_POST['date1'];
            $time = $_POST['time'];
            $numGuests = $_POST['numGuests'];
            $phone = $_POST['phone'];
            $comments = $_POST['comments'];

        
        $query = "insert into reservation(fname,lname,date1,time,numGuests,phone,comments) values('$fname', '$lname', '$date1', '$time', '$numGuests', '$phone', '$comments')";
        
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        
        if($run){
                echo "<script>alert('Wow! Your Reservation Completed.')</script>";

                
        }
        else {
            echo "Form Not Submitted";
            
        }
    }
    
else {
        echo "All fields required";
    }
}
 
?>
