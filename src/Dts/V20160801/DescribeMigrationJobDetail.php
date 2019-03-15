<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getMigrationModeDataSynchronization()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationModeDataInitialization()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMigrationModeStructureInitialization()
 */
class DescribeMigrationJobDetail extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $migrationModeDataSynchronization
     *
     * @return $this
     */
    public function withMigrationModeDataSynchronization($migrationModeDataSynchronization)
    {
        $this->data['MigrationModeDataSynchronization'] = $migrationModeDataSynchronization;
        $this->options['query']['MigrationMode.DataSynchronization'] = $migrationModeDataSynchronization;

        return $this;
    }

    /**
     * @param string $migrationModeDataInitialization
     *
     * @return $this
     */
    public function withMigrationModeDataInitialization($migrationModeDataInitialization)
    {
        $this->data['MigrationModeDataInitialization'] = $migrationModeDataInitialization;
        $this->options['query']['MigrationMode.DataInitialization'] = $migrationModeDataInitialization;

        return $this;
    }

    /**
     * @param string $migrationModeStructureInitialization
     *
     * @return $this
     */
    public function withMigrationModeStructureInitialization($migrationModeStructureInitialization)
    {
        $this->data['MigrationModeStructureInitialization'] = $migrationModeStructureInitialization;
        $this->options['query']['MigrationMode.StructureInitialization'] = $migrationModeStructureInitialization;

        return $this;
    }
}
