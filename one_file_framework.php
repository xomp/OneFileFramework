<?php

class App {

	private $conf = [
		'db' => [
			'type' => 'json',
			'name' => 'db.json'
		],
		'admin' => [
			'login' => 'admin',
			'pass'  => '123'
		]
	];

	private $vars = [];

	function __construct($conf = []) {
		$this->init();
	}
	
	function init() {
		session_start();
	}
	
	function conf() {}
	
	function get($var) {}
	function set($var, $val) {}
	function has($var) {}
	function del($var) {}
}

class Auth {
	function login() {}
	function logout() {}
	function regiter() {}
}

class Router {
	static public function route(string $method, string $route, object $fn) {}
	
	static public function get(string $route, object $fn) {
		Router::route('GET', $route, $fn);
	}
	static public function post($route, $fn) {
		Router::route('POST', $route, $fn);
	}
	
	function resourse() {}

	function group() {}

	function redirect() {}
}

class DB {
	private $type = 'json'; //mysql, sqlite
	private $db_host, $db_name, $db_user, $db_pass;

	function __construct() {}
	function __destruct() {}

	function query() {}
}

class Model {
	function find_all() {}
	function find_one() {}
}

class Controller {
	// показать все
	static public function show_all() {}
	// показать один
	static public function show_one($id) {}
	
	// показать форму создания
	static public function show_new() {}
	// создать
	static public function save_new($model) {}
	
	// показать форму редактирование
	static public function show_edit($model) {}
	// обновить
	static public function save_edit($model) {}
	
	// удалить
	static public function del($id) {}
}

class View {}

class Template {
	function header() {}
	function footer() {}
	function layout() {
		return `
			<!DOCTYPE html>
			<html lang="ru">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Document</title>
			</head>
			<body>
				
			</body>
			</html>
		`;
	}

	function styles() {}
	function scripts() {}
}

class Helper {
	function format() {}
}

// Запрос
class Req {
	function headers() {}
}

// Ответ
class Resp {
	function headers() {}
	function json() {}
}

class Admin {}

/*****/

$app = new App();

Router::route('GET', '/post', Controller::show_all());
/* $router->route('GET', '/post/{id}', Controller::show_one());

$router->route('GET',  '/post/new', Controller::show_new());
$router->route('POST', '/post/new', Controller::save_new());

$router->route('GET',  '/post/edit/{id}', Controller::show_edit());
$router->route('POST', '/post/edit/{id}', Controller::save_edit());

$router->route('POST', '/post/del/{id}', Controller::del()); */