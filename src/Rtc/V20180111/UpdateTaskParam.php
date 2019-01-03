<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateTaskParam
 *
 * @method array getMixPanes()
 * @method string getTaskId()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class UpdateTaskParam extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'UpdateTaskParam';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @deprecated deprecated since version 2.0, Use getMixPanes() instead.
     *
     * @return array
     */
    public function getMixPaness()
    {
        return $this->getMixPanes();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixPanes() instead.
     *
     * @param array $mixPaness
     *
     * @return $this
     */
    public function setMixPaness(array $mixPaness)
    {
        return $this->withMixPanes($mixPaness);
    }

    /**
     * @param array $mixPanes
     *
     * @return $this
     */
    public function withMixPanes(array $mixPanes)
    {
        $this->data['MixPanes'] = $mixPanes;
        foreach ($mixPanes as $i => $iValue) {
            $this->options['query']['MixPanes.' . ($i + 1) . '.PaneId'] = $mixPanes[$i]['PaneId'];
            $this->options['query']['MixPanes.' . ($i + 1) . '.UserId'] = $mixPanes[$i]['UserId'];
            $this->options['query']['MixPanes.' . ($i + 1) . '.SourceType'] = $mixPanes[$i]['SourceType'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
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
     * @deprecated deprecated since version 2.0, Use withTemplateId() instead.
     *
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        return $this->withTemplateId($templateId);
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

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

    /**
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
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
