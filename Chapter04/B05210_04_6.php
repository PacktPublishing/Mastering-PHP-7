class Employee extends User
{
 public function __construct($employeeName, $employeeAge)
 {
   parent::__construct($employeeName, $employeeAge);
   var_dump($this->name);
   var_dump($this->age);
 }
}
