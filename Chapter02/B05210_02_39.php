<?php

namespace Psr\Link;

interface EvolvableLinkProviderInterface extends LinkProviderInterface
{
  public function withLink(LinkInterface $link);
  public function withoutLink(LinkInterface $link);
}
