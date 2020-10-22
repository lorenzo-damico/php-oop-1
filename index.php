<?php

class User {
  public $name;
  public $surname;
  public $age;
  public $username;
  public $email;
  public $password;

  public function __construct($_username, $_email, $_password) {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
  }
}


$user1 = new User("pinco", "pinco@gmail.com", "aaaaaaaa");
$user2 = new User("pallo", "pallo@gmail.com", "bbbbbbbb");
$user3 = new User("pippo", "pippo@gmail.com", "cccccccc");

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
