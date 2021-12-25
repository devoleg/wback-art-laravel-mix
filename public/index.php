<?php

$mixManifest = file_get_contents('./mix-manifest.json');
if (!empty($mixManifest)) {
    $mixManifest = (array)(@json_decode($mixManifest)??[]);
} else {
    $mixManifest = [];
}

function mix($path)
{
    global $mixManifest;
    if (isset($mixManifest[$path])) return $mixManifest[$path];
    return $path;
}

require '../src/view/index.php';
