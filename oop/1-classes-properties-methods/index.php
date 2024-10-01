<?php

// IMPORTANT: Class
class User
{
  // IMPORTANT: Property
  public $username = 'ali';
  public $email = 'aliofficial@gmail.com';

  // IMPORTANT: Methods
  public function addFriend()
  {
    return "$this->username added a new friend";
  }
}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';

// NOTE: This will assign new value in the property
$userTwo->username = 'cj';
$userTwo->email = 'cjamper@gmail.com';

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
