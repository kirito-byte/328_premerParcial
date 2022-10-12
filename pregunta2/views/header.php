<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Baskerville;
    --color_1:#00c6ab;
    --color_2:#68da3e;
    --color_3:#6aa3b4;
    --color_4:#416864;
    --color_5:#223026;
    --color_6:#fff;
    --color_7:#ccc;
    --color_8:rgba(255,255,255,0.05);
    --color_9:#a80505;
    --color_10:#f8f52d;
    --color_11:rgba(255,255,255,0.02);
    --color_12:rgba(255,255,255,0.02);
}
#titulo{
    width: 100%;
    background-color: var(--color_5) ;
    color: var(--color_6);
    text-align: center;
    padding: 20px;
}
#nav{
    height: 50px;
    width: 100%;
    color: var(--color_6);
    background-color: var(--color_4);
    padding: 17px;
}
#nav ul{
    display: flex;
    list-style: none;
    justify-content: space-around;
}
#nav ul li{
    text-decoration: none;
    background-color: var(--color_5);
    border-radius: 8px;
    width: 150px;
    text-align: center;
    transition: 0.3s;
}
#nav ul li:hover{
    border: 1px solid var(--color_6);
    border-radius: 8px;
    transform: translateY(3px);
}
#nav ul li a{
    text-decoration: none;
    color: var(--color_6);
    width: 150px;
}
.principal{
    background-color: var(--color_7);
    height: 70vh;
    display: flex;
    min-width: 350px;
}
.principal aside{
    height: 100%;
    width: 25%;
    background-color: var(--color_6);
    padding: 10px;
    overflow-y: scroll;
}
.principal article{
    padding: 10px;
    width: 75%;
    height: 100%;
}
h4{
    margin-bottom: 20px;
}
p{
    margin-bottom: 30px;
}
footer{
    height: 10vh;
    width: 100%;
    background-color: var(--color_1);
    padding: 20px;
    position: absolute;
    bottom: 0px;
}
</style>
