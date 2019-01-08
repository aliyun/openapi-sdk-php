<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetWaitingRoomConfig
 *
 * @method string getWaitUrl()
 * @method string getWaitUri()
 * @method string getMaxTimeWait()
 * @method string getDomainName()
 * @method string getAllowPct()
 * @method string getGapTime()
 * @method string getOwnerId()
 */
class SetWaitingRoomConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'SetWaitingRoomConfig';

    /**
     * @param string $waitUrl
     *
     * @return $this
     */
    public function withWaitUrl($waitUrl)
    {
        $this->data['WaitUrl'] = $waitUrl;
        $this->options['query']['WaitUrl'] = $waitUrl;

        return $this;
    }

    /**
     * @param string $waitUri
     *
     * @return $this
     */
    public function withWaitUri($waitUri)
    {
        $this->data['WaitUri'] = $waitUri;
        $this->options['query']['WaitUri'] = $waitUri;

        return $this;
    }

    /**
     * @param string $maxTimeWait
     *
     * @return $this
     */
    public function withMaxTimeWait($maxTimeWait)
    {
        $this->data['MaxTimeWait'] = $maxTimeWait;
        $this->options['query']['MaxTimeWait'] = $maxTimeWait;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $allowPct
     *
     * @return $this
     */
    public function withAllowPct($allowPct)
    {
        $this->data['AllowPct'] = $allowPct;
        $this->options['query']['AllowPct'] = $allowPct;

        return $this;
    }

    /**
     * @param string $gapTime
     *
     * @return $this
     */
    public function withGapTime($gapTime)
    {
        $this->data['GapTime'] = $gapTime;
        $this->options['query']['GapTime'] = $gapTime;

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
}
