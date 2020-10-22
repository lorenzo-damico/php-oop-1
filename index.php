<?php

class User {
  public $name;
  public $surname;
  public $age;
  public $username;
  public $email;
  public $password;

  public function __construct($_username, $_password) {
    $this->username = $_username;
    $this->password = $_password;
  }

  public function printEmail($username) {
    $this->email = $username . "@gmail.com";
  }
}


$user1 = new User("pinco", "aaaaaaaa");
$user1->printEmail($user1->username);

$user2 = new User("pallo", "bbbbbbbb");
$user2->printEmail($user2->username);

$user3 = new User("pippo", "cccccccc");
$user3->printEmail($user3->username);

$users = [$user1, $user2, $user3];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Dati Utenti</h1>
    <table>

      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($users as $user) { ?>
          <tr>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->password; ?></td>
          </tr>
        <?php } ?>
      </tbody>

    </table>
  </body>
</html>
