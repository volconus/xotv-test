<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Products;
use App\ProductVariants;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $successStatus = 200;

    public function getPrice($providerName, $productName)
    {
        $data = Products
            ::join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('providers', 'products.provider_id', '=', 'providers.id')
            ->select('product_variants.price')
            ->where('products.name', $productName)
            ->where('providers.name', $providerName)
            ->get();

        if ($data->isNotEmpty())
            return $data;
        else
            return ['error' => 'Not Found'];
    }

    public function getVariantsPrice($providerName, $productName, $productVariant)
    {
        $data = Products
            ::join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('providers', 'products.provider_id', '=', 'providers.id')
            ->select('product_variants.price')
            ->where('products.name', $productName)
            ->where('providers.name', $providerName)
            ->where('product_variants.name', $productVariant)
            ->get();

        if ($data->isNotEmpty())
            return $data;
        else
            return ['error' => 'Not Found'];
    }

    public function updatePrice(Request $request, $providerName, $productName, $productVariant)
    {
        $new_price = $request->input('new_price');
        if (!$new_price || $new_price === null || empty($new_price))
            return ['error' => 'New price must be filled.'];

        $variant = Products
            ::join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('providers', 'products.provider_id', '=', 'providers.id')
            ->select('product_variants.id')
            ->where('products.name', $productName)
            ->where('providers.name', $providerName)
            ->where('product_variants.name', $productVariant)
            ->get()->first();

        try {
            $variant = ProductVariants::find($variant->id);
            $variant->price = $new_price;
            if ($variant->save())
                return ['status' => 'OK'];
            else
                return ['status' => 'ERR'];
        } catch (\Exception $err) {
            return [
                'status' => 'ERR',
                'error' => 'Update Error'
            ];
        }
    }
}
