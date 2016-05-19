        /////////////////////////////////////////////////////////////////////////////////
        // version function BEGIN ///////////////////////////////////////////////// +__+
        // usage: $version(RELATIVE_PATH_TO_SCRIPT , VERSION_NUM) 
        // if VERSION_NUM is set to 0 then the last modified time will return
        // allowing for automatic versioning as files are updated respectively with WP.
        // Version can be manually added by setting VERSION_NUM to a numeric value.
        //////////////////////////////////////////////////////////////////////////
        function version($script_path , $script_version) {
            if ($script_version != 0) {
                return $script_version;
            } else {
                $rel_file_path = dirname(__FILE__).'/'.$script_path;
                if (file_exists($rel_file_path)) {
                    return filemtime($rel_file_path);
                } else {
                    return '!!!----=ERROR=::=File_Not_Found=::=ERROR=----!!!';
                }
            }
        }
        // $version = 'version'; //put this in the scope of where using
        // version function END ///////////////////////////////////////////////// +__+
        ///////////////////////////////////////////////////////////////////////////////
