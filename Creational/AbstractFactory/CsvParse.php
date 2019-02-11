<?php

namespace DesignPatterns\Creational\AbstractFactory;

class CsvParse implements Parser
{
    const OPTION_CONTAINS_HEADER =true;
    const OPTION_CONTAINS_NO_HEADER = false;

    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array
    {

        $headerWasParsed = false;
        $parsedLine = [];

        foreach (explode(PHP_EOL,$input) as $line){

            if(!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER){
                continue
            }
            $parsedLine[] = str_getcsv($line);


        }
        return $parsedLine;
    }
}
