<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRoom
 *
 * @method string getTemplateIds()
 * @method string getAnchorId()
 * @method string getUseAppTranscode()
 * @method string getOwnerId()
 * @method string getRoomId()
 * @method string getAppId()
 */
class CreateRoom extends RpcRequest
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
    public $action = 'CreateRoom';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateIds() instead.
     *
     * @param string $templateIds
     *
     * @return $this
     */
    public function setTemplateIds($templateIds)
    {
        return $this->withTemplateIds($templateIds);
    }

    /**
     * @param string $templateIds
     *
     * @return $this
     */
    public function withTemplateIds($templateIds)
    {
        $this->data['TemplateIds'] = $templateIds;
        $this->options['query']['TemplateIds'] = $templateIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAnchorId() instead.
     *
     * @param string $anchorId
     *
     * @return $this
     */
    public function setAnchorId($anchorId)
    {
        return $this->withAnchorId($anchorId);
    }

    /**
     * @param string $anchorId
     *
     * @return $this
     */
    public function withAnchorId($anchorId)
    {
        $this->data['AnchorId'] = $anchorId;
        $this->options['query']['AnchorId'] = $anchorId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUseAppTranscode() instead.
     *
     * @param string $useAppTranscode
     *
     * @return $this
     */
    public function setUseAppTranscode($useAppTranscode)
    {
        return $this->withUseAppTranscode($useAppTranscode);
    }

    /**
     * @param string $useAppTranscode
     *
     * @return $this
     */
    public function withUseAppTranscode($useAppTranscode)
    {
        $this->data['UseAppTranscode'] = $useAppTranscode;
        $this->options['query']['UseAppTranscode'] = $useAppTranscode;

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
