$obj = new class() {};

$obj2 = new class($a, $b) {
   private $a;
   private $b;
   public function __construct($a, $b) {
     $this->a = $a;
     $this->b = $b;
   }
};
