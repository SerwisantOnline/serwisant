<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class DevicesSort extends Types\Enum
{
  /**
  */
  const ID = 'ID';

  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}