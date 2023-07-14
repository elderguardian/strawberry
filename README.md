![strawberry-php-cake](https://github.com/elderguardian/strawberry/assets/129489839/18601d64-c321-49a3-aa78-3b5ba7216cbf)

## What is Strawberry?

Strawberry is a lightweight approach to make working with PHP less of a pain in the ass.The framework comes with nothing more than a router and additional functionality needs to be installed afterward.

> **_NOTE:_** I'm a kid and not a professional so please do not rely on strawberry or strawberry extensions in larger projects or production unless you know what you are doing.

## Setup

### Requirements

- Written in PHP 8.1.2 (older versions are untested)
- Apache web server allowing .htaccess files

### Installation

1. Download the latest release or git clone the repository
2. Move the files to your web server directory

## Get Started

### Creating your first controller

1. Create a new class in the `src/controllers` directory.
2. Let your class extend controller and add a function.
3. Let your function return something like `Hello World!`
4. Add your controller to the routes in `routes.php`

##### **`HelloWorldController.php`**

```php
<?php

class HelloWorldController extends Controller
{
	public function world()
	{
		return  'Hello World!';
	}
}
```

##### **`routes.php`**

```php
<?php

$routes = [
	...

	'/'  => [HelloWorldController::class, 'world'],

	...
];

```

Now you should be able to access your controller.

```
user@box:/var/www/html$ curl http://localhost/
Hello World!
```

### Installing optional features

#### List of official extensions

1. [strawberry-io](https://github.com/elderguardian/strawberry-io): Simplifies query string input and json output
2. [strawberry-di](https://github.com/elderguardian/strawberry-di): DI Container for strawberry.
3. [strawberry-view](https://github.com/elderguardian/strawberry-view): Primitive template engine that supports components
