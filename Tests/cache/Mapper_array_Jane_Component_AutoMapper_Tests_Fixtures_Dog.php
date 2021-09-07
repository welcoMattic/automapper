<?php

final class Mapper_array_Jane_Component_AutoMapper_Tests_Fixtures_Dog extends \Jane\Component\AutoMapper\GeneratedMapper
{
    public function __construct()
    {
    }
    public function &map($value, array $context = array())
    {
        if (null === $value) {
            return $value;
        }
        $result = $context['target_to_populate'] ?? null;
        if (null === $result) {
            $result = new \Jane\Component\AutoMapper\Tests\Fixtures\Dog();
        }
        if (array_key_exists('type', $value) && \Jane\Component\AutoMapper\MapperContext::isAllowedAttribute($context, 'type', $value['type'])) {
            $result->type = $value['type'];
        }
        if (array_key_exists('name', $value) && \Jane\Component\AutoMapper\MapperContext::isAllowedAttribute($context, 'name', $value['name'])) {
            $result->name = $value['name'];
        }
        return $result;
    }
}
