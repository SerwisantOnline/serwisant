<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class Address extends Types\Type
{
  /**
   * @var string
  */
  public $building;

  /**
   * @var string
  */
  public $city;

  /**
   * @var string
  */
  public $countryIso;

  /**
   * @var string
  */
  public $postalCode;

  /**
   * @var string
  */
  public $street;

  /**
   * @var AddressType
  */
  public $type;

  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}