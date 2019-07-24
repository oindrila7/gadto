<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>rePost Ad information</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Registered User Info</i></h1>
    <table align="center">

        <tr>
            <td>
                        Filter By:

                        <select>
                            <option>All</option>
                            <option>Active</option>
                            <option>Blocked</option>

                        </select>
            </td>
        </tr>
    </table>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>User Name</th>
            <th>Status</th>
            <th>Accepted Admin</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            <td>
                mrx
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Block" onclick="window.location.href='#.html'" />

            </td>
        </tr>


        <tr align="center">
            <td>
                abc
            </td>
            <td>
                Blocked
            </td>
            <td>imn.admin</td>
            
            <td>
                <input type="button" style="height:20px;width:60px" value="Unblock" onclick="window.location.href='#.html'" />

            </td>
        </tr>

        <tr align="center">
            <td>
                xyz
            </td>
            <td>
                Blocked
            </td>
            <td>abc012</td>
            
            <td>
                <input type="button" style="height:20px;width:60px" value="Unblock" onclick="window.location.href='#.html'" />

            </td>
        </tr>


        <tr align="center">
            <td>
                mry
            </td>
            <td>
                Active
            </td>
            <td>xyz34</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Block" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            <td>
                mr.z
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Block" onclick="window.location.href='#.html'" />

            </td>
        </tr>




    </table>
    <div align="center"><br>
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>