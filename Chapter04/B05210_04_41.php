unset($user->age); // will trigger __unset()
((unset) $user->age); // won't trigger __unset()
