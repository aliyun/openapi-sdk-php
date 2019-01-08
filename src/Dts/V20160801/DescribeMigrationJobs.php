<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMigrationJobs
 *
 * @method string getPageSize()
 * @method string getMigrationJobName()
 * @method string getPageNum()
 * @method string getOwnerId()
 */
class DescribeMigrationJobs extends RpcRequest
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
    public $action = 'DescribeMigrationJobs';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $migrationJobName
     *
     * @return $this
     */
    public function withMigrationJobName($migrationJobName)
    {
        $this->data['MigrationJobName'] = $migrationJobName;
        $this->options['query']['MigrationJobName'] = $migrationJobName;

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
}
