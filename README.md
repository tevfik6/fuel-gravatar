# FuelPHP Gravatar Package

A Simple Gravatar Package for FuelPHP

## About

- Version: 1.0
- License: MIT License
- Author: Tevfik TÜMER
- Source: http://gravatar.com/site/implement/images/php/

## Installation

You can simply download the package and extract it into `fuel/packages/gravatar` folder or you can go under your `fuel/packages` folder and run this command on shell:
```shell
  $ git clone https://github.com/tevfik6/fuel-gravatar gravatar
```

## Usage 

### Basic Usage
```php
Package::load("Gravatar");

$email = "test@test.com";
$image_link = Gravatar::get($email);
echo '<img src="'.$image_link.'">';
```

### With Options
```php
Package::load("Gravatar");

$email = "test@test.com";
$options = array(
	'size'		=> 64, 		// Size in pixels, defaults to 80px [ 1 - 2048 ]
	'default'	=> 'mm', 	// Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
	'rating'	=> 'g',		// Maximum rating (inclusive) [ g | pg | r | x ]
);
	
$image_link = Gravatar::get($email, $options);
echo '<img src="'.$image_link.'">';
```