<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel='stylesheet' href='<?php echo base_url("assets/css/bootstrap.min.css")?>'>
</head>
<body>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('home/index'); ?>">Index</a></li>
                <li><a href="<?php echo site_url('home/itemsList'); ?>">Get All Items</a></li>
                <li><a href="<?php echo site_url('home/getItemInfo'); ?>">Get Item</a></li>
                <li><a href="<?php echo site_url('home/getItemInfo2'); ?>">Select Item</a></li>
                <li><a href="<?php echo site_url('home/selectImages');?>">Upload Image</a></li>
                <li><a href="<?php echo site_url('home/selectMultipleImages'); ?>">Multiple Upload</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
