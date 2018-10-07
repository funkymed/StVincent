# Design Pattern : MVC

Inspiration
- [smashingmagazine in 2011](https://www.smashingmagazine.com/2011/10/getting-started-with-php-templating/)
- [More about microframework](https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19)

## Installation

Install docker-machine docker and docker-compose with brew

```bash
$ brew install docker
$ brew install docker-machine
$ brew install docker-compose
```

and type

```bash
$ docker-compose up -d
```

### How to use

Go to your url `192.168.99.100:8000`

## How to make your own Controller

Go to Controller Directory and create your own Controller file

`Controller/MYfileController.php`

and use inspiration from the file `IndexController.php`

```php 
<?php
// Controller/IndexController.php

/**
 * Class IndexController
 */
class IndexController extends ControllerAbstract
{

    /**
     * Display the template index
     */
    public function index()
    {
        $this->vars = ["name" => "Patrick"];
        $this->render('index.php');
    }
}

```

And then create your Template 

```php 
<html>
  <body>
    <h1>Hello <?php echo $this->name; ?></h1>
  </body>
</html>

```
