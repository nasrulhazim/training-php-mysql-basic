# WEB APPLICATION WITH PHP DAN MYSQL (BASIC)

# Overview
	Tools
		Text Editor
			Notepad++
			PhpStorm
			Sublime Text
			Dreamweaver
		SQL Editor
			SQLYog
			phpMyAdmin
	Environment
		Programming Language
			Front-end - HTML5, CSS3, JavaScript
			Back-end - PHP5, Structured Query Language (SQL)
		Database
			MySQL, 
			PostgreSQL, 
			SQLite...
		Operating System
			Linux, 
			Unix,
			Windows

# WAMP Installation
	Apache
		Configuration
			httpd.conf
				Configure DocumentRoot
			Modules
				rewrite_module
		Log
			Access Log
			Error Log
	MySQL
		Configuration
			php.ini
		Log
		Console
	PHP
		Configuration
			php.ini
		Settings
		Extensions
		Log
			Error Log

# PHP
	Syntax
		<?php ?>
	Variables
		Declaration - $name;
		Data Types 
			int, 
			string, 
			boolean, 
			array
				Indexed Array - [value]
					[1,2,3,4,5]
				Associative Array - [key:value]
					[1 => 1, 2 => 2, 3 => 3]
					[
						'name' => 'nasrul',
						'email' => 'nasrulhazim.m@gmail.com'
					]
			object, 
			float
		Definitions - define('ROOT', dirname(__FILE__));
		Scope
			global
			local
			static
	Display
		echo
		print
		<?= $name; ?>
		var_dump - debugging
		'<pre>' . print_r($values) . '</pre>'; - debugging
	Selection Control
		if statement
		if else statement
		if elseif else statement
		switch
	Loop - use for array or object
		for
		foreach
	Superglobals
		Server informations - $_SERVER
		Form submission - $_POST
		Query String - $_GET
		Form submission / Query String - $_REQUEST
		Pass information from one page to another - $_SESSION
		Store information on user's machine - $_COOKIE
	Functions
		Syntax - function(args) { // code here }
		Return - fucntion(args) { return $value; }
	Session
		Start A Session
		CRUD Session
		Pass information between pages
	Cookie
		Start A Cookie
		CRUD Cookie

# MySQL
	Connect to Database
		SQLYog
		PHP
			Procedural [deprecated]
			Object-Oriented (OO)
			PHP Data Object (PDO) [use this]
	Create Database
		Database name
			lower case
			no special characters or numbers
			add some prefix / suffix
				intan_php
				intan_mysql
				intan_mobile
			user underscore (_) for long database name
			don't use too long database name
				this_is_a_database_name_that_is_to_long
		Charset
			default - latin1
			arabic	- utf8
		Collation
			default - latin1_swedish_ci
			arabic - utf8_unicode_ci
	Table
		Create
		Alter
		Drop
		Columns
			Name
			Data Type
			Optional
				Length
				Default
				PK
				Not Null
				Unsigned
				Auto Increment
				Zerofill
				Comments
				Charset
				Collation
	SQL Statement
		Create Database
		Select Record
		Update Record
		Insert Record
		Delete Record
		Conditions
			LIKE
				'string%'
				'%string'
				'%string%'
		Limit
		Group
		Count

# -AMP Stack - A: Apache, M: MySQL, P: PHP
	Linux - LAMP
	Unix - MAMP
	Windows - WAMP / XAMPP

# Web Server
	NGINX
# Programming Language
	PHP
# Database
	MariaDB
	Oracle
