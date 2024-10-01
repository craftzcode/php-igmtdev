<?php

class User
{
  public $username;
  public $email;

  // IMPORTANT: Constructor
  // NOTE: This (constructor) will fire every create a new instance of this (class)
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

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';
echo $userTwo->addFriend() . '<br>';
?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
