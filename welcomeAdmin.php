<html>
<head>
    <tittle>Aqmar Cafe - Generate Info</tittle>

</head>
<body style = "background-image: url('images/welcomeadmin.jpg');">
        <h1 style=" color: Orange;font-family: Trebuchet MS, sans-serif;text-align:center;">Welcome Admin</h1><br>
    <h2 style=" color: white;font-family: Trebuchet MS, sans-serif;text-align:center;">Generate Info</h2><br>
    <center>


        <div class="container">
            <form action="" method="POST">
                <label style="font-weight: bold;font-size: 20px; color: gold;font-family: Trebuchet MS, sans-serif;font-size: 25px;">Enter Date</label><br>
                <input type="date" name="date1" id = "date1" style= "width: 30%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;" ><br>
                <input type="submit" name="search" class="btn" value="Search" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:10%">
            </form></div></center>
            <center><table style="font-family: Trebuchet MS, sans-serif;font-size: 20px;line-height: 1.6;background-color:black;opacity: 0.8; width: 80%; font-weight: 900;padding: 50px; margin:50px;">"
           
                        <tr>
                            <th style = "color:gold; background-color:brown;">ID</th>
                            <th style = "color:gold; background-color:brown;">First Name</th>
                            <th style = "color:gold; background-color:brown;">Last Name</th>
                            <th style = "color:gold; background-color:brown;">Date</th>
                            <th style = "color:gold; background-color:brown;">Time</th>
                            <th style = "color:gold; background-color:brown;">Number of Guest</th>
                            <th style = "color:gold; background-color:brown;">Phone</th>
                            <th style = "color:gold; background-color:brown;">Comments</th>
                        <tr><br>
                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"case study");

                    if(isset($_POST['search']))
                    {
                        $date1 = $_POST['date1'];

                        $query = "SELECT * FROM reservation where date1 ='$date1' ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['id'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['fname'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['lname'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['date1'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['time'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['numGuests'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['phone'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['comments'];?></td>
                            </tr>

                            <?php
                        }
                    }
?>
            </table>
    </center>
     <div><br>
        
        <center><a href=  "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
    </div>
</body>
</html>