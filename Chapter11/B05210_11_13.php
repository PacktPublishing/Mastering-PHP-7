<?php

require_once __DIR__ . '/services/Foggyline/Customer.php';
require_once __DIR__ . '/services/Foggyline/User.php';

class ServiceProxy
{
    private $customerService;
    private $userService;

    public function __construct()
    {
        $this->customerService = new Foggyline\Customer();
        $this->userService = new Foggyline\User();
    }

    /**
     * Says "Welcome customer..."
     * @soap
     * @param $name
     * @return string
     */
    public function customerWelcome($name)
    {
        return $this->customerService->welcome($name);
    }

    /**
     * Says "Welcome user..."
     * @soap
     * @param $name
     * @return string
     */
    public function userWelcome($name)
    {
        return $this->userService->welcome($name);
    }
}
