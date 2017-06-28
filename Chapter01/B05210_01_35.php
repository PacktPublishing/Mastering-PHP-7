function A(): void {
   // valid
}

function B(): void {
   return; // valid
}

function C(): void {
   return null; // invalid
}

function D(): void {
   return 1; // invalid
}
