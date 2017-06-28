<?php

namespace PhpSpec\Matcher;

interface Matcher
{
    public function supports($name, $subject, array $arguments);

    public function positiveMatch($name, $subject, array $arguments);

    public function negativeMatch($name, $subject, array $arguments);

    public function getPriority();
}

