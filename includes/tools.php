<?php
    function printHead($pageTitle){

 $head=<<< "HEAD"
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link to bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- link to fontAwesome -->
    <link
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
     integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
     crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/stylesheets/lightbox.min.css">
    <link rel="stylesheet" href="/stylesheets/style.css">
    <title>$pageTitle</title>
    </head>        
HEAD;
echo $head;
    }
    
?>