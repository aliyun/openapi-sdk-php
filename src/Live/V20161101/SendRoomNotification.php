<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendRoomNotification
 *
 * @method string getData()
 * @method string getAppUid()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getRoomId()
 * @method string getAppId()
 */
class SendRoomNotification extends RpcRequest
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
    public $action = 'SendRoomNotification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withData() instead.
     *
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        return $this->withData($data);
    }

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
     * @deprecated deprecated since version 2.0, Use withAppUid() instead.
     *
     * @param string $appUid
     *
     * @return $this
     */
    public function setAppUid($appUid)
    {
        return $this->withAppUid($appUid);
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
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
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
     * @deprecated deprecated since version 2.0, Use withRoomId() instead.
     *
     * @param string $roomId
     *
     * @return $this
     */
    public function setRoomId($roomId)
    {
        return $this->withRoomId($roomId);
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
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
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
