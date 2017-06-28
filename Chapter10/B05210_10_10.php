<?php

interface PdfInterface
{
    public function generate();
}

class Pdf implements PdfInterface
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
        // Imagine resource intensive pdf generation here
        sleep(3);
    }

    public function generate()
    {
        echo 'pdf: ' . $this->data;
    }
}

class ProxyPdf implements PdfInterface
{
    private $pdf = null;
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function generate()
    {
        if (is_null($this->pdf)) {
            $this->pdf = new Pdf($this->data);
        }
        $this->pdf->generate();
    }
}

// Client
$pdf = new Pdf('<h1>Hello</h1>'); // 3 seconds
// Some other code ...
$pdf->generate();

$pdf = new ProxyPdf('<h1>Hello</h1>'); // 0 seconds
// Some other code ...
$pdf->generate();
