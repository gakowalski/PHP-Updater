<?php
//CONFIG
$zip_url = 'https://github.com/gwhitcher/CakeBlog/archive/'; //URL TO ZIP
$zip_name = 'master.zip'; //ZIP FILENAME
$src_dir = 'CakeBlog-master'; //SOURCE DIRECTORY (the name of the root folder in the zip)
$dest_dir = '../php_updater/destination_directory'; //DESTINATION DIRECTORY
$mysql_dir = ''.$dest_dir.'mysql/'; //DESTINATION TO MYSQL UPDATE FILES

//MYSQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "updater";