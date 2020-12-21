<?php
		//define namespace para classe
		namespace aplicacao\models;

		class ConnectMysql implements DatabaseInterface {
			private static $instancePdo;

			private function __construct(){}
			private function __clone(){}

			public static function getInstancePdo() {
				if(!isset($instancePdo)) {
					self::$instancePdo = new \PDO("mysql:dbname=login_password_hash;host=localhost", "root", "");
					self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				}
				return self::$instancePdo;
			}
		}
?>