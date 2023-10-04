<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class DevicesFilter extends Types\Type
{
  /**
   * @var string
  */
  public $type;

  /**
   * @var string
  */
  public $ID;

  protected function schemaNamespace()
  {
    return 'SchemaService';
  }
}