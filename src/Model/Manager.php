<?php

declare(strict_types=1);

class Manager
{
	protected function connectDb()
	{
		try {
			$db = new PDO("mysql:host=remotemysql.com;dbname=awreN8faZl;port=3306","awreN8faZl","ceXx2cCXjz", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
			return $db;
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
}
