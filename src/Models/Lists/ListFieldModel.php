<?php

namespace Bitrix24Api\Models\Lists;

use Bitrix24Api\Models\AbstractModel;
use Bitrix24Api\Models\Traits\ExistsTrait;

class ListFieldModel extends AbstractModel
{
    use ExistsTrait;

    public function toArray(): array
    {
        return $this->data;
    }
}
