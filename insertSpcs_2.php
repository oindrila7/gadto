<?php
session_start();

if ($_SESSION['loggedIn'] != 2)
{
    header("location: SignIn.php");
}
?>





<html>
<head>
    <title>FORM | Insert Specifications</title>
    <style>
		p.this {
		   border-style: solid;
		   border-width: 1px;
		   border-color: gray;
		   }
	 </style>
</head>

<body>
	<br><br><br><br>
<form action="insertSpcs_2.php" method="post">
			<table align="center" height="200" width="400" style="padding-top: 100px">
				<tr>
					<td>
						<b>
			                <font size="3">
				                <label align="center">&emsp;&emsp;&emsp;&emsp;Insert a new specofocations category.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="uname" placeholder="Entry a specifications category name" size="50" style="height: 40px; width: 400px;"/>
			        </td>
    			</tr>
			   
		        <tr>
		            <td align="center" colspan="2">
		                <p class="this">
		                    <br/>
		                    <input type="button" value="Insert" style="height:40px; width:250px;" onclick="window.location.href='insertedSpcsCat_2.php'"/>
		                    <br/>
		                    <br/>
		                </p>
		            </td>
		        </tr>
			</table>
		</form>
    </div>
    <div align="center">
    	<a href="manageSpcsCat.php">Close</a>
    </div>   
</body>
</html>

