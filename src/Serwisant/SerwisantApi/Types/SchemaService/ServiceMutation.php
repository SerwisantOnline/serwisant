<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class ServiceMutation extends Types\RootType
{
  /**
   * Create a new customer account
   * @param CustomerInput $customer
   * @param CustomerAgreementInput[] $agreements
   * @param AddressInput[] $addresses
   * @param FileInput[] $files
   * @return CustomerCreationResult
   */
  public function createCustomer(CustomerInput $customer, array $agreements, array $addresses, array $files, $vars = array())
  {
     return $this->inputArgs('createCustomer', array_merge($vars, ['customer' => $customer, 'agreements' => $agreements, 'addresses' => $addresses, 'files' => $files]));
  }

  /**
   * @param string $subject
   * @param FileSubjectType $subjectType
   * @param FileInput $file
   * @return FileCreationResult
   */
  public function createFile(string $subject, FileSubjectType $subjectType, FileInput $file, $vars = array())
  {
     return $this->inputArgs('createFile', array_merge($vars, ['subject' => $subject, 'subjectType' => $subjectType, 'file' => $file]));
  }

  /**
   * Create a repair order with some of dependencies
   * @param string $customer
   * @param RepairInput $repair
   * @param RepairItemInput[] $additionalItems
   * @param FileInput[] $files
   * @return RepairCreationResult
   */
  public function createRepair(string $customer, RepairInput $repair, array $additionalItems, array $files, $vars = array())
  {
     return $this->inputArgs('createRepair', array_merge($vars, ['customer' => $customer, 'repair' => $repair, 'additionalItems' => $additionalItems, 'files' => $files]));
  }

  /**
   * Update repair status. Before update check valid statuses in Repair.status.nextPossibleStatus
   * @param string $repair
   * @param RepairState $status
   * @return RepairStatusUpdateResult
   */
  public function updateRepairStatus(string $repair, RepairState $status, $vars = array())
  {
     return $this->inputArgs('updateRepairStatus', array_merge($vars, ['repair' => $repair, 'status' => $status]));
  }

  protected function schemaNamespace()
  {
    return 'SchemaService';
  }
}