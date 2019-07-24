<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>

<html>

<head>
    <title>Manage Exist Admin</title>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Exist Admin Info</i></h1>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>User Name</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            
            <td>
                mr.x
            </td>
            <td>Active</td>
            <td>
                21-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            
            <td>
                imr
            </td>
            <td>Active</td>
            <td>
                24-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center">
            
            <td>
                itsi
            </td>
            <td>Leave</td>
            <td>
                25-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>
                mr.y
            </td>
            <td>Active</td>
            <td>
                26-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>
                mr.abc
            </td>
            <td>Active</td>
            <td>
                26-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>
                mr.z
            </td>
            <td>Active</td>
            <td>
                27-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>
                mr.zo
            </td>
            <td>Leave</td>
            <td>
                31-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







    </table>
    <br><br>
    <div align="center">
      <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>