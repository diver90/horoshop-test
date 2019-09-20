<?php

namespace Horoshop;

use Horoshop\Exceptions\UnavailablePageException;

class ProductAggregator
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $data;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->data = json_decode(file_get_contents($filename));
    }

    /**
     * @param string $currency
     * @param int $page
     * @param int $perPage
     *
     * @return string Json
     * @throws UnavailablePageException
     */
    public function find(string $currency, int $page, int $perPage): string
    {
        //$data = loadData();


        //TODO implement
    }

    private function prepareProducts()
    {
        $products = $this->data['products'];
        $items = [];
        foreach ($products as $num => $product) {
            $items[$num]['id'] = $product['id'];
            $items[$num]['title'] = $product['title'];
            $items[$num]['category'] = array_search($product['category'], $this->data['category'], true);
            $discountCategory = array_search($product['category'], $this->data['discounts'], true);
            $discountProduct = array_search($product['id'], $this->data['discounts'], true);
            $discount = $this->chooseDiscount($product['amount'], $discountCategory,$discountProduct);
            $items[$num]['price'] = $this->countPrice($product);
        }

    }

    /**
     * @param array $product
     */
    private function countPrice($product)
    {

    }

    /**
     * @param float $amount
     * @param array $discountCategory
     * @param array $discountProduct
     */
    private function chooseDiscount($amount, $discountCategory, $discountProduct)
    {

    }

}