<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>User Confirmation</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>User Confirmation Info</i></h1>
    <table align="center" border="" height="350" width="700">

        <tr align="center">
            <th>User Confirmation ID</th>
            <th>User Name</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            <td>
                1901
            </td>
            <td>
                xyz
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                1902
            </td>
            <td>
                abc
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>


        <tr align="center">
            <td>
                1914
            </td>
            <td>
                mr.x
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>


        <tr align="center">
            <td>
                1953
            </td>
            <td>
                mr.y
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                1997
            </td>
            <td>
                mr.z
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>
        <tr align="center">
            <td>
                2022
            </td>
            <td>
                zabc
            </td>
            
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                2023
            </td>
            <td>
                ab123
            </td>

            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>
    </table><br/>
    <div align="center">
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>