public function __isset($key)
{
  switch (true) {
    case isset($this->params[$key]):
    return true;

    case isset($this->queryParams[$key]):
    return true;

    case isset($this->postParams[$key]):
    return true;

    case isset($_COOKIE[$key]):
    return true;

    case isset($this->serverParams[$key]):
    return true;

    case isset($this->envParams[$key]):
    return true;

    default:
    return false;
  }
}
