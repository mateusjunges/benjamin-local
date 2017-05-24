<?php
namespace Tests\Helpers\Providers\es_CL;

use Tests\Helpers\Providers\Address as BaseAddress;

class Address extends BaseAddress
{
    public function addressModel()
    {
        $model = parent::addressModel();
        $model->country = 'Chile';

        return $model;
    }

    public function stateAbbr()
    {
        return '';
    }
}
