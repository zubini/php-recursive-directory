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
 * Get directory files recursively
 *
 * @param string $base
 * @param string $path
 * @return array
 */
function get_directory_files($base, $path = ''): array {

    // Set return array
    $return = array();

    // Check if exists
    if (file_exists($base.$path)) {

        // Get files
        $files = scandir($base.$path);

        // Check files
        foreach($files as $file) {

            // Check if file is not .something or . or ..
            if(substr($file, 0, 1) != '.') {

                // Set current file path
                $current_file = $base.$path.'/'.$file;

                if (is_dir($current_file)) {
                    $return[$file] = get_directory_files($base, $path.'/'.$file);
                } 
                else {
                    $file_info = pathinfo($current_file);
                    $file_info['filesize'] = filesize($current_file);
                    $return[$file] = $file_info;
                }
            }
        }
    }

    return $return;
}
