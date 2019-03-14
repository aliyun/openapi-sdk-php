<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api AddWatermark
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getName()
 * @method string getFileUrl()
 * @method string getOwnerId()
 * @method string getType()
 * @method string getWatermarkConfig()
 */
class AddWatermark extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
     * @param string $fileUrl
     *
     * @return $this
     */
    public function withFileUrl($fileUrl)
    {
        $this->data['FileUrl'] = $fileUrl;
        $this->options['query']['FileUrl'] = $fileUrl;

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
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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
