<?php

trait CsvHandler
{
   public function import()
   {
      echo 'CsvHandler > import' . PHP_EOL;
   }

public function export()
   {
      echo 'CsvHandler > export' . PHP_EOL;
    }
}

trait XmlHandler
{
   public function import()
   {
      echo 'XmlHandler > import' . PHP_EOL;
   }

   public function export()
   {
      echo 'XmlHandler > export' . PHP_EOL;
   }
}

class SalesOrder
{
   use CsvHandler, XmlHandler {
      XmlHandler::import insteadof CsvHandler;
      CsvHandler::export insteadof XmlHandler;
      XmlHandler::export as exp;
   }

   public function initImport()
   {
      $this->import();
   }

   public function initExport()
   {
      $this->export();
      $this->exp();
   }
}

$order = new SalesOrder();
$order->initImport();
$order->initExport();

//XmlHandler > import
//CsvHandler > export
//XmlHandler > export
