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
}
