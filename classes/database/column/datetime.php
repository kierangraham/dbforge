<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Database table datetime column.
 *
 * @package		DBForge
 * @author		Oliver Morgan
 * @uses		Kohana 3.0 Database
 * @copyright	(c) 2009 Oliver Morgan
 * @license		MIT
 */
class Database_Column_Datetime extends Database_Column {
	
	/*
	 * Not editable
	 */
	
	// The format of the datetime
	public $format;
	
	public function __construct( & $table, $datatype)
	{
		// Set the format
		$this->format = $datatype['format'];
	}
}