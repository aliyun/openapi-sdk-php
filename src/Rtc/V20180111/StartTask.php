<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartTask
 *
 * @method array getMixPanes()
 * @method string getIdempotentId()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class StartTask extends RpcRequest
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
    public $action = 'StartTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

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
     * @param string $idempotentId
     *
     * @return $this
     */
    public function withIdempotentId($idempotentId)
    {
        $this->data['IdempotentId'] = $idempotentId;
        $this->options['query']['IdempotentId'] = $idempotentId;

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
