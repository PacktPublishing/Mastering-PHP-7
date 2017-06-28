<?php

class Output
{
    protected $content;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        return $this->content;
    }
}

class JsonOutput extends Output
{
    public function render()
    {
        return json_encode($this->content);
    }
}

class SerializedOutput extends Output
{
    public function render()
    {
        return serialize($this->content);
    }
}
