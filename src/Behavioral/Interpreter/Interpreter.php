<?php namespace UKCASmith\DesignPatterns\Behavioral\Interpreter;

use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Context;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Expression;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Interpret;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Exceptions\MissingGrammarException;

class Interpreter implements Interpret
{

    const QUANTITY = 0;
    const ORIGINAL_MEASUREMENT = 1;
    const DESTINATION_MEASUREMENT = 2;

    protected $expressions;

    /**
     * Interpreter constructor.
     *
     * @param Expression $expression
     */
    public function __construct(Expression $expression)
    {
        $this->expressions = $expression;
    }

    /**
     * Interpret
     *
     * @param Context $context
     * @return bool|string
     * @throws MissingGrammarException
     */
    public function interpret(Context $context)
    {
        $fromQuantityAndMeasurement = $context->getFrom();

        $quantity = $fromQuantityAndMeasurement[self::QUANTITY];
        $originalMeasurement = $fromQuantityAndMeasurement[self::ORIGINAL_MEASUREMENT];

        $destinationMeasurement = $context->getTo()[0];
        if (empty($destinationMeasurement)) {
            throw new MissingGrammarException('You must state a measurement to convert to.');
        }

        $measurement = $this->expressions->solve($originalMeasurement);

        if (!$measurement) {
            return false;
        }

        $conversionValue = $quantity * ($measurement->solve($destinationMeasurement));

        if ($quantity <= 1 && substr($destinationMeasurement, -1) == 's') {
            $destinationMeasurement = substr($destinationMeasurement, 0, -1);
        }

        if (substr($originalMeasurement, -1) != 's') {
            $originalMeasurement = $originalMeasurement . 's';
        }

        return $quantity . ' ' . $destinationMeasurement . ' to ' . $originalMeasurement . ' = ' . $conversionValue;
    }
}