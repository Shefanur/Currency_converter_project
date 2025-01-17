<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>My Project 44</title>

    <style>
        .table {
            width: 50%;
            margin-top: 20px;
        }

        .table {
            border-collapse: collapse;
        }

        .table tbody tr td:first-child {
            width: 100px;
        }

        .table tr th,
        .table tr td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
<form method="POST">

৳ Bangladeshi TAKA (BDT):
<input type="text" name="taka" placeholder="Enter Value in TAKA..." value="


<?php
if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo $taka;
}
?>


">

<input type="submit" name="submit">

<table class="table">
        <thead>
            <tr>
                <th colspan="2">Output</th>
            </tr>
        </thead>
        <tbody>
<tr>
    <td>

    <?php
if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo ($taka * 0.0085);
}
?>


    </td>
    <td>$ United States Dollar (USD)</td>
</tr>
<tr>
    <td>

    <?php
if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo ($taka * 0.0067);
}
?>
    </td>
    <td>£ British Pound (GBP)</td>
</tr>

<tr>
    <td>

    <?php

if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo ($taka * 0.032);
}
?>
    </td>
    <td>ر.س Saudi Riyal (SAR)</td>
</tr>

<tr>
    <td>

    <?php
if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo ($taka * 0.031);
}
?>

    </td>
    <td>د.إ United Arab Emirates Dirham (AED)</td>
</tr>

<tr>
    <td>

    <?php
if(isset($_POST["submit"]))
{
    $taka = $_POST['taka'];
    echo ($taka * 0.0026);
}
?>

    </td>
    <td>د.ك Kuwaiti Dinar (KWD)</td>
</tr>
    </tbody>
    </table>
</form>
</body>
</html>