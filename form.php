<style>
	
Body{
	background: #ccc;
}
.txt{
	margin-right:4%;
	margin-left: 4%;
	width: 100%;
	padding: 20px;

}
.p{
	margin-left: 10%;
	margin-right: 10%;
	padding: 10px;
	background: red;
	color: white;
	text-align: center;
	border-radius: 3px;
}

.form{
	border: 5px solid orange;
	padding: 34px;
	margin-right: 10%;
	margin-left: 10%;
	margin-top: -1px;
}
.btn{
	margin-right: 10%;
	margin-left: 10%;
	width: 10%;
	background: green;
	color: white;
	border-radius: 8px;
	border: none;
	padding: 6px;
	margin-left: 20%;
	cursor: pointer;
}


</style>   

<p class="p">Registration form</p>

<form action="display.php" method="POST" class="form">
	<input type="text" name="Fname" class="txt" placeholder="please enter your user name">
	<input type="password" name="Password" class="txt" placeholder="please enter your password">
	<input type="submit" name="send" class="btn" value="send">
	<input type="reset" name="send" class="btn" value="clear">
	


</form>