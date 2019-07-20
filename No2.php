<?php
  function is_username_valid($username)
  {
    $first_string = preg_match("/^[a-zA-Z]/", $username);
    $uppercase = preg_match('@[A-Z]@', $username);
    $lowercase = preg_match('@[a-z]@', $username);
    $number    = preg_match('@[0-9]@', $username);
    if(!$first_string || !$uppercase || !$lowercase || !$number || strlen($username) > 9 || strlen($username) < 5) {
      return false;
    } else {
      return true;
}
  }
  function is_password_valid($password)
  {
    return preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=.*[=])\S*$/", $password);
  }

  //is_username_valid('Xrutaf888');
  echo is_username_valid('Xrutaf888') ? 'true' : 'false';
  //is_username_valid('1Diana');
  echo is_username_valid('1Diana') ? 'true' : 'false';
  //is_password_valid('passWORD=');
  echo is_password_valid('passW0RD=') ? 'true' : 'false';
  //is_password_valid('C0d3YourFuture!#');
  echo is_password_valid('C0d3YourFuture!#') ? 'true' : 'false';

?>
