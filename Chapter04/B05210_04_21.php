public function __call($method, $args)
{
   switch (substr($method, 0, 3)) {
     case 'get':
       $key = $this->_underscore(substr($method, 3));
       $index = isset($args[0]) ? $args[0] : null;
     return $this->getData($key, $index);
     case 'set':
       $key = $this->_underscore(substr($method, 3));
       $value = isset($args[0]) ? $args[0] : null;
     return $this->setData($key, $value);
     case 'uns':
       $key = $this->_underscore(substr($method, 3));
     return $this->unsetData($key);
     case 'has':
       $key = $this->_underscore(substr($method, 3));
     return isset($this->_data[$key]);
   }
   // ...
}
