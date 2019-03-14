<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api ClickToDial
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getRecordFlag()
 * @method string getOwnerId()
 * @method string getCallerShowNumber()
 * @method string getSessionTimeout()
 * @method string getCalledNumber()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 * @method string getAsrFlag()
 * @method string getAsrModelId()
 * @method string getCallerNumber()
 */
class ClickToDial extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

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
     * @param string $recordFlag
     *
     * @return $this
     */
    public function withRecordFlag($recordFlag)
    {
        $this->data['RecordFlag'] = $recordFlag;
        $this->options['query']['RecordFlag'] = $recordFlag;

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
     * @param string $callerShowNumber
     *
     * @return $this
     */
    public function withCallerShowNumber($callerShowNumber)
    {
        $this->data['CallerShowNumber'] = $callerShowNumber;
        $this->options['query']['CallerShowNumber'] = $callerShowNumber;

        return $this;
    }

    /**
     * @param string $sessionTimeout
     *
     * @return $this
     */
    public function withSessionTimeout($sessionTimeout)
    {
        $this->data['SessionTimeout'] = $sessionTimeout;
        $this->options['query']['SessionTimeout'] = $sessionTimeout;

        return $this;
    }

    /**
     * @param string $calledNumber
     *
     * @return $this
     */
    public function withCalledNumber($calledNumber)
    {
        $this->data['CalledNumber'] = $calledNumber;
        $this->options['query']['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @param string $calledShowNumber
     *
     * @return $this
     */
    public function withCalledShowNumber($calledShowNumber)
    {
        $this->data['CalledShowNumber'] = $calledShowNumber;
        $this->options['query']['CalledShowNumber'] = $calledShowNumber;

        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function withOutId($outId)
    {
        $this->data['OutId'] = $outId;
        $this->options['query']['OutId'] = $outId;

        return $this;
    }

    /**
     * @param string $asrFlag
     *
     * @return $this
     */
    public function withAsrFlag($asrFlag)
    {
        $this->data['AsrFlag'] = $asrFlag;
        $this->options['query']['AsrFlag'] = $asrFlag;

        return $this;
    }

    /**
     * @param string $asrModelId
     *
     * @return $this
     */
    public function withAsrModelId($asrModelId)
    {
        $this->data['AsrModelId'] = $asrModelId;
        $this->options['query']['AsrModelId'] = $asrModelId;

        return $this;
    }

    /**
     * @param string $callerNumber
     *
     * @return $this
     */
    public function withCallerNumber($callerNumber)
    {
        $this->data['CallerNumber'] = $callerNumber;
        $this->options['query']['CallerNumber'] = $callerNumber;

        return $this;
    }
}
