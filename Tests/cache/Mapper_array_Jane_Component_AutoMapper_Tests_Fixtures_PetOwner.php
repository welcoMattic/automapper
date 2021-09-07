<?php

final class Mapper_array_Jane_Component_AutoMapper_Tests_Fixtures_PetOwner extends \Jane\Component\AutoMapper\GeneratedMapper
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
            $result = new \Jane\Component\AutoMapper\Tests\Fixtures\PetOwner();
        }
        $context = \Jane\Component\AutoMapper\MapperContext::withIncrementedDepth($context);
        if (array_key_exists('pets', $value) && \Jane\Component\AutoMapper\MapperContext::isAllowedAttribute($context, 'pets', $value['pets'])) {
            $values = array();
            foreach ($value['pets'] as $key => $value_1) {
                $result->addPet($this->mappers['Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Pet']->map($value_1, \Jane\Component\AutoMapper\MapperContext::withNewContext($context, 'pets')));
            }
        }
        return $result;
    }
    public function injectMappers(\Jane\Component\AutoMapper\AutoMapperRegistryInterface $autoMapperRegistry) : void
    {
        $this->mappers['Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Pet'] = $autoMapperRegistry->getMapper('array', 'Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Pet');
    }
}
