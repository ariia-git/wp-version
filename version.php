        /////////////////////////////////////////////////////////////////////////////////
        // version function BEGIN ///////////////////////////////////////////////// +__+
        // usage: $version(PATH_TO_SCRIPT , VERSION_NUM) 
        // if VERSION_NUM is set to 0 then the last modified time will return
        // allowing for automatic versioning as files are updated with WP.
        // Version can be manually added by setting VERSION_NUM to a numeric value.
        //////////////////////////////////////////////////////////////////////////
        function version($script_path , $script_version) {
            if ($script_version !== 0) {
                return $script_version;
            } else {
                $lastModified = @getlastmod($script_path);
                if($lastModified == NULL) {
                    $lastModified = getlastmod(utf8_decode($script_path));
                }
                return $lastModified;
            }
        }
        $version = 'version'; //put this in the scope of where using
        // version function END ///////////////////////////////////////////////// +__+
        ///////////////////////////////////////////////////////////////////////////////
