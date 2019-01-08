<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendRoomUserNotification
 *
 * @method string getData()
 * @method string getToAppUid()
 * @method string getAppUid()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getRoomId()
 * @method string getAppId()
 */
class SendRoomUserNotification extends RpcRequest
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
    public $action = 'SendRoomUserNotification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @param string $toAppUid
     *
     * @return $this
     */
    public function withToAppUid($toAppUid)
    {
        $this->data['ToAppUid'] = $toAppUid;
        $this->options['query']['ToAppUid'] = $toAppUid;

        return $this;
    }

    /**
     * @param string $appUid
     *
     * @return $this
     */
    public function withAppUid($appUid)
    {
        $this->data['AppUid'] = $appUid;
        $this->options['query']['AppUid'] = $appUid;

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
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $roomId
     *
     * @return $this
     */
    public function withRoomId($roomId)
    {
        $this->data['RoomId'] = $roomId;
        $this->options['query']['RoomId'] = $roomId;

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
}
