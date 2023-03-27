<?php

$filename = 'datafiles/clouds.txt';

$accessed = fileatime($filename);

echo '<p>' . $filename . ' was last accessed: ' . date('d F Y H:i:s.', $accessed);

$modified = filemtime($filename);

echo '<p>' . $filename . ' was last modified: ' . date('d F Y H:i:s.', $modified);