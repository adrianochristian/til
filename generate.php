<?php
$myfile = fopen("README.md", "w") or die("Unable to open file!");
$txt = "# TIL 
📝 Today I Learned  \n
## Categories  \n";

foreach(glob('*', GLOB_ONLYDIR) as $dir) {
    $directories[] = basename($dir);
}

foreach ($directories as $index) {
    $txt = $txt."### * [".ucfirst($index)."]
        (https://github.com/adrianochristian/til/tree/main/".$index.")  \n";

    foreach(glob($index.'/*') as $file) {
        $line = trim(fgets(fopen($file, 'r')));
        $txt = $txt." - [".ucfirst($line)."]
            (https://github.com/adrianochristian/til/blob/main/".$file.")  \n";
    }
}
echo "Writing the file \n";
fwrite($myfile, $txt);
fclose($myfile);
echo "Finished";
?>