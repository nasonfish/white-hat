<html>
<head>
</head>
<body>
<?php
$connection = new mysqli("localhost", "myuser", "");
$connection->multi_query("INSERT INTO requests (ip, req) VALUES ('" + $_SERVER['REMOTE_ADDR'] + "', '" + $_GET['data'] + "');");
?>
<p>Your request has been recorded.</p>
</body>
</html>
