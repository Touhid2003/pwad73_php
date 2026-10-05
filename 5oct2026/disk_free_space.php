<?php
    $drive = 'E:';
    $free = disk_free_space($drive);
    echo round($free /1024);
?>