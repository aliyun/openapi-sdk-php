<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCasterEpisodeGroup
 *
 * @method string getSideOutputUrl()
 * @method array getItem()
 * @method string getClientToken()
 * @method string getDomainName()
 * @method string getStartTime()
 * @method string getRepeatNum()
 * @method string getCallbackUrl()
 * @method string getOwnerId()
 */
class AddCasterEpisodeGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddCasterEpisodeGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withSideOutputUrl() instead.
     *
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function setSideOutputUrl($sideOutputUrl)
    {
        return $this->withSideOutputUrl($sideOutputUrl);
    }

    /**
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function withSideOutputUrl($sideOutputUrl)
    {
        $this->data['SideOutputUrl'] = $sideOutputUrl;
        $this->options['query']['SideOutputUrl'] = $sideOutputUrl;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getItem() instead.
     *
     * @return array
     */
    public function getItems()
    {
        return $this->getItem();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withItem() instead.
     *
     * @param array $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        return $this->withItem($items);
    }

    /**
     * @param array $item
     *
     * @return $this
     */
    public function withItem(array $item)
    {
        $this->data['Item'] = $item;
        foreach ($item as $i => $iValue) {
            $this->options['query']['Item.' . ($i + 1) . '.VodUrl'] = $item[$i]['VodUrl'];
            $this->options['query']['Item.' . ($i + 1) . '.ItemName'] = $item[$i]['ItemName'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRepeatNum() instead.
     *
     * @param string $repeatNum
     *
     * @return $this
     */
    public function setRepeatNum($repeatNum)
    {
        return $this->withRepeatNum($repeatNum);
    }

    /**
     * @param string $repeatNum
     *
     * @return $this
     */
    public function withRepeatNum($repeatNum)
    {
        $this->data['RepeatNum'] = $repeatNum;
        $this->options['query']['RepeatNum'] = $repeatNum;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallbackUrl() instead.
     *
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        return $this->withCallbackUrl($callbackUrl);
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function withCallbackUrl($callbackUrl)
    {
        $this->data['CallbackUrl'] = $callbackUrl;
        $this->options['query']['CallbackUrl'] = $callbackUrl;

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
