<?php

namespace Serwisant\SerwisantApi\Types\SchemaPublic;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class SecretTokenSubject extends Types\Enum
{
  /**
  */
  const LICENCE = 'LICENCE';

  /**
  */
  const REPAIR = 'REPAIR';

  /**
  */
  const ONLINEPAYMENT = 'ONLINEPAYMENT';

  /**
  */
  const PARCEL = 'PARCEL';

  protected function schemaNamespace()
  {
    return 'SchemaPublic';
  }
}