<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReportFacerecogJobResult
 *
 * @method string getJobId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getFacerecog()
 * @method string getOwnerAccount()
 * @method string getDetails()
 * @method string getOwnerId()
 */
class ReportFacerecogJobResult extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'ReportFacerecogJobResult';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function withJobId($jobId)
    {
        $this->data['JobId'] = $jobId;
        $this->options['query']['JobId'] = $jobId;

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
     * @param string $facerecog
     *
     * @return $this
     */
    public function withFacerecog($facerecog)
    {
        $this->data['Facerecog'] = $facerecog;
        $this->options['query']['Facerecog'] = $facerecog;

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
     * @param string $details
     *
     * @return $this
     */
    public function withDetails($details)
    {
        $this->data['Details'] = $details;
        $this->options['query']['Details'] = $details;

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
