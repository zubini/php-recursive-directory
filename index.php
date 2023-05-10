<?php
/**
 * PHP Recursive directory
 * 
 * Get a directory recursively with file informations
 * For educational purpose
 * 
 * @author Emanuel Zuber
 * @version 1.0
 */


/**
 * Get helper
 */
require('helper/directory_helper.php');


/**
 * Set base  path
 */
$base = './demo';


/**
 * Call test
 */
$demo = get_directory_files($base);
print_r($demo);


