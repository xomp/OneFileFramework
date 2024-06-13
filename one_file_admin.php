<?php

function heading($data = []) {
	extract($data);
	$style = "
		:root {
			--color-dark-1: #000; --color-light-1: #000; --color-prime-1: #000;
			--color-dark-2: #000; --color-light-2: #000; --color-prime-2: #000;
			--color-dark-3: #000; --color-light-3: #000; --color-secnd-1: #000;
			--color-dark-4: #000; --color-light-4: #000; --color-secnd-2: #000;
		}
		body {
			color: #fff;
			font-family: Arial, Helvetica, sans-serif;
			background-color: #111;
		}
		#app {
			.heading {}
			.sidebar {}
			.content {}
		}
	";
	return render("
		<!DOCTYPE html>
		<html lang='ru'>
		<head>
			<meta charset='UTF-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<title>OneFileUI</title>
			<style></style>
		</head>
		<body id='app'>
	", $style);
}

function content($data = []) {
	extract($data);
	return render($content);
}


function footer($data = []) {
	global $styles;
	extract($data);
	return render("
				<style>{$styles}</style>
			</body>
		</html>
	");
}

function sidebar($data = []) {
	extract($data);
	$style = "";
	return render("", $style);
}


function input($data = []) {
	extract($data);
	return render("
		<label>
			<p>{$title}</p>
			<input type='text' value='{$val}'>
		</label>
	");
}

function button($data = []) {
	extract($data);
	$style = "
		button {
			cursor: pointer;
			background-color: #00f;
			color: #fff;
			padding: 5px 10px;
			border: none;
			border-radius: 5px;
		}
	";
	return render("<button>{$text}</button>", $style);
}

function form($data = []) {
	extract($data);
	return render("<form>{$data}</form>");
}

function switcher($data = []) {
	extract($data);
	$style = "
		.switcher {
			display: block;
			cursor: pointer;

			input {
				display: none;
			}
			span {
				display: block;
				position: relative;
				width: 40px; height: 20px;
				border-radius: 100%;
				background-color: #fff;
				border-radius: 20px;
				padding: 2px;
			}
			i {
				position: absolute;
				width: 20px; height: 20px;
				border-radius: 100%;
				background-color: #00f;
			}
			input:checked + span { background-color: #00f; }
			input:checked + span i { right: 2px; background-color: #fff; }
		}
	";

	return render("
		<label class='switcher' for='switcher'>
			<input type='checkbox' name='switcher' id='switcher' value='' checked=''><span><i></i></span>
		</label>
	", $style);
}

function render($html, $style = '') {
	add_style($style);
	return $html;
}

$styles = '';
function add_style($style) {
	global $styles;
	$styles .= $style;
}

?>

<?php

echo heading();
//content(['content' => 'xzcv']);

echo form([
	input(["title"=>'Имя', "val"=>'123']),
	button(["text"=>'Отправить'])
]);
//switcher();

echo footer();