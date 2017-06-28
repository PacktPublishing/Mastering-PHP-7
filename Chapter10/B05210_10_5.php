<?php

class Image
{
    private $width;
    private $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
}

interface ImageBuilderInterface
{
    public function setWidth($width);

    public function setHeight($height);

    public function getResult();
}

class ImageBuilder implements ImageBuilderInterface
{
    private $image;

    public function __construct()
    {
        $this->image = new Image();
    }

    public function setWidth($width)
    {
        $this->image->setWidth($width);
        return $this;
    }

    public function setHeight($height)
    {
        $this->image->setHeight($height);
        return $this;
    }

    public function getResult()
    {
        return $this->image;
    }
}

class ImageBuildDirector
{
    private $builder;

    public function __construct(ImageBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->setWidth(120);
        $this->builder->setHeight(80);
        return $this;
    }

    public function getImage()
    {
        return $this->builder->getResult();
    }
}

// Client use
$imageBuilder = new ImageBuilder();
$imageBuildDirector = new ImageBuildDirector($imageBuilder);
$image = $imageBuildDirector->build()->getImage();

var_dump($image);
// object(Image)#2 (2) { ["width":"Image":private]=> int(120) ["height":"Image":private]=> int(80) }
