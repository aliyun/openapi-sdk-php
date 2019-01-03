<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SmartCall
 *
 * @method string getResourceOwnerId()
 * @method string getVoiceCodeParam()
 * @method string getEarlyMediaAsr()
 * @method string getActionCodeBreak()
 * @method string getResourceOwnerAccount()
 * @method string getRecordFlag()
 * @method string getOwnerId()
 * @method string getSpeed()
 * @method string getVolume()
 * @method string getSessionTimeout()
 * @method string getDynamicId()
 * @method string getCalledNumber()
 * @method string getVoiceCode()
 * @method string getMuteTime()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 * @method string getAsrModelId()
 * @method string getPauseTime()
 */
class SmartCall extends RpcRequest
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
    public $action = 'SmartCall';

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
     * @deprecated deprecated since version 2.0, Use withVoiceCodeParam() instead.
     *
     * @param string $voiceCodeParam
     *
     * @return $this
     */
    public function setVoiceCodeParam($voiceCodeParam)
    {
        return $this->withVoiceCodeParam($voiceCodeParam);
    }

    /**
     * @param string $voiceCodeParam
     *
     * @return $this
     */
    public function withVoiceCodeParam($voiceCodeParam)
    {
        $this->data['VoiceCodeParam'] = $voiceCodeParam;
        $this->options['query']['VoiceCodeParam'] = $voiceCodeParam;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEarlyMediaAsr() instead.
     *
     * @param string $earlyMediaAsr
     *
     * @return $this
     */
    public function setEarlyMediaAsr($earlyMediaAsr)
    {
        return $this->withEarlyMediaAsr($earlyMediaAsr);
    }

    /**
     * @param string $earlyMediaAsr
     *
     * @return $this
     */
    public function withEarlyMediaAsr($earlyMediaAsr)
    {
        $this->data['EarlyMediaAsr'] = $earlyMediaAsr;
        $this->options['query']['EarlyMediaAsr'] = $earlyMediaAsr;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withActionCodeBreak() instead.
     *
     * @param string $actionCodeBreak
     *
     * @return $this
     */
    public function setActionCodeBreak($actionCodeBreak)
    {
        return $this->withActionCodeBreak($actionCodeBreak);
    }

    /**
     * @param string $actionCodeBreak
     *
     * @return $this
     */
    public function withActionCodeBreak($actionCodeBreak)
    {
        $this->data['ActionCodeBreak'] = $actionCodeBreak;
        $this->options['query']['ActionCodeBreak'] = $actionCodeBreak;

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
     * @deprecated deprecated since version 2.0, Use withSpeed() instead.
     *
     * @param string $speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        return $this->withSpeed($speed);
    }

    /**
     * @param string $speed
     *
     * @return $this
     */
    public function withSpeed($speed)
    {
        $this->data['Speed'] = $speed;
        $this->options['query']['Speed'] = $speed;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolume() instead.
     *
     * @param string $volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        return $this->withVolume($volume);
    }

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function withVolume($volume)
    {
        $this->data['Volume'] = $volume;
        $this->options['query']['Volume'] = $volume;

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
     * @deprecated deprecated since version 2.0, Use withDynamicId() instead.
     *
     * @param string $dynamicId
     *
     * @return $this
     */
    public function setDynamicId($dynamicId)
    {
        return $this->withDynamicId($dynamicId);
    }

    /**
     * @param string $dynamicId
     *
     * @return $this
     */
    public function withDynamicId($dynamicId)
    {
        $this->data['DynamicId'] = $dynamicId;
        $this->options['query']['DynamicId'] = $dynamicId;

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
     * @deprecated deprecated since version 2.0, Use withVoiceCode() instead.
     *
     * @param string $voiceCode
     *
     * @return $this
     */
    public function setVoiceCode($voiceCode)
    {
        return $this->withVoiceCode($voiceCode);
    }

    /**
     * @param string $voiceCode
     *
     * @return $this
     */
    public function withVoiceCode($voiceCode)
    {
        $this->data['VoiceCode'] = $voiceCode;
        $this->options['query']['VoiceCode'] = $voiceCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMuteTime() instead.
     *
     * @param string $muteTime
     *
     * @return $this
     */
    public function setMuteTime($muteTime)
    {
        return $this->withMuteTime($muteTime);
    }

    /**
     * @param string $muteTime
     *
     * @return $this
     */
    public function withMuteTime($muteTime)
    {
        $this->data['MuteTime'] = $muteTime;
        $this->options['query']['MuteTime'] = $muteTime;

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
     * @deprecated deprecated since version 2.0, Use withPauseTime() instead.
     *
     * @param string $pauseTime
     *
     * @return $this
     */
    public function setPauseTime($pauseTime)
    {
        return $this->withPauseTime($pauseTime);
    }

    /**
     * @param string $pauseTime
     *
     * @return $this
     */
    public function withPauseTime($pauseTime)
    {
        $this->data['PauseTime'] = $pauseTime;
        $this->options['query']['PauseTime'] = $pauseTime;

        return $this;
    }
}
