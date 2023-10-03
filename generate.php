<?php
$directories = scandir(getcwd());
$myfile = fopen("README.md", "w") or die("Unable to open file!");
$txt = "# TIL 
📝Today I Learned \n";

foreach ($directories as $index) {
    $txt = $txt."(".$index.")[https://github.com/adrianochristian/til/tree/main/".$index."]\n";
}

fwrite($myfile, $txt);
fclose($myfile);
?>