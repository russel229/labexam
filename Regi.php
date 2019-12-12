<!dopctype html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form action="#" name="Registration" onsubmit="return(validate());">
<form action="insert.php" method="POST">

<table cellpadding="2" width="20%" bgcolor="ff0000" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Registration</b></font></center>
</td>
</tr>

<tr>
<td> Name</td>
<td><input type=text name=textnames id="textname" size="30"></td>
</tr>

<tr>
<td> Password</td>
<td><input type=text name=textnames value="password" size="30"></td>
</tr>

<tr>
<td> Confirm Password</td>
<td><input type=text name=textnames value="confirm password" size="30"></td>
</tr>


<tr>
<td>EmailId</td>
<td><input type="text" name="emailid" id="emailid" size="30"></td>
</tr>



<tr>
<td>User/Admin</td>
<td><select name="User Type">

<option value="">User</option>
<option value="">Admin</option>

</select></td>

</tr>





<tr>

<td><input type="Register" value="Register" /></td>
</tr>

<td>
td colspan="2"><input type="button" value="Log In" /></td>
</tr>
</table>
</form>
 <li><a href="index.html">Back To Home</a></li>
</body>
</html>