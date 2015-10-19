<?php

/* Read File */
// readfile();

/* Better approach */
// $myfile = fopen("file-to-read.txt", "r") or die("Unable to open file!");

/* Read file based on specified file name, and maximum number of bytes to read */
// echo fread($myfile,filesize("webdictionary.txt"));

/* Read Single Line */
// echo fgets($myfile);
// while(!feof($myfile)) {
//   echo fgets($myfile) . "<br>";
// }

/* Read Single Character */
// while(!feof($myfile)) {
//   echo fgetc($myfile) . '-';
// }

/* Close file */
// fclose($myfile);