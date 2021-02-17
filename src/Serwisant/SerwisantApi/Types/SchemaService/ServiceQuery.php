<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class ServiceQuery extends Types\RootType
{
  /**
   * Will return a list of custom fields, that can be assigned to specific subject like customer or repair
   * @param CustomFieldForm $form
   * @return CustomField[]
   */
  public function customFields(CustomFieldForm $form, $vars = array())
  {
     return $this->inputArgs('customFields', array_merge($vars, ['form' => $form]));
  }

  /**
   * Return agreements customer should view or accept
   * @param CustomerAgreementsFilter $filter
   * @return CustomerAgreement[]
   */
  public function customerAgreements(CustomerAgreementsFilter $filter = null, $vars = array())
  {
     return $this->inputArgs('customerAgreements', array_merge($vars, ['filter' => $filter]));
  }

  /**
   * Return list of customers filtered with specified conditions
   * @param int $limit
   * @param int $page
   * @param CustomersFilter $filter
   * @param CustomersSort $sort
   * @return CustomersResult
   */
  public function customers(int $limit = null, int $page = null, CustomersFilter $filter = null, CustomersSort $sort = null, $vars = array())
  {
     return $this->inputArgs('customers', array_merge($vars, ['limit' => $limit, 'page' => $page, 'filter' => $filter, 'sort' => $sort]));
  }

  /**
   * Return entries for specified dictionary type
   * @param DictionaryEntriesFilter $filter
   * @return Dictionary[]
   */
  public function dictionaryEntries(DictionaryEntriesFilter $filter = null, $vars = array())
  {
     return $this->inputArgs('dictionaryEntries', array_merge($vars, ['filter' => $filter]));
  }

  /**
   * Return list of repairs filtered with specified conditions
   * @param int $limit
   * @param int $page
   * @param RepairsFilter $filter
   * @param RepairsSort $sort
   * @return RepairsResult
   */
  public function repairs(int $limit = null, int $page = null, RepairsFilter $filter = null, RepairsSort $sort = null, $vars = array())
  {
     return $this->inputArgs('repairs', array_merge($vars, ['limit' => $limit, 'page' => $page, 'filter' => $filter, 'sort' => $sort]));
  }

  /**
   * Return employee related to current viewer - can be a System employee if token is not related to authenticated employee
   * @return Viewer
   */
  public function viewer($vars = array())
  {
     return $this->inputArgs('viewer', array_merge($vars, []));
  }

  protected function schemaNamespace()
  {
    return 'SchemaService';
  }
}