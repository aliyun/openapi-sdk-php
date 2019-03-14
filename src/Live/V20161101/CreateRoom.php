<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api CreateRoom
 *
 * @method string getTemplateIds()
 * @method string getAnchorId()
 * @method string getUseAppTranscode()
 * @method string getOwnerId()
 * @method string getRoomId()
 * @method string getAppId()
 */
class CreateRoom extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
