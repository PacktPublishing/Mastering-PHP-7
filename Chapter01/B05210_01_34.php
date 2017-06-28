function welcome($name): ?string
  {
    return null; // valid
  }

function welcome($name): ?string
  {
    return 'Welcome ' . $name; // valid
  }

function welcome($name): ?string
 {
   return 33; // invalid
 }
