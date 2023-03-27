<?php

if (!file_exists('datafiles/unknown.txt')); {
    echo 'unknown.txt does not exist';
    exit();
}

echo 'Ok, it exists, so I will process it now.';