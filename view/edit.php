<!DOCTYPE html>
<head>
   <title>Edit</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
html   
{   

background-image:url('https://hdwallsource.com/img/2014/9/dark-background-18321-18785-hd-wallpapers.jpg');
   height:100%;
   background-size:cover;
   background-repeat:no-repeat;
}

body
{
   margin-top:10%;
   margin-left:10%;
   margin-right:10%;
   padding:5% 5%;
   border:solid black 3px;
   border-radius:5px;
   font-family:Helvetica,sans;
   color:white;
}
#banner
{
   background-color:black;
   color:white;
   border:solid white 3px;
   padding:3%;
}

.center
{
   text-align:center;
}
form
{
   display:inline;
}
input
{
   border-radius:15px;
}
</style>

<body>
   <h3 id=banner class=center>Time to Edit a Task</h3>
   <br>
   <br>
   <form action="." method=post>
	<input type=hidden name=action value=edit>

	<label>Due date:</label>
	<input type=date name=due>
	<br><br>
	<label>Task:</label>
	<input type=text name=mesg>
	<br><br><br>
	<input type=submit value="Submit Edit">
   </form>
<br><br>
   <form action="." method=post><input type=hidden name=action value=home><input
class=btn id=logout type=submit value="Go Back"></form>

</body>
</html>
