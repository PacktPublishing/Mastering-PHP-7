<?php

try {
    //...
} catch (\Exception $e) {
    $this->logger->critical($e);
    $messages[] = __("We can't add this item to your shopping cart right now . ");
}
