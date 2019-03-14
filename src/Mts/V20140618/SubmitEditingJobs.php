<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api SubmitEditingJobs
 *
 * @method string getOutputBucket()
 * @method string getResourceOwnerId()
 * @method string getEditingJobOutputs()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOutputLocation()
 * @method string getOwnerId()
 * @method string getEditingInputs()
 * @method string getPipelineId()
 */
class SubmitEditingJobs extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
     * @param string $editingJobOutputs
     *
     * @return $this
     */
    public function withEditingJobOutputs($editingJobOutputs)
    {
        $this->data['EditingJobOutputs'] = $editingJobOutputs;
        $this->options['query']['EditingJobOutputs'] = $editingJobOutputs;

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
     * @param string $editingInputs
     *
     * @return $this
     */
    public function withEditingInputs($editingInputs)
    {
        $this->data['EditingInputs'] = $editingInputs;
        $this->options['query']['EditingInputs'] = $editingInputs;

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
