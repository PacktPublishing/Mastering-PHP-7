function welcome(?string $name) {
   echo $name;
}

welcome(); // invalid
welcome(null); // valid
