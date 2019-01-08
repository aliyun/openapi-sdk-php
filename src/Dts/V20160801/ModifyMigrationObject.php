<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyMigrationObject
 *
 * @method string getMigrationObject()
 * @method string getClientToken()
 * @method string getMigrationJobId()
 * @method string getOwnerId()
 */
class ModifyMigrationObject extends RpcRequest
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
    public $action = 'ModifyMigrationObject';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $migrationObject
     *
     * @return $this
     */
    public function withMigrationObject($migrationObject)
    {
        $this->data['MigrationObject'] = $migrationObject;
        $this->options['query']['MigrationObject'] = $migrationObject;

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
