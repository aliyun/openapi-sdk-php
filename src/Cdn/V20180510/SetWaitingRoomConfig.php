<?php

namespace AlibabaCloud\Cdn\V20180510;

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
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetWaitingRoomConfig';

    /**
     * @deprecated deprecated since version 2.0, Use withWaitUrl() instead.
     *
     * @param string $waitUrl
     *
     * @return $this
     */
    public function setWaitUrl($waitUrl)
    {
        return $this->withWaitUrl($waitUrl);
    }

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
     * @deprecated deprecated since version 2.0, Use withWaitUri() instead.
     *
     * @param string $waitUri
     *
     * @return $this
     */
    public function setWaitUri($waitUri)
    {
        return $this->withWaitUri($waitUri);
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
     * @deprecated deprecated since version 2.0, Use withMaxTimeWait() instead.
     *
     * @param string $maxTimeWait
     *
     * @return $this
     */
    public function setMaxTimeWait($maxTimeWait)
    {
        return $this->withMaxTimeWait($maxTimeWait);
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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withAllowPct() instead.
     *
     * @param string $allowPct
     *
     * @return $this
     */
    public function setAllowPct($allowPct)
    {
        return $this->withAllowPct($allowPct);
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
     * @deprecated deprecated since version 2.0, Use withGapTime() instead.
     *
     * @param string $gapTime
     *
     * @return $this
     */
    public function setGapTime($gapTime)
    {
        return $this->withGapTime($gapTime);
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
}
