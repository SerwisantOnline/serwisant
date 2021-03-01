<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class CustomerAgreementsFilter extends Types\Type
{
  /**
   * @var string
  */
  public $ID;

  /**
   * @var CustomerAgreementType[]
  */
  public $types = [];
  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}