<?php


class CVFile {
	function __construct() {
	}

	function selectVideo() {
        global $db;
        $sql    = "SELECT *  FROM cv_files WHERE file_type = 'video'";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            $result[0] = [];
        }
        return $result[0];
    }

    function selectDoc() {
        global $db;
        $sql    = "SELECT *  FROM cv_files WHERE file_type = 'doc'";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            $result = [];
        }
        return $result;
    }




    public function insert( $fileName, $FileType, $fileExt,$fileUrl) {
        global $db;

        $sql = "INSERT INTO cv_files

					  SET`file_type` = '$FileType',
					      `file_ext` = '$fileExt',
                          file_name = '$fileName',
                          file_url = '$fileUrl',
                          create_time = now()";
        $db->queryInsert( $sql );

        $result = $db->getPrevInsertId();

        return $result;
    }

    public function selectUrl( $file_url) {
        global $db;
        $sql    = "SELECT * FROM cv_files WHERE file_url = '$file_url'";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            $result = [];
        }
        return $result;
    }

	public function delete( $verifyLink ) {
		global $db;

		$sql    = "DELETE FROM tbl_verify where  verify_link = '$verifyLink'";
		$result = $db->query( $sql );

		return $result;
	}

    public function fileDelete( $id) {
        global $db;

        $sql    = "DELETE FROM `cv_files` WHERE id= '$id'";
        $result = $db->query( $sql );

        return $result;
    }


}

$cvFile = new CVFile();
//$cvUser->normalFunction();