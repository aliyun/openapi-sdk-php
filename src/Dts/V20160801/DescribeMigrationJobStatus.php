<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMigrationJobStatus
 *
 * @method string getClientToken()
 * @method string getMigrationJobId()
 * @method string getOwnerId()
 */
class DescribeMigrationJobStatus extends RpcRequest
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
    public $action = 'DescribeMigrationJobStatus';

    /**
     * @var string
     */
    public $method = 'POST';

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
