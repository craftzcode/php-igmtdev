<?php

class User
{
  private $username;

  protected $email;

  public $role = 'USER';

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  // IMPORTANT: Destructor
  public function __destruct()
  {
    echo "the user $this->username was removed <br>";
  }

  // IMPORTANT: Clone
  public function __clone()
  {
    $this->username = $this->username . '(cloned)<br>';
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

  public $role = 'ADMIN';

  public function __construct($username, $email, $level)
  {
    $this->level = $level;
    parent::__construct($username, $email);
  }

  public function message()
  {
    return "$this->email, an admin, sent a new message";
  }
}

$userOne = new User('ali', 'aliofficial@gmail.com');
$userTwo = new User('cj', 'cjamper@gmail.com');

$adminUserOne = new AdminUser('ig', 'igmtofficial@gmail.com', 5);

// IMPORTANT: Clone
$userThree = clone $userOne;

?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
