<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api SubmitComplexJob
 *
 * @method string getResourceOwnerId()
 * @method string getTranscodeOutput()
 * @method string getResourceOwnerAccount()
 * @method string getInputs()
 * @method string getOwnerAccount()
 * @method string getOutputLocation()
 * @method string getOwnerId()
 * @method string getPipelineId()
 * @method string getOutputBucket()
 * @method string getUserData()
 * @method string getComplexConfigs()
 */
class SubmitComplexJob extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
     * @param string $transcodeOutput
     *
     * @return $this
     */
    public function withTranscodeOutput($transcodeOutput)
    {
        $this->data['TranscodeOutput'] = $transcodeOutput;
        $this->options['query']['TranscodeOutput'] = $transcodeOutput;

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
     * @param string $inputs
     *
     * @return $this
     */
    public function withInputs($inputs)
    {
        $this->data['Inputs'] = $inputs;
        $this->options['query']['Inputs'] = $inputs;

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
     * @param string $complexConfigs
     *
     * @return $this
     */
    public function withComplexConfigs($complexConfigs)
    {
        $this->data['ComplexConfigs'] = $complexConfigs;
        $this->options['query']['ComplexConfigs'] = $complexConfigs;

        return $this;
    }
}
