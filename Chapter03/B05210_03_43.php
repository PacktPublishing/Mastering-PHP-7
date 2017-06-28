    <?php

    class FileNotExistException extends Exception {}

    class FileReadException extends Exception {}

    class FileEmptyException extends Exception {}

    $file = 'story.txt';

    try {
      try {
        $content = file_get_contents($file);
        if (!$content) {
          throw new Exception();
        }
      }
    catch (Exception $e) {
      if (!file_exists($file)) {
        throw new FileNotExistException();
      }
      elseif (!is_readable($file)) {
        throw new FileReadException();
      }
      elseif (empty($content)) {
        throw new FileEmptyException();
      }
      else {
        throw new Exception();
      }
    }
    }
    catch (FileNotExistException $e) {
      echo 'Caught FileNotExistException.';
    }
    catch (FileReadException $e) {
      echo 'Caught FileReadException.';
    }
    catch (FileEmptyException $e) {
      echo 'Caught FileEmptyException.';
    }
    catch (Exception $e) {
      echo 'Caught Exception.';
    }
    finally {
      echo 'Finally.';
    }
