<?php
//specify the path to the thumbnail images
$directory = '../assets/images';
//only load files with following extensions
$allowed_extensions = array('jpg','jpeg','gif','png');
// an array used to separate the extension from each file
$file_parts = array();
//response message
$response = "";
//open directory to parse images
$dir_handle = opendir($directory);
//iterate through all files
while ($file = readdir($dir_handle)) {
    //first check for hidden files
    if (substr($file,0,1) != '.') {
        //split each file name to extract file extension
        $file_components = explode('.',$file);
        //grab extension token
        $extension = strtolower(array_pop($file_components));
        //is file valid image, if so add to response
        if (in_array($extension,$allowed_extensions));
        {
            //build response string using the ~ symbol as string separator
            $response .= $directory.'/'.$file.'~';
        }
    }
}
closedir($dir_handle);
//return response while removing the last ~ separator
echo substr_replace($response,"",-1);
?>