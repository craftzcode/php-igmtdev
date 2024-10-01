<?php

class User
{
  private $username;

  // NOTE: (protected) it can access both (parent and child class)
  protected $email;

  public $role = 'USER';

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

  public function message()
  {
    return $this->email . 'sent a new message';
  }
}

class AdminUser extends User
{
  public $level;

  // NOTE: This will override the (role property) of the (parent class) which is the (User)
  public $role = 'ADMIN';

  public function __construct($username, $email, $level)
  {
    $this->level = $level;
    parent::__construct($username, $email);
  }

  // NOTE: This will override the (message method) of (parent class) because we change the (private email property) to (protected email property)
  public function message()
  {
    return "$this->email, an admin, sent a new message";
  }
}

$userOne = new User('ali', 'aliofficial@gmail.com');
$userTwo = new User('cj', 'cjamper@gmail.com');

$adminUserOne = new AdminUser('ig', 'igmtofficial@gmail.com', 5);
?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
