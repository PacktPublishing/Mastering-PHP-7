$user = new User();

$user('John', 34); // outputs: John, 34

call_user_func($user, 'John', 34); // outputs: John, 34
