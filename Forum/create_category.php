<table align="center">
    <form action="" method="post">
    <tr>
    	<td>Category Title</td>
    </tr>
    <tr>
    	<td><input type="text" name="category_title" size="98" maxlength="150" /></td>
    </tr>
    <tr>
    	<td>Category Description</td>
    </tr>
    <tr>
    	<td><textarea name="category_description" rows="5" cols="75"></textarea></td>
    </tr>
    <tr>
    	<td><input type="submit" name="category_submit" value="Create Category"/></td>
    </tr>
    </form>
</table>

<?php
session_start();
if ($_SESSION['gebruiker'] == "") {
	echo "You need to be logged in to create a category.";
}
if (isset($_POST['category_submit'])) {
	if (($_POST['category_title'] == "") && ($_POST['category_description'] == "")) {
		echo "You did not fill in both fields. Please return to the previous page.";
	} else {
		$link=mysqli_connect('localhost','root','root') OR die("connectie met server mislukt");
   		mysqli_select_db($link, 'dbforum') OR die("connectie met databank mislukt");
		$title = $_POST['category_title'];
		$desc = $_POST['category_description'];
		$sql = "INSERT INTO categories (category_title, category_description) VALUES ('".$title."', '".$desc."')";
		$res = mysqli_query($link, $sql) or die(mysqli_error());
		if ($res == 1)
      	{
        echo "<script>window.close();</script>";
      	}
	}
}
?>