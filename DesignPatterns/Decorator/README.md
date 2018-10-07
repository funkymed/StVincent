# Design Pattern : Decorator

Inspiration
- [Pizza Decorator by Hugo Hamon](https://bitbucket.org/hhamon/phptek-design-patterns/src/67d094faaa6e/src/Pizza/)

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


#### Test the decorator

`192.168.99.100:8000/index.php`

```html
array (size=4)
  0 => string 'price' (length=5)
  1 => string 'surface' (length=7)
  2 => string 'type' (length=4)
  3 => string 'region' (length=6)
```

#### Test each query

`192.168.99.100:8000/query_var.php?surface=320`   
`192.168.99.100:8000/query_var.php?type=appartement`  
`192.168.99.100:8000/query_var.php?price=360000`  
`192.168.99.100:8000/query_var.php?region=oise`  

#### Combine queries

`192.168.99.100:8000/query_var.php?region=oise&surface=320`

```html
array (size=2)
  0 => string 'surface' (length=7)
  1 => string 'region' (length=6)
```
