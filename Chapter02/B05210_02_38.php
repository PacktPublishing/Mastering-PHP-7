<?php

namespace Psr\Link;

interface EvolvableLinkInterface extends LinkInterface
{
  public function withHref($href);
  public function withRel($rel);
  public function withoutRel($rel);
  public function withAttribute($attribute, $value);
  public function withoutAttribute($attribute);
}
