

<?php
include "./db.php";
if (!isset($_SESSION['db'])) {
  header("location:./not-found");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href="./assets/bs.min.css">
    <link rel="shortcut icon" href="./avatar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Freehand&family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poor+Story&family=Silkscreen:wght@400;700&display=swap');

        .text-muted {
            color: rgb(172, 182, 198) !important;
        }

        input.form-control:focus,
        input.form-control::after {
            outline: none;
            box-shadow: none !important;
        }


        
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: rgb(178, 184, 189) !important;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: rgb(186, 189, 198) !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: rgb(200, 205, 212);
}


/* tooltip */
.ttt .arrow-down {
   visibility: hidden;
  width: 0; 
  height: 0; 
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  position: absolute;
  text-align: center;
  margin-top: -1.6rem;
  margin-left: -1.6rem;
  border-left: 15px solid #303743;
}

.ttt .ttext{
  visibility: hidden;
  width: 180px;
  background-color: #303743;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  position: absolute;
  padding: 6px;
  z-index: 1;
 margin-left: -15.8rem;
 margin-top: -1.2rem;
  
}


.ttt:hover .ttext {
  visibility: visible;
}
.ttt:hover .arrow-down {
  visibility: visible;
}
    </style>
    <title>Profile</title>
</head>

<body style="font-family: 'Montserrat';background-color: rgb(24, 26, 28);width:98%;margin:auto">
    <section class="m-2 mt-4 rounded-1 logreg" style="background-color:rgb(48, 55, 67);">
        <div class="container py-4">