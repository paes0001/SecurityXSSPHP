# Simple PHP Example

This code has a 2 pages:

/WebSec -> shows a page where the input is sanitazed.
/WebSecXSS -> shows a page vunerable to XSS because the input is not sanitazed.

## Function used to sanitaze Input

#### In this project the input is sanitazed using the code:

```PHP

$nameInput = trim(strip_tags($_POST["name"]));
$commentInput = trim(strip_tags($_POST["comment"]));

```
<sub>reference: https://www.php.net/manual/en/function.strip-tags.php</sub>

#### Other ways to sanitize the input of the user is to use the functions:

```PHP

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

```
<sub>reference: https://www.w3schools.com/php/php_filter.asp</sub>


```PHP
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
```
<sub>reference: https://www.w3schools.com/php/php_filter.asp</sub>


```PHP
$string = "<h1>Hello World!</h1>";
echo htmlentities($string, ENT_QUOTES, 'UTF-8');
```
<sub>reference: https://dev.to/anastasionico/good-practices-how-to-sanitize-validate-and-escape-in-php-3-methods-139b</sub>

