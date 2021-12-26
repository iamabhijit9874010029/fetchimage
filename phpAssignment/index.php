<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&display=swap" rel="stylesheet">
    <title>phpAssignment</title>
</head>
<body>
<?php
function getDogImage()
{
    $api = "https://dog.ceo/api/breeds/image/random";
    $response = json_decode(file_get_contents($api,true));
    return $response->message;
}
?>
<div class="imagesec">
<h1>RANDOM DOG IMAGE API</h1>
<img src="<?php echo getDogImage();?>" alt="random_dog_image">
<a href="<?php $_SERVER['PHP_SELF']; ?>" class="fetchbtn">FETCH</a>
</div>

</body>
</html>