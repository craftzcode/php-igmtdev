<?php

class User
{
  // NOTE: (private) we can only access this (property) inside of this (class)
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
}

$userOne = new User('ali', 'aliofficial@gmail.com');
$userTwo = new User('cj', 'cjamper@gmail.com');

echo $userOne->addFriend() . '<br>';

echo $userTwo->addFriend() . '<br>';
?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
