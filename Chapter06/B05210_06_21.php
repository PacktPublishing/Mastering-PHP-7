<?php

trait Formatter
{
  public function formatPrice()
  {
     return sprintf('%.2F', $this->price);
  }
}
