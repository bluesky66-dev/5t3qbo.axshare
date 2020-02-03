<?php


class CVFile {
	function __construct() {
	}

    public function insert( $fileName, $FileType ) {
        global $db;


        $sql = "INSERT INTO cv_files
					  SET `type` = '$FileType',
                          file_name = '$fileName'";
        $db->queryInsert( $sql );

        $result = $db->getPrevInsertId();

        return $result;
    }

	public function delete( $verifyLink ) {
		global $db;

		$sql    = "DELETE FROM tbl_verify where  verify_link = '$verifyLink'";
		$result = $db->query( $sql );

		return $result;
	}

}

$cvFile = new CVFile();
//$cvUser->normalFunction();