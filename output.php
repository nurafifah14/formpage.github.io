<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $signature = $_POST['signature'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output</title>
</head>
<body>
    <div>
        <p style="font-size: 100px; text-align: center;">Signature</p>
        <img style="display: block; margin-right: auto; margin-left: auto; width: 30%" alt="No Signature" src="<?php echo $signature; ?>" />
    </div>
</body>
</html>