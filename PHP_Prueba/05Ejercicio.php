<?php
$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;

echo '<style>
    table, th, td{
    border: 1px solid black;
    }
    th{
    background-color: blue;
    }
    th, td{
    width:100px;
    }
    </style>
    <table>
        <tr><th>N</th><th>Cuadrado</th><th>Cubo</th></tr>
        <tr><td>' . $num1 . '</td><td>' . $num1 * $num1 . '</td><td>' . $num1 * $num1 * $num1 . '</td></tr>
        <tr><td>' . $num2 . '</td><td>' . $num2 * $num2 . '</td><td>' . $num2 * $num2 * $num2 . '</td></tr>
        <tr><td>' . $num3 . '</td><td>' . $num3 * $num3 . '</td><td>' . $num3 * $num3 * $num3 . '</td></tr>
        <tr><td>' . $num4 . '</td><td>' . $num4 * $num4 . '</td><td>' . $num4 * $num4 * $num4 . '</td></tr>
    </table>
';
?>