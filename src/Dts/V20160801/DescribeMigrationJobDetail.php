<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMigrationJobDetail
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
class DescribeMigrationJobDetail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeMigrationJobDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMigrationModeDataSynchronization() instead.
     *
     * @param string $migrationModeDataSynchronization
     *
     * @return $this
     */
    public function setMigrationModeDataSynchronization($migrationModeDataSynchronization)
    {
        return $this->withMigrationModeDataSynchronization($migrationModeDataSynchronization);
    }

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withMigrationModeDataInitialization() instead.
     *
     * @param string $migrationModeDataInitialization
     *
     * @return $this
     */
    public function setMigrationModeDataInitialization($migrationModeDataInitialization)
    {
        return $this->withMigrationModeDataInitialization($migrationModeDataInitialization);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withMigrationJobId() instead.
     *
     * @param string $migrationJobId
     *
     * @return $this
     */
    public function setMigrationJobId($migrationJobId)
    {
        return $this->withMigrationJobId($migrationJobId);
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
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withMigrationModeStructureInitialization() instead.
     *
     * @param string $migrationModeStructureInitialization
     *
     * @return $this
     */
    public function setMigrationModeStructureInitialization($migrationModeStructureInitialization)
    {
        return $this->withMigrationModeStructureInitialization($migrationModeStructureInitialization);
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
