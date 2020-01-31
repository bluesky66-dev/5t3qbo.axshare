<?php


class CVVerify {
	function __construct() {
	}

	public function activeUser($verifyLink) {
        global $db;
        //$sql    = "SELECT us.user_name FROM tbl_user us WHERE us.user_name LIKE '$verifyLink%' ORDER BY us.user_id DESC LIMIT 1";
        $sql = "Select * from tbl_user us where user_id in (select user_id from tbl_verify);";

        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            return false;
        }
        $sql1 = "UPDATE tbl_user set verified=1 where user_id in (select user_id from tbl_verify);";

        $result = $db->query( $sql1 );

        return $result;
    }

    public function insertVerify( $usId,$data = [] ) {
        global $db;

        $data = CV_realEscapeArray( $data );
        $usVerify_link = isset( $data["usVerify_link"] ) ? $data["usVerify_link"] : "" ;
        $type = isset( $data["type"] ) ? $data["type"] : "" ;


        $sql = "INSERT INTO tbl_verify
					  SET user_id = '$usId',
					    verify_link = '$usVerify_link', 
					    `type` = '$type', 
                        create_time = now()";
        $db->queryInsert( $sql );

        $result = $db->getPrevInsertId();


        return $result;
    }

	public function deleteVerify( $verifyLink ) {
		global $db;

		$sql    = "DELETE FROM tbl_verify where  verify_link = '$verifyLink'";
		$result = $db->query( $sql );

		return $result;
	}

}

$cvVerify = new CVVerify();
//$cvUser->normalFunction();