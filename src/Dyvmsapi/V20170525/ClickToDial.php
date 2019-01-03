<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ClickToDial
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
class ClickToDial extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dyvmsapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'ClickToDial';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withRecordFlag() instead.
     *
     * @param string $recordFlag
     *
     * @return $this
     */
    public function setRecordFlag($recordFlag)
    {
        return $this->withRecordFlag($recordFlag);
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
     * @deprecated deprecated since version 2.0, Use withCallerShowNumber() instead.
     *
     * @param string $callerShowNumber
     *
     * @return $this
     */
    public function setCallerShowNumber($callerShowNumber)
    {
        return $this->withCallerShowNumber($callerShowNumber);
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
     * @deprecated deprecated since version 2.0, Use withSessionTimeout() instead.
     *
     * @param string $sessionTimeout
     *
     * @return $this
     */
    public function setSessionTimeout($sessionTimeout)
    {
        return $this->withSessionTimeout($sessionTimeout);
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
     * @deprecated deprecated since version 2.0, Use withCalledNumber() instead.
     *
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        return $this->withCalledNumber($calledNumber);
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
     * @deprecated deprecated since version 2.0, Use withCalledShowNumber() instead.
     *
     * @param string $calledShowNumber
     *
     * @return $this
     */
    public function setCalledShowNumber($calledShowNumber)
    {
        return $this->withCalledShowNumber($calledShowNumber);
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
     * @deprecated deprecated since version 2.0, Use withOutId() instead.
     *
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        return $this->withOutId($outId);
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
     * @deprecated deprecated since version 2.0, Use withAsrFlag() instead.
     *
     * @param string $asrFlag
     *
     * @return $this
     */
    public function setAsrFlag($asrFlag)
    {
        return $this->withAsrFlag($asrFlag);
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
     * @deprecated deprecated since version 2.0, Use withAsrModelId() instead.
     *
     * @param string $asrModelId
     *
     * @return $this
     */
    public function setAsrModelId($asrModelId)
    {
        return $this->withAsrModelId($asrModelId);
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
     * @deprecated deprecated since version 2.0, Use withCallerNumber() instead.
     *
     * @param string $callerNumber
     *
     * @return $this
     */
    public function setCallerNumber($callerNumber)
    {
        return $this->withCallerNumber($callerNumber);
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
