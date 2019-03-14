<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api SetBoardCallback
 *
 * @method string getAuthKey()
 * @method string getCallbackEnable()
 * @method string getCallbackEvents()
 * @method string getOwnerId()
 * @method string getCallbackUri()
 * @method string getAppId()
 * @method string getAuthSwitch()
 */
class SetBoardCallback extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function withAuthKey($authKey)
    {
        $this->data['AuthKey'] = $authKey;
        $this->options['query']['AuthKey'] = $authKey;

        return $this;
    }

    /**
     * @param string $callbackEnable
     *
     * @return $this
     */
    public function withCallbackEnable($callbackEnable)
    {
        $this->data['CallbackEnable'] = $callbackEnable;
        $this->options['query']['CallbackEnable'] = $callbackEnable;

        return $this;
    }

    /**
     * @param string $callbackEvents
     *
     * @return $this
     */
    public function withCallbackEvents($callbackEvents)
    {
        $this->data['CallbackEvents'] = $callbackEvents;
        $this->options['query']['CallbackEvents'] = $callbackEvents;

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
     * @param string $callbackUri
     *
     * @return $this
     */
    public function withCallbackUri($callbackUri)
    {
        $this->data['CallbackUri'] = $callbackUri;
        $this->options['query']['CallbackUri'] = $callbackUri;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $authSwitch
     *
     * @return $this
     */
    public function withAuthSwitch($authSwitch)
    {
        $this->data['AuthSwitch'] = $authSwitch;
        $this->options['query']['AuthSwitch'] = $authSwitch;

        return $this;
    }
}
