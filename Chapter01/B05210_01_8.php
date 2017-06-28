interface Salary {
      public function pay();
   }

   trait Util {
      public function format(float $number) {
         return number_format($number, 2);
      }
   }

   class User {
      private $IBAN;
      protected $salary;

      public function __construct($IBAN, $salary) {
         $this->IBAN = $IBAN;
         $this->salary = $salary;
      }

      function salary() {
       return new class($this->IBAN, $this->salary) implements Salary {
         use Util;

         private $_IBAN;
         protected $_salary;

         public function __construct($IBAN, $salary) {
            $this->_IBAN = $IBAN;
            $this->_salary = $salary;
         }

        public function pay() {
           echo $this->_IBAN . ' ' . $this->format($this->_salary);
        }
     };
   }
 }

 $user = new User('GB29NWBK60161331926819', 4500.00);
 $user->salary()->pay();
