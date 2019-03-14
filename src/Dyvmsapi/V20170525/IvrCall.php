<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api IvrCall
 *
 * @method string getByeCode()
 * @method array getMenuKeyMap()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getStartTtsParams()
 * @method string getPlayTimes()
 * @method string getOwnerId()
 * @method string getTimeout()
 * @method string getStartCode()
 * @method string getCalledNumber()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 * @method string getByeTtsParams()
 */
class IvrCall extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    /**
     * @param string $byeCode
     *
     * @return $this
     */
    public function withByeCode($byeCode)
    {
        $this->data['ByeCode'] = $byeCode;
        $this->options['query']['ByeCode'] = $byeCode;

        return $this;
    }

    /**
     * @param array $menuKeyMap
     *
     * @return $this
     */
    public function withMenuKeyMap(array $menuKeyMap)
    {
        $this->data['MenuKeyMap'] = $menuKeyMap;
        foreach ($menuKeyMap as $i => $iValue) {
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Code'] = $menuKeyMap[$i]['Code'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.TtsParams'] = $menuKeyMap[$i]['TtsParams'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Key'] = $menuKeyMap[$i]['Key'];
        }

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
     * @param string $startTtsParams
     *
     * @return $this
     */
    public function withStartTtsParams($startTtsParams)
    {
        $this->data['StartTtsParams'] = $startTtsParams;
        $this->options['query']['StartTtsParams'] = $startTtsParams;

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
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout'] = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }

    /**
     * @param string $startCode
     *
     * @return $this
     */
    public function withStartCode($startCode)
    {
        $this->data['StartCode'] = $startCode;
        $this->options['query']['StartCode'] = $startCode;

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
     * @param string $byeTtsParams
     *
     * @return $this
     */
    public function withByeTtsParams($byeTtsParams)
    {
        $this->data['ByeTtsParams'] = $byeTtsParams;
        $this->options['query']['ByeTtsParams'] = $byeTtsParams;

        return $this;
    }
}
