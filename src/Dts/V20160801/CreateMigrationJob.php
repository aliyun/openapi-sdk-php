<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMigrationJob
 *
 * @method string getClientToken()
 * @method string getRegion()
 * @method string getMigrationJobClass()
 * @method string getOwnerId()
 */
class CreateMigrationJob extends RpcRequest
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
    public $action = 'CreateMigrationJob';

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
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @param string $migrationJobClass
     *
     * @return $this
     */
    public function withMigrationJobClass($migrationJobClass)
    {
        $this->data['MigrationJobClass'] = $migrationJobClass;
        $this->options['query']['MigrationJobClass'] = $migrationJobClass;

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
