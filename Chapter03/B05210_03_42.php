    <?php

    class UsernameException extends Exception {}

    class PasswordException extends Exception {}

    $username = 'john';
    $password = '';

    try {
      if (empty($username)) {
        throw new UsernameException();
      }
      if (empty($password)) {
        throw new PasswordException();
      }
      throw new Exception();
    }
    catch (UsernameException $e) {
      echo 'Caught UsernameException.';
    }
    catch (PasswordException $e) {
      echo 'Caught PasswordException.';
    }
    catch (Exception $e) {
      echo 'Caught Exception.';
    }
    finally {
      echo 'Finally.';
    }
