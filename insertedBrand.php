<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>

<html>

<head>
    <title>FORM</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <div>
    <br/>

    <form action="insertedBrand.php" method="post">
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <table align="center" border="1" height="300" width="800">
                <tr>
                
                    <th colspan="4">
                        <h1>Successfully Inserted a Brand Category</h1><br/>
                        <img src="tick.jpg" height="50" width="50" </th>
                        <br/> Great

                </tr>
            </table>
            <table align="center" height="100" width="800">
                <tr>
                    <td>
                        &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="button" style="height:50px;width:100px" value="Finish" onclick="window.location.href='superAdminPortal.php'" />
                    </td>
                </tr>
                </>
            </table>
        </form>
    </div>
    </form>
</body>

</html>