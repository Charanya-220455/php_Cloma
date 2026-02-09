<?php
$l=file("file.txt");
print_r($l);
echo "<br>";

echo "<br>";
$w = fopen("file.txt","r");
echo "$w";

echo "<br>";
$w = fopen("file.txt","r");
$c=fread($w,filesize("file.txt"));
fclose($w);

echo $c;
echo "<br>";

$w=fopen("file.txt","w");
fwrite($w,"hi");
fclose($w);
echo "<br>";

if(file_exists("file.txt")){
    echo "file is present";

}
else {
    echo "file is not present";
}
echo "<br>";


file_put_contents("file.txt","hello");
$t=file_get_contents("file.txt");
echo $t;
echo "<br>";

echo filesize("file.txt"). "bytes";
echo "<br>";
echo filetype("file.txt");
echo "<br>";
echo date("d-m-Y H:i:s", fileatime("file.txt"));
echo "<br>";
echo date("d-m-Y H:i:s", filemtime("file.txt"));
echo "<br>";
echo date("d-m-Y H:i:s", filectime("file.txt"));
echo "<br>";
echo substr(sprintf('%o', fileperms("file.txt")), -4);
echo "<br>";
echo fileowner("file.txt");
echo "<br>";
echo filegroup("file.txt");
echo "<br>";
echo fileinode("file.txt");
echo "<br>";


copy("file.txt", "file-upload/file.txt");
echo "<br>";
rename("file.txt", "phpfile.txt");
echo "<br>";
//unlink("file.txt");
echo "<br>";
mkdir("php");
echo "<br>";
rmdir("up");
echo "<br>";


if (is_file("file.txt")) {
    echo "This is a file";
}

echo "<br>";
if (is_dir("phps")) {
    echo "This is a directory";
}

echo "<br>";


$files = scandir("phps");
print_r($files);
echo "<br>";

$dir = opendir("phps");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
echo "<br>";
closedir($dir);
echo "<br>";
echo getcwd();
echo "<br>";
chdir("phps");
echo "<br>";
echo getcwd();
echo "<br>";



$fp = fopen("file.txt", "r");
echo "<br>";

$fp = fopen("file.txt", "w");

fwrite($fp, "Hello");
echo "<br>";
$fp = fopen("file.txt", "a");
fwrite($fp, "New ---");
echo "<br>";
$fp = fopen("new.txt", "x");
echo "<br>";
$fp = fopen("file.txt", "r+");
echo "<br>";
$fp = fopen("file.txt", "w+");
echo "<br>";
$fp = fopen("file.txt", "a+");
echo "<br>";
$fp = fopen("unique.txt", "x+");














?>