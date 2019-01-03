<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartMigrationJob
 *
 * @method string getMigrationJobId()
 * @method string getOwnerId()
 */
class StartMigrationJob extends RpcRequest
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
    public $action = 'StartMigrationJob';

    /**
     * @var string
     */
    public $method = 'POST';

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
}
