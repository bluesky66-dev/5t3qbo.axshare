<?php


class CVUser {
	static public $sessionToken = "CV_TOKEN";

	function __construct() {
	}

	function normalFunction(){
	    return;
    }

	static public function getAllUsers() {
		global $db;
		$sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime, 
						us.create_time AS createTime
						FROM tbl_user us";
		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result = [];
		}

		return $result;
	}

	static public function getExpertData() {
		global $db;
		$sql    = "SELECT  us.f_name AS first_name,
						us.l_name AS last_name,						
						us.email AS usEmail
						FROM tbl_user us";
		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result = [];
		}

		return $result;
	}

	static public function checkUserName($username) {
        global $db;
        $sql    = "SELECT us.user_name FROM tbl_user us WHERE us.user_name LIKE '$username%' ORDER BY us.user_id DESC LIMIT 1";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            return false;
        }
        return $result[0];
    }

	static public function getUserById( $id ) {
		global $db;
		$sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE us.user_id = '$id' ";
		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result[0] = [];
		}

		return $result[0];
	}

    static public function getUserByUsername( $username ) {
        global $db;
        $sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE us.user_name = '$username' ";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            $result[0] = [];
        }

        return $result[0];
    }

	static public function getUserByToken( $token ) {
		global $db;
		$sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.password AS usPassword,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE us.token = '$token'";
		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result[0] = [];
		}

		return $result[0];
	}

	static public function isLoginByEmail( $usEmail, $usPassword ) {
		global $db;
		$sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.password AS usPassword,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE us.password = MD5('$usPassword') 
				      AND us.email = '$usEmail'
				      AND us.verified = '1'";

		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result[0] = [];
		}

		return $result[0];
	}
    static public function isForgetByEmail( $usEmail) {
        global $db;
        $sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE  
				       us.email = '$usEmail'
				      AND us.verify = '1'";
        $result = $db->queryArray( $sql );
        if ( ! $result ) {
            $result[0] = [];
        }

        return $result[0];
    }
	static public function getUserByEmail( $email ) {
		global $db;
		$sql    = "SELECT us.user_id AS usId,
						us.user_name AS usName,
						us.f_name AS usFirstName,
						us.l_name AS usLastName,
						us.email AS usEmail,
						us.user_liner AS userLiner,
						us.token AS usToken,
						us.update_time AS updateTime,
						us.create_time AS createTime
						FROM tbl_user us
				      WHERE us.email = '$email'";

		$result = $db->queryArray( $sql );
		if ( ! $result ) {
			$result[0] = [];
		}

		return $result[0];
	}

	static public function insertUser( $data = [] ) {
		global $db;

		$data = CV_realEscapeArray( $data );

		$usFirstName = isset( $data["usFirstName"] ) ? $data["usFirstName"] : "";
		$usLastName  = isset( $data["usLastName"] ) ? $data["usLastName"] : "";
		$usPassword  = isset( $data["usPassword"] ) ? $data["usPassword"] : "";
		$usEmail     = isset( $data["usEmail"] ) ? $data["usEmail"] : "";
		$userLiner     = isset( $data["userLiner"] ) ? $data["userLiner"] : "";
        $usName = CV_generateUsername($usFirstName, $usLastName);
		$usToken     = time() . CV_generateRandom( 32 );

		$sql = "INSERT INTO tbl_user
					  SET user_name = '$usName',
                          f_name = '$usFirstName', 
					      l_name = '$usLastName',
					      password = MD5('$usPassword'),
					      email = '$usEmail',
					      user_liner = '$userLiner',
					      token = '$usToken',
					      update_time = now(),
					      create_time = now()";
		$db->queryInsert( $sql );

		$result = $db->getPrevInsertId();

		return $result;
	}

    static public function updateUser( $usId, $data = [] ) {
		global $db;

		$data = CV_realEscapeArray( $data );

		$user = CVUser::getUserById( $usId );

		$usFirstName = isset( $data["usFirstName"] ) ? $data["usFirstName"] : $user["usFirstName"];
		$usLastName  = isset( $data["usLastName"] ) ? $data["usLastName"] : $user["usFirstName"];
		$usPassword  = isset( $data["usPassword"] ) ? $data["usPassword"] : "";
		$usEmail     = isset( $data["usEmail"] ) ? $data["usEmail"] : $user["usEmail"];
        $userLiner     = isset( $data["userLiner"] ) ? $data["userLiner"] : $user["userLiner"];

		$sql = "UPDATE tbl_user
					  SET f_name = '$usFirstName', 
					      l_name = '$usLastName',
					      email = '$usEmail',
					      user_liner = '$userLiner',";

		if ( $usPassword ) {
			$sql .= " password = MD5('$usPassword'),";
		}

		$sql .= " update_time = now()
                    WHERE user_id = '$usId'";

		$result = $db->query( $sql );

		return $result;
	}

	static public function updatePassword( $usId, $data = [] ) {
		global $db;

		$data = CV_realEscapeArray( $data );

		$usPassword  = isset( $data["password"] ) ? $data["password"] : "";
		$usRPassword = isset( $data["reset_password"] ) ? $data["reset_password"] : "";

		if ( $usPassword == $usRPassword ) {
			$sql = "UPDATE tbl_user
					  SET password = MD5('$usPassword'),
						  update_time = now()
							WHERE user_id = '$usId'";

			$result = $db->query( $sql );

			return $result;
		} else {
			return false;
		}
	}

    static public function deleteUser( $usId ) {
        global $db;

        CVUser::deleteFiles( $usId );

        $sql    = "DELETE FROM tbl_user
						where  user_id = '$usId'";
        $result = $db->query( $sql );

        return $result;
    }
}