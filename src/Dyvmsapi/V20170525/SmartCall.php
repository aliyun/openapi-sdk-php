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
