<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeMigrationJobDetail
 *
 * @method string getMigrationModeDataSynchronization()
 * @method string getClientToken()
 * @method string getMigrationModeDataInitialization()
 * @method string getPageSize()
 * @method string getMigrationJobId()
 * @method string getPageNum()
 * @method string getOwnerId()
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $migrationJobId
     *
     * @return $this
     */
    public function withMigrationJobId($migrationJobId)
    {
        $this->data['MigrationJobId'] = $migrationJobId;
        $this->options['query']['MigrationJobId'] = $migrationJobId;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

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
