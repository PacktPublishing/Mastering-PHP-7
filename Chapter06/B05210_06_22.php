<?php

trait SalesOrderCustomer
{
  public function getCustomerFirstname()
  { /* body */
  }

  public function getCustomerEmail()
  { /* body */
  }

  public function getCustomerGender()
  { /* body */
  }
}

trait SalesOrderActions
{
  public function cancel()
  { /* body */
  }

  public function complete()
  { /* body */
  }

  public function hold()
  { /* body */
  }
}

class SalesOrder
{
  use SalesOrderCustomer;
  use SalesOrderActions;

  /* body */
}
