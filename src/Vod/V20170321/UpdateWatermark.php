<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateWatermark
 *
 * @method string getWatermarkId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getName()
 * @method string getOwnerId()
 * @method string getWatermarkConfig()
 */
class UpdateWatermark extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'UpdateWatermark';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $watermarkId
     *
     * @return $this
     */
    public function withWatermarkId($watermarkId)
    {
        $this->data['WatermarkId'] = $watermarkId;
        $this->options['query']['WatermarkId'] = $watermarkId;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @param string $watermarkConfig
     *
     * @return $this
     */
    public function withWatermarkConfig($watermarkConfig)
    {
        $this->data['WatermarkConfig'] = $watermarkConfig;
        $this->options['query']['WatermarkConfig'] = $watermarkConfig;

        return $this;
    }
}
