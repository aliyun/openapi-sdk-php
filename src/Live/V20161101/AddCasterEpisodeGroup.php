<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddCasterEpisodeGroup
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
class AddCasterEpisodeGroup extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
