<?php

class JsonOutput
{
  protected $content;

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function render()
  {
    return json_encode($this->content);
  }
}

class SerializedOutput
{
  protected $content;

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function render()
  {
    return serialize($this->content);
  }
}

$users = [
  ['user' => 'John', 'age' => 34],
  ['user' => 'Alice', 'age' => 33],
];

$json = new JsonOutput();
$json->setContent($users);
echo $json->render();

$ser = new SerializedOutput();
$ser->setContent($users);
echo $ser->render();
