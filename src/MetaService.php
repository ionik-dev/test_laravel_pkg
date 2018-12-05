<?php


namespace Gomlyakov\Meta;


class MetaService
{
    protected $property = "strength";
    protected $value;

    /**
     * MetaService constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getPropertyValue(): string
    {
        return $this->property . ' ' . $this->value;
    }


}