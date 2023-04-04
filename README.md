
# Strawberry framework


Note: I changed a lot. These docs have flaws. Will fix later

Strawberry is a PHP web framework that provides a set of tools to build simple web applications.

  

## Features

  

- MVC as frontend architecture

- Object-oriented programming (OOP)

- Dependency Injection (DI)

- Routing and template engine

- Extensions and other features

  

## Requirements

- Written in PHP 8.1.2

- Apache web server

  

## Installation

  

1. Download the latest release or git clone the repository

2. Move the files to your web server directory

  

## Get Started

  

1. Create a new controller with action in the `src/controllers` directory.

  

```php

<?php

class HelloWorldController extends Controller
{
	public  function  world(IKernel $kernel)
	{
		return  'Hello World!';
	}
}

```

  

2. Add your Controller to the routes in `routes.php`

  

```php

<?php

  

$routes = [

	...

	'/'  => [HelloWorldController::class, 'world'],

	...

];

```

  

3. Send a request to your web server.

```

user@box:/var/www/html$ curl http://localhost/
Hello World!

```

  
  

### Using views

  

1. Create a new view in the `views/` directory with the `.php` file extension

  

```html

<!-- Add page vars by using {{ $name }} -->

<h1>Welcome to {{ $appName }}</h1>

```

  

2. Return a new view of that file in your controller action

```php

public function world(IKernel $kernel)
{
	//If you do not have any `page vars` you
	//can leave the array empty or remove it
	return $this->view('filename', [
		'appName' => 'my first app!'
	]);
}

```

  

### View components

  

1. Create a new file in `views/components` directory with the `.php` file extension

  

```html

<div>
	<!-- Add component vars by using {{ $name }} -->

	<p><strong>{{ $name }}</strong>: {{ $description }}</p>
</div>

```

  

2. Import the component in a normal view file

  

```html

<h1>Welcome</h1>

<h2>Cards:</h2>


<!-- Import card component -->

{{ card, { "name": "John Doe", "description": "Hello World!" } }}

```

  

3. Instead of hard coded strings you can pass page vars to the components

  

```html

{{ card, { "name": " {{ $firstPerson }}", "description": "meow!" } }}

```


### Extensions

List of official extensions:
1. [strawberry-io](https://github.com/elderguardian/strawberry-io): Extension for easier input and output handling
