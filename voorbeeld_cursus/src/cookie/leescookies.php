<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>leescookie</title>
</head>
<body>
<?php
foreach($_COOKIE as $key => $value){
    print( $key. ' : '. $value  );
    print("</br>");
}
?>
</body>
</html>
