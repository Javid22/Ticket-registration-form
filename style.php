<?php
    header('Content-type:text/css');
?>
body 
{	
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0);
	color:#D0D8D2;
}
.navbar
{
    z-index: 1;
}
.box 
{	
	margin-left:40%;
	margin-top:7%;
    width: 700px;
    padding: 40px;
    position: absolute;
    background: #191919;
    text-align: center;
    transition: 0.25s;
}

.box select option
{
	background-color:#191919;
}
.box input[type="text"],
.box input[type="password"],
.box input[type="email"],
.box select,
.box textarea
{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 400px;
    outline: none;
    color:white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1
{
    color: #9C00FF;
    text-transform: uppercase;
    font-weight: 300;
}
.box h2
{
	color:#D0D8D2;	
}
.box input[type="text"]:focus,
.box input[type="password"]:focus,
.box input[type="email"]:focus 
{
    width: 500px;
    border-color: #2ecc71
}

.box input[type="submit"]
{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}
.box input[type="button"] 
{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover 
{
    background: #2ecc71
}
.box input[type="button"]:hover 
{
    background: #2ecc71
}

.forgot 
{
    text-decoration: underline;
	color : #D0D8D2;
}
.muted
{
	color: #D0D8D2;
}
#user,#login
{
	display : inline-block;
}
