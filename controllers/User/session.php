<?php
	class Session {
		public static function isAuthenticated() {
            if(isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                return true;
            }
            return false;
        }

        public static function getUserName() {
            if(isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                return $_SESSION['name']." ".$_SESSION['surname'];
            }
            return "";
        }

        public static function isAuthorized($role) {
            if(isset($_SESSION['role']) && !is_empty($_SESSION['role'])) {
                if($role == $_SESSION['role']) {
                    return true;
                }
            }
            return false;
        }
	}
?>