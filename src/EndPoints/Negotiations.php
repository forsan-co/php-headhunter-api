<?php

namespace seregazhuk\HeadHunterApi\EndPoints;

use seregazhuk\HeadHunterApi\Traits\HasAll;
use seregazhuk\HeadHunterApi\Traits\HasView;

class Negotiations extends Endpoint
{
    const RESOURCE = 'negotiations';

    use HasView, HasAll;

    public function active()
    {
        return $this->getResource('active');
    }

    /**
     * @param string $id
     * @return array
     */
    public function messages($id)
    {
        return $this->getResource($id . '/messages');
    }
}