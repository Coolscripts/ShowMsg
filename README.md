![Coolscripts](https://cool-scripts.com/images/black-logo.png)

# ShowMsg
ShowMsg is great and easy to use to show success or errors messages in your PHP code.

## Features
- Show error and success messages.
- Easy to use and compatible with all versions of PHP.
- Open source for personal use.

## How to use
#### First : 

```php
<?php
use CoolScripts\ShowMsg;

require 'path/to/ShowMsg/class.showmsg.php';

```

#### Second, you must enter the message :

```php
/* 
For example : 
*/
$msg = new ShowMsg();

// If you want to show a message error
$msg->errors("Your First Error Here.");
$msg->errors("Your Second Error Here.");

// If you want to show a message success
$msg->success("Your First Success Message Here.");
$msg->success("Your Second Success Message Here.");

```

#### Third, show the message :
It is recommended to use the Bootstrap library to show the message beautifully and attractively.

```php
<?= $msg->display(); ?>

```
## A Simple Example

```php
<?php
use CoolScripts\ShowMsg;

require 'path/to/ShowMsg/class.showmsg.php';

$msg = new ShowMsg();

if (isset($_POST['login'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $msg->errors("Please enter all fields.");
  } elseif ($_POST['username'] != 'database_username' || $_POST['password'] != 'database_password') {
    $msg->errors("Username or password is wrong.");
  } else {
    $msg->success("You have successfully signed in.");
  }
}

?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <title>Test ShowMsg Class</title>
</head>
<body>
   <div class="sign-in-box" >
   <!-- Display Your Message -->
   <?= display(); ?>
      <form action="" method="POST" >
           <!-- Your input -->
           <input name="username" value="" placeholder="Username ..." type="text" />
           <input name="password" value="" placeholder="Password ..." type="password" />
           
           <!-- Submit Button -->
           <input name="login" value="Login In" type="submit" />
           
      </form>
   </div>
</body>
</html>
```
----

ShowMsg is released under the [MIT License](https://opensource.org/licenses/MIT).

Copyright © [Cool Scripts](https://cool-scripts.com) &lt;support@cool-scripts.com&gt;
