<?php

namespace shop\readModels\Shop;

use shop\entities\Shop\Brand;

class BrandReadRepository
{
    public function find($id)
    {
        return Brand::findOne($id);
    }
}