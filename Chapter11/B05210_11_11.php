<?php

namespace Foggyline;

class Customer
{
    /**
     * Says "Welcome customer..."
     * @param $name
     * @return string
     */
    function welcome($name)
    {
        return 'Welcome customer: ' . $name;
    }
}

