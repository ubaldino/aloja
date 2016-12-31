<?php
/*
* Mysql database class - only one connection alowed
*/
class DB {
	private $_connection;
	private static $_instance; //The single instance

	private $_host     = "localhost";
	private $_username = "root";
	private $_password = "root";
	private $_database = "aloja";
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function query( $sql ) {
		if( ! self::$_instance ) // If no instance then make one
			self::$_instance = new self();
		if ( self::$_instance->getConnection() != null )
			return self::$_instance->getConnection()->query( $sql );
		else
			return 'Failed conect to MySQL';
	}
	// Constructor
	private function __construct() {
		$this->_connection = new mysqli(
				$this->_host,
				$this->_username,
				$this->_password,
				$this->_database
			);

		// Error handling
		if( mysqli_connect_error() ) {
			trigger_error( "Failed conect to MySQL: " . mysql_connect_error() , E_USER_ERROR );
			$this->_connection = null;
		}
		else{
			// Acutes
			$this->_connection->query("SET NAMES 'utf8'");
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}

	public static function escape($str){
		if( ! self::$_instance ) // If no instance then make one
			self::$_instance = new self();
		if ( self::$_instance->getConnection() != null )
			return self::$_instance->getConnection()->real_escape_string( $str );
		return $str;
	}
}
/*
	EXAMPLE
    $sql_query = "SELECT foo FROM .....";
	DB::query( $sql_query );
 */
