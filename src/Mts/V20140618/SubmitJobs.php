<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitJobs
 *
 * @method string getOutputs()
 * @method string getInput()
 * @method string getOutputBucket()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOutputLocation()
 * @method string getOwnerId()
 * @method string getPipelineId()
 */
class SubmitJobs extends RpcRequest
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
    public $action = 'SubmitJobs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @deprecated deprecated since version 2.0, Use withOutputs() instead.
     *
     * @param string $outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        return $this->withOutputs($outputs);
    }

    /**
     * @param string $outputs
     *
     * @return $this
     */
    public function withOutputs($outputs)
    {
        $this->data['Outputs'] = $outputs;
        $this->options['query']['Outputs'] = $outputs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInput() instead.
     *
     * @param string $input
     *
     * @return $this
     */
    public function setInput($input)
    {
        return $this->withInput($input);
    }

    /**
     * @param string $input
     *
     * @return $this
     */
    public function withInput($input)
    {
        $this->data['Input'] = $input;
        $this->options['query']['Input'] = $input;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOutputBucket() instead.
     *
     * @param string $outputBucket
     *
     * @return $this
     */
    public function setOutputBucket($outputBucket)
    {
        return $this->withOutputBucket($outputBucket);
    }

    /**
     * @param string $outputBucket
     *
     * @return $this
     */
    public function withOutputBucket($outputBucket)
    {
        $this->data['OutputBucket'] = $outputBucket;
        $this->options['query']['OutputBucket'] = $outputBucket;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOutputLocation() instead.
     *
     * @param string $outputLocation
     *
     * @return $this
     */
    public function setOutputLocation($outputLocation)
    {
        return $this->withOutputLocation($outputLocation);
    }

    /**
     * @param string $outputLocation
     *
     * @return $this
     */
    public function withOutputLocation($outputLocation)
    {
        $this->data['OutputLocation'] = $outputLocation;
        $this->options['query']['OutputLocation'] = $outputLocation;

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
     * @deprecated deprecated since version 2.0, Use withPipelineId() instead.
     *
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        return $this->withPipelineId($pipelineId);
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
