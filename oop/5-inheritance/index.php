<?php

class User
{
  private $username;
  private $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->username added a new friend";
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    if (strpos($email, '@') > -1) {
      $this->email = $email;
    }
  }
}

// IMPORTANT: Inheritance
class AdminUser extends User
{
  public $level;

  // NOTE: If we need to add new arugment on our (child class) we need to add (constructor)
  public function __construct($username, $email, $level)
  {
    $this->level = $level;
    // NOTE: This will pass the argument from (child to parent class) so we can use both (constructor)
    parent::__construct($username, $email);
  }
}

$userOne = new User('ali', 'aliofficial@gmail.com');
$userTwo = new User('cj', 'cjamper@gmail.com');

// NOTE: We don't need to add a (constructor) inside of this (class) it will trigger the (constructor) of the (parent class) which is the (User)
// $adminUserOne = new AdminUser('ig', 'igmtofficial@gmail.com')

$adminUserOne = new AdminUser('ig', 'igmtofficial@gmail.com', 5);
?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
