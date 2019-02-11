<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\CsvParse;
use DesignPatterns\Creational\AbstractFactory\JsonParser;
use DesignPatterns\Creational\AbstractFactory\ParserFactory;
require_once '../../../vendor/autoload.php';
use PHPUnit\Framework\TestCase;




class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser =$factory->createCsvParser(CsvParse::OPTION_CONTAINS_HEADER);
        $this->assertInstanceOf(CsvParse::class,$parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser =  $factory->createJsonParser();
        $this->assertInstanceOf(JsonParser::class,$parser);
    }
}
