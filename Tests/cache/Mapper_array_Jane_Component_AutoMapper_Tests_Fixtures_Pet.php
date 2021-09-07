<?php

final class Mapper_array_Jane_Component_AutoMapper_Tests_Fixtures_Pet extends \Jane\Component\AutoMapper\GeneratedMapper
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
            if ('cat' === $value['type']) {
                return $this->mappers['Discriminator_Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Cat']->map($value, $context);
            }
            if ('dog' === $value['type']) {
                return $this->mappers['Discriminator_Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Dog']->map($value, $context);
            }
            $result = new \Jane\Component\AutoMapper\Tests\Fixtures\Pet();
        }
        if (array_key_exists('type', $value) && \Jane\Component\AutoMapper\MapperContext::isAllowedAttribute($context, 'type', $value['type'])) {
            $result->type = $value['type'];
        }
        if (array_key_exists('name', $value) && \Jane\Component\AutoMapper\MapperContext::isAllowedAttribute($context, 'name', $value['name'])) {
            $result->name = $value['name'];
        }
        return $result;
    }
    public function injectMappers(\Jane\Component\AutoMapper\AutoMapperRegistryInterface $autoMapperRegistry) : void
    {
        $this->mappers['Discriminator_Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Cat'] = $autoMapperRegistry->getMapper('array', 'Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Cat');
        $this->mappers['Discriminator_Mapper_array_Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Dog'] = $autoMapperRegistry->getMapper('array', 'Jane\\Component\\AutoMapper\\Tests\\Fixtures\\Dog');
    }
}
