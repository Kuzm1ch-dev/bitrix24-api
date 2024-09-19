<?php

namespace Bitrix24Api\EntitiesServices\CRM;

use Bitrix24Api\EntitiesServices\BaseEntity;
use Bitrix24Api\EntitiesServices\Traits\Base\DeleteTrait;
use Bitrix24Api\EntitiesServices\Traits\Base\GetListTrait;
use Bitrix24Api\EntitiesServices\Traits\Base\GetTrait;
use Bitrix24Api\Models\CRM\CompanyContactItemsMode;

class CompanyContactItems extends BaseEntity
{
    use GetListTrait, GetTrait, DeleteTrait;

    protected string $method = 'crm.contact.company.items.%s';
    public const ITEM_CLASS = CompanyContactItemsMode::class;
    protected string $resultKey = '';
    protected string $listMethod = 'get';
}
