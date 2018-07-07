<!DOCTYPE HTML>
<html>
<body style="background-color: rgb(225,225,225)">
    <form name="savefile" method="post" action="handle.php">
        File Name: <input type="text" name="filename" value=""><br/>
        <textarea rows="16" cols="100" name="textdata"></textarea><br/>
        <input type="submit" name="submit" value="Save Text to Server">
</form>
    <br/><hr style="background-color: rgb(150,150,150); color: rgb(150,150,150); width: 100%; height: 4px;"><br/>
    <form name="openfile" method="post" action="handle.php">
        Open File: <input type="text" name="filename" value="">
        <input type="submit" name="open" value="Submit File Request">
</form>
</body>
</html>