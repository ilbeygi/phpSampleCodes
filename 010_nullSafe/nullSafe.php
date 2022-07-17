<?php
class customer
{
    public function getAddress(): ?Address
    {
        // return new Address;
        return null;
    }
}
class Address
{
    public function getCountry(): string
    {
        return "Iran";
    }
}
$country = (new customer)->getAddress()?->getCountry();
var_dump($country);