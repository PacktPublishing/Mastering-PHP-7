<?php

  interface MyThrowable extends Throwable
  {
    //...
  }

  class MyException extends Exception implements MyThrowable
  {
    //...
  }

  throw new MyException();
