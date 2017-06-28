/*** expression syntax ***/
$$foo['bar']['baz']

// PHP 5.x meaning
${$foo['bar']['baz']}

// PHP 7.x meaning
($$foo)['bar']['baz']


/*** expression syntax ***/
$foo->$bar['baz']

// PHP 5.x meaning
$foo->{$bar['baz']}

// PHP 7.x meaning
($foo->$bar)['baz']


/*** expression syntax ***/
$foo->$bar['baz']()

// PHP 5.x meaning
$foo->{$bar['baz']}()

// PHP 7.x meaning
($foo->$bar)['baz']()


/*** expression syntax ***/
Foo::$bar['baz']()

// PHP 5.x meaning
Foo::{$bar['baz']}()

// PHP 7.x meaning
(Foo::$bar)['baz']()
