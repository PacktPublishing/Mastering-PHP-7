// The class constant - using 'const' keyword
class Rift {
  const APP = [
  'name' => 'Rift',
  'edition' => 'Community',
  'version' => '2.1.2',
  'licence' => 'OSL'
  ];
}

// The class constant - using 'const' keyword
interface IRift {
  const APP = [
  'name' => 'Rift',
  'edition' => 'Community',
  'version' => '2.1.2',
  'licence' => 'OSL'
  ];
}

// The constant - using 'define' construct
define('APP', [
  'name' => 'Rift',
  'edition' => 'Community',
  'version' => '2.1.2',
  'licence' => 'OSL'
]);

echo Rift::APP['version'];
echo IRift::APP['version'];
echo APP['version'];
