<?php

namespace Psr\Link;

interface LinkProviderInterface
{
  public function getLinks();
  public function getLinksByRel($rel);
}
