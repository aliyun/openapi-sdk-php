<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SingleCallByTts
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTtsCode()
 * @method string getPlayTimes()
 * @method string getTtsParam()
 * @method string getOwnerId()
 * @method string getSpeed()
 * @method string getVolume()
 * @method string getCalledNumber()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 */
class SingleCallByTts extends RpcRequest
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
    public $action = 'SingleCallByTts';

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
     * @deprecated deprecated since version 2.0, Use withTtsCode() instead.
     *
     * @param string $ttsCode
     *
     * @return $this
     */
    public function setTtsCode($ttsCode)
    {
        return $this->withTtsCode($ttsCode);
    }

    /**
     * @param string $ttsCode
     *
     * @return $this
     */
    public function withTtsCode($ttsCode)
    {
        $this->data['TtsCode'] = $ttsCode;
        $this->options['query']['TtsCode'] = $ttsCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPlayTimes() instead.
     *
     * @param string $playTimes
     *
     * @return $this
     */
    public function setPlayTimes($playTimes)
    {
        return $this->withPlayTimes($playTimes);
    }

    /**
     * @param string $playTimes
     *
     * @return $this
     */
    public function withPlayTimes($playTimes)
    {
        $this->data['PlayTimes'] = $playTimes;
        $this->options['query']['PlayTimes'] = $playTimes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTtsParam() instead.
     *
     * @param string $ttsParam
     *
     * @return $this
     */
    public function setTtsParam($ttsParam)
    {
        return $this->withTtsParam($ttsParam);
    }

    /**
     * @param string $ttsParam
     *
     * @return $this
     */
    public function withTtsParam($ttsParam)
    {
        $this->data['TtsParam'] = $ttsParam;
        $this->options['query']['TtsParam'] = $ttsParam;

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
}
