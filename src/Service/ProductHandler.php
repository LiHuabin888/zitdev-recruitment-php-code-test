<?php

namespace App\Service;

class ProductHandler
{
    private $products = [
        [
            'id' => 1,
            'name' => 'Coca-cola',
            'type' => 'Drinks',
            'price' => 10,
            'create_at' => '2021-04-20 10:00:00',
        ],
        [
            'id' => 2,
            'name' => 'Persi',
            'type' => 'Drinks',
            'price' => 5,
            'create_at' => '2021-04-21 09:00:00',
        ],
        [
            'id' => 3,
            'name' => 'Ham Sandwich',
            'type' => 'Sandwich',
            'price' => 45,
            'create_at' => '2021-04-20 19:00:00',
        ],
        [
            'id' => 4,
            'name' => 'Cup cake',
            'type' => 'Dessert',
            'price' => 35,
            'create_at' => '2021-04-18 08:45:00',
        ],
        [
            'id' => 5,
            'name' => 'New York Cheese Cake',
            'type' => 'Dessert',
            'price' => 40,
            'create_at' => '2021-04-19 14:38:00',
        ],
        [
            'id' => 6,
            'name' => 'Lemon Tea',
            'type' => 'Drinks',
            'price' => 8,
            'create_at' => '2021-04-04 19:23:00',
        ],
    ];

    //计算商品总金额
    public function getTotalPrice()
    {
        $productsPrices = array_column($this->products, 'price');
        // var_dump(PHP_EOL . '求取商品总金额: ' . array_sum($productsPrices) . PHP_EOL);
        return array_sum($productsPrices);
    }

    //把商品以金額排序（由大至小），並篩選商品類種是 “dessert” 的商品
    public function sortByKeys()
    {
        //筛选商品并且金额由大到小排序的数组
        $dessertProduct = [];
        foreach ($this->products as $value) {
            if ($value['type'] == 'Dessert') {
                $dessertProduct[] = $value;
            }
        }
        $arr = array_column($dessertProduct, 'price');
        array_multisort($arr, SORT_DESC, $dessertProduct);
        // 结果
        // var_dump(PHP_EOL . '商品以金額排序（由大至小），並篩選商品類種是 “dessert” 的商品: ' . json_encode($dessertProduct) . PHP_EOL);
        return $dessertProduct;
    }

    //时间转成时间戳
    public function changeDateIntoTimestamp()
    {
        $productsArray = $this->products;
        foreach ($productsArray as &$value) {
            $value['create_at'] = strtotime($value['create_at']);
        }
        //结果
        // var_dump(PHP_EOL . 'string to timestamp: ' . json_encode($productsArray) . PHP_EOL);
        return $productsArray;
    }
}