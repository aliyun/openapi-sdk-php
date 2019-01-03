<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of IvrCall
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
class IvrCall extends RpcRequest
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
    public $action = 'IvrCall';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withByeCode() instead.
     *
     * @param string $byeCode
     *
     * @return $this
     */
    public function setByeCode($byeCode)
    {
        return $this->withByeCode($byeCode);
    }

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
     * @deprecated deprecated since version 2.0, Use getMenuKeyMap() instead.
     *
     * @return array
     */
    public function getMenuKeyMaps()
    {
        return $this->getMenuKeyMap();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMenuKeyMap() instead.
     *
     * @param array $menuKeyMaps
     *
     * @return $this
     */
    public function setMenuKeyMaps(array $menuKeyMaps)
    {
        return $this->withMenuKeyMap($menuKeyMaps);
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
     * @deprecated deprecated since version 2.0, Use withStartTtsParams() instead.
     *
     * @param string $startTtsParams
     *
     * @return $this
     */
    public function setStartTtsParams($startTtsParams)
    {
        return $this->withStartTtsParams($startTtsParams);
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
     * @deprecated deprecated since version 2.0, Use withTimeout() instead.
     *
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        return $this->withTimeout($timeout);
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
     * @deprecated deprecated since version 2.0, Use withStartCode() instead.
     *
     * @param string $startCode
     *
     * @return $this
     */
    public function setStartCode($startCode)
    {
        return $this->withStartCode($startCode);
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
     * @deprecated deprecated since version 2.0, Use withByeTtsParams() instead.
     *
     * @param string $byeTtsParams
     *
     * @return $this
     */
    public function setByeTtsParams($byeTtsParams)
    {
        return $this->withByeTtsParams($byeTtsParams);
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
