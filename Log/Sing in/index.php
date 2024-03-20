<!DOCTYPE html>
<html>
<head>
    <title>Simple Comment Section</title>
</head>
<body>

<h2>Leave a Comment</h2>
<form action="submit_comment.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="comment">Comment:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Submit">
</form>

<hr>

<h2>Comments</h2>
<div id="comments">
    <?php include 'load_comments.php'; ?>
</div>

</body>
</html>