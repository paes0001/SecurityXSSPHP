# Simple PHP Example

**This code has a 2 pages:**

/WebSec -> shows a page where the input is sanitazed.

/WebSecXSS -> shows a page vunerable to XSS because the input is not sanitazed.

## Function used to sanitaze Input

---

### In this project the input is sanitazed using the code

```PHP

$nameInput = trim(strip_tags($_POST["name"]));
$commentInput = trim(strip_tags($_POST["comment"]));

```

_reference: <https://www.php.net/manual/en/function.strip-tags.php>_

### Other ways to sanitize the input of the user is to use the functions

```PHP

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

```

_reference: <https://www.w3schools.com/php/php_filter.asp>_

```PHP
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
```

_reference: <https://www.w3schools.com/php/php_filter.asp>_

```PHP
$string = "<h1>Hello World!</h1>";
echo htmlentities($string, ENT_QUOTES, 'UTF-8');
```

_reference: <https://dev.to/anastasionico/good-practices-how-to-sanitize-validate-and-escape-in-php-3-methods-139b>_

## Dev Info

---

- There is a file called DB_CREATION.sql at Config folder.

- Moddify the file `db_connection.example.ini` with the correct information to connect to your DataBase and rename the file to `db_connection.ini`. (remember to take the '<' and '>' signs from the options!).

## Possible attacks

---

- Defacing the Page!

```html
<script>
  var image = document.getElementsByTagName("img");
  image[0].src =
    "https://newscrewdriver.files.wordpress.com/2018/10/poptartcat320240.gif";
  var text = document.getElementsByTagName("p");
  text[1].innerHTML = "Welcome to the internet world!!!";
  text = document.getElementsByTagName("h2");
  text[0].innerHTML = "This is the future";
</script>
```

```html
<style>
  body {
    background: repeating-linear-gradient(
      45deg,
      #606dbc,
      #606dbc 10px,
      #465298 10px,
      #465298 20px
    );
  }
</style>
```

- Redirect to another page

```html
<script>
  window.location.href = "http://localhost:7000/Sec/WebSecXSSFake/";
</script>
```
