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

  // IMPORTANT: Getter
  public function getEmail()
  {
    return $this->email;
  }

  // IMPORTANT: Setter
  public function setEmail($email)
  {
    // NOTE: (strpos) to check specific string, if it's not in that string it will return (-1)
    if (strpos($email, '@') > -1) {
      $this->email = $email;
    }
  }
}

$userOne = new User('ali', 'aliofficial@gmail.com');
$userTwo = new User('cj', 'cjamper@gmail.com');

echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';

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
