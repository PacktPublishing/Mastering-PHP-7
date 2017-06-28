// dynamic typed (no specific type defined, directly assigning value)
$name = "Branko"; // string
$salary = 4200.00; // float
$age = 33; // int

// weak typed (variable value reassigned into different type)
$salary = 4200.00; // float
$salary = $salary + "USD"; // float
$salary = $salary . "USD"; // string
