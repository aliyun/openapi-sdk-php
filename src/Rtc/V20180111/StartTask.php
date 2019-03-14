<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * Api StartTask
 *
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method string getStreamURL()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getMediaEncode()
 * @method string getChannelId()
 */
class StartTask extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';

    /**
     * @param array $userPanes
     *
     * @return $this
     */
    public function withUserPanes(array $userPanes)
    {
        $this->data['UserPanes'] = $userPanes;
        foreach ($userPanes as $i => $iValue) {
            $this->options['query']['UserPanes.' . ($i + 1) . '.PaneId'] = $userPanes[$i]['PaneId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.UserId'] = $userPanes[$i]['UserId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.SourceType'] = $userPanes[$i]['SourceType'];
        }

        return $this;
    }

    /**
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function withBackgroundColor($backgroundColor)
    {
        $this->data['BackgroundColor'] = $backgroundColor;
        $this->options['query']['BackgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * @param array $layoutIds
     *
     * @return $this
     */
    public function withLayoutIds(array $layoutIds)
    {
        $this->data['LayoutIds'] = $layoutIds;
        foreach ($layoutIds as $i => $iValue) {
            $this->options['query']['LayoutIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }

    /**
     * @param string $streamURL
     *
     * @return $this
     */
    public function withStreamURL($streamURL)
    {
        $this->data['StreamURL'] = $streamURL;
        $this->options['query']['StreamURL'] = $streamURL;

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
     * @param string $mediaEncode
     *
     * @return $this
     */
    public function withMediaEncode($mediaEncode)
    {
        $this->data['MediaEncode'] = $mediaEncode;
        $this->options['query']['MediaEncode'] = $mediaEncode;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
