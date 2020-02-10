<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Board extends Controller
{
	/**
	 * method	GET
	 * uri		/board
	 */
	public function index()
	{
		$a= 1;
		return 'index';
	}
	/**
	 * method	GET
	 * uri		/board/$1
	 */
	public function show($a)
	{
		print_r($a);
		return 'show';
	}
	/**
	 * method	GET
	 * uri		/board/$1/../edit
	 */
	public function edit($a)
	{
		print_r($a);
		return PHP_EOL.'edit';
	}
	/**
	 * method	POST	
	 * uri		/board
	 */
	public function create()
	{
		return 'create';
	}
	public function abc()
	{
		return 'abc';
	}
}
