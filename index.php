<?php
$directory = '/folder.jpg';
$slesh = '/folders/';
if ($handle = opendir('folders)) {
    while (false !== ($file = readdir($handle)) && false !== ($file1 = readdir($handle))) { 
        if ($file != "." && $file != ".." && $file1 != "." && $file1 != "..") { 

            echo '"    
            <table width="100%" align="center">
            <tr>
            <th>
            <a href="'.$slesh.$file.'" border="0"  vlink="white" alink="white"><img src="'.$slesh.$file.$directory.'" width="250px">
            <H1>'.$file.'<H1>
            </a>
            </th>
            <th>
            <a href="'.$slesh.$file1.'" border="0"  vlink="white" alink="white"><img src="'.$slesh.$file1.$directory.'" width="250px">
            <H1>'.$file1.'<H1>
            </a>
            </th>
            </tr>
            </table>
            "';
        } 
    }
    
    closedir($handle); 
}

?> 
<html>
    <title>folders</title>
    <head>
      <style>   
      @import url('https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
       body {
           background-color: black;
           font-family: 'Ubuntu', sans-serif;
       }        
            h1 {
            font-family: 'Ubuntu', sans-serif;
            font-size: 12px;
            color: white;
        }

      </style>
    </head>

    </html>
