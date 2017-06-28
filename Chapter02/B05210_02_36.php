<?php

namespace Psr\Link;

interface LinkInterface
{
  public function getHref();
  public function isTemplated();
  public function getRels();
  public function getAttributes();
}
