<?php
session_start();

if ($_SESSION['loggedIn'] != 2)
{
    header("location: SignIn.php");
}
?>


<html>

<head>
    <title>Manage Specifications Categories</title>
</head>

<body><br><br><br>
<form action="manageSpcsCat_2.php" method="post">
    <h1 align="center"><i>Gadget's Specifications Categories Info</i></h1><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Category Name</th>
            <th>Number of Gadgets</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            
            <td>
                Mobile
            </td>
            <td>2056</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            
            
            <td>Computer</td>
            <td>
                2018
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center">
            
            <td>Watch</td>
            <td>
                1067
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>Furniture</td>
            <td>
                794
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>Beauty</td>
            <td>
                555
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





    







    </table>
    <br><br>
    <div align="center">
      <a href="insertSpcs_2.php">Insert a New</a> | <a href="AdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>