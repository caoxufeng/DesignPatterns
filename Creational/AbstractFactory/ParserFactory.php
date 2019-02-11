<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ParserFactory
{

    public function createCsvParser(bool $skinHeaderLine):CsvParse
    {
        return new CsvParse($skinHeaderLine);
    }

    public function createJsonParser():JsonParser
    {
        return new JsonParser();
    }
}