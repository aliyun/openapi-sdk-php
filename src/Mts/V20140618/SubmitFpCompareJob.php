<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api SubmitFpCompareJob
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getFpShotConfig()
 * @method string getQueryMedia()
 * @method string getFpDBId()
 * @method string getResourceOwnerAccount()
 * @method string getMasterMedia()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPipelineId()
 */
class SubmitFpCompareJob extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

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
     * @param string $fpShotConfig
     *
     * @return $this
     */
    public function withFpShotConfig($fpShotConfig)
    {
        $this->data['FpShotConfig'] = $fpShotConfig;
        $this->options['query']['FpShotConfig'] = $fpShotConfig;

        return $this;
    }

    /**
     * @param string $queryMedia
     *
     * @return $this
     */
    public function withQueryMedia($queryMedia)
    {
        $this->data['QueryMedia'] = $queryMedia;
        $this->options['query']['QueryMedia'] = $queryMedia;

        return $this;
    }

    /**
     * @param string $fpDBId
     *
     * @return $this
     */
    public function withFpDBId($fpDBId)
    {
        $this->data['FpDBId'] = $fpDBId;
        $this->options['query']['FpDBId'] = $fpDBId;

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
     * @param string $masterMedia
     *
     * @return $this
     */
    public function withMasterMedia($masterMedia)
    {
        $this->data['MasterMedia'] = $masterMedia;
        $this->options['query']['MasterMedia'] = $masterMedia;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @param string $pipelineId
     *
     * @return $this
     */
    public function withPipelineId($pipelineId)
    {
        $this->data['PipelineId'] = $pipelineId;
        $this->options['query']['PipelineId'] = $pipelineId;

        return $this;
    }
}
