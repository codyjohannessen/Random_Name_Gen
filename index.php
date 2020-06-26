
<!DOCTYPE html>
<?php

?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.myUSAButton{
    background:url(flags-normal/us.png);
    cursor:pointer;
    border:none;
    width:450px;
    height:243px;
}

.myUSAButton:active  /* use Dot here */ {   
    background:url(flags-normal/us.png) no-repeat;
}

.myUkraineButton{
    background:url(flags-normal/ua.png);
    cursor:pointer;
    border:none;
    width:450px;
    height:300px;
}

.myUkraineButton:active{
    background:url(flags-normal/ua.png);
}

</style>
</head>
<body>

<h2 align="center">Random Name Generator</h2>


<p><a href="American.php"><img class="myUSAButton"></a></p>
<p><a href="Ukrainian.php"><img class="myUkraineButton"></a></p>




</body> 
</html>
