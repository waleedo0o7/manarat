<!doctype html>
<html dir="<?php if (isset($_GET['dir'])) echo $_GET['dir']; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    -->


    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Select2 CSS -->
    <link href="assets/vendors/select2/select2.min.css" rel="stylesheet" />

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">

    <!-- Noty CSS -->
    <link rel="stylesheet" href="assets/vendors/noty/noty.css">
    <link rel="stylesheet" href="assets/vendors/noty/nest.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">


    <!-- Style CSS -->
    <?php if (isset($_GET['dir']) && $_GET['dir'] == 'rtl') {
        echo '<link rel="stylesheet" href="assets/css/style-rtl.min.css">';
    } else {
        echo '<link rel="stylesheet" href="assets/css/style-ltr.min.css">';
    } ?>


    <link rel="icon" type="image/x-icon" href="assets/images/icons-svg/logo.svg">

    <title> Manarat </title>

</head>

<body class="">