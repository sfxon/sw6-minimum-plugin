<?php declare(strict_types=1);

namespace Myfav\Minimal;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\CustomField\CustomFieldTypes;
use Shopware\Core\Framework\DataAbstractionLayer\Dbal\Exception\UnmappedFieldException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\IdSearchResult;


class MyfavMinimal extends Plugin
{
	public function install(InstallContext $installContext): void
	{
		/*
		$customFieldSetRepository = $this->container->get('custom_field_set.repository');
		
		if(null === $this->customFieldsExist($installContext->getContext(), 'myfav_custom_field_obility_enabled', 'myfav_obility')) {
			$customFieldSetRepository->create([
				[
					'name' => 'myfav_obility',
					'config' => [
						'label' => [
							'de-DE' => 'Obility'
						]
					],
					'customFields' => [
						[
							'name' => 'myfav_custom_field_obility_enabled',
							'type' => CustomFieldTypes::BOOL,
							'config' => [
								'label' => [
									'de-DE' => 'Obility Konfigurator aktivieren'
								],
								'type' => 'checkbox',
								'customFieldType' => 'checkbox',
								'customFieldPosition' => 10,
							]
						]
					],
					'relations' => [
						[
							'id' => Uuid::randomHex(),
							'entityName' => 'product'
						]
					]
				]
			], $installContext->getContext());
		}
		*/
	}
	
	private function customFieldsExist(Context $context, $fieldName, $fieldSetName): ?IdSearchResult
    {
		return $this->container->get('custom_field_set.repository')->searchIds(
            (new Criteria())->addFilter(new EqualsFilter(
                'name', "myfav_obility")), $context);
    }
}