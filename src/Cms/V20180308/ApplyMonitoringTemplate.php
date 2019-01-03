<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ApplyMonitoringTemplate
 *
 * @method string getEnableStartTime()
 * @method string getApplyMode()
 * @method string getWebhook()
 * @method string getTemplateIds()
 * @method string getEnableEndTime()
 * @method string getGroupId()
 * @method string getNotifyLevel()
 * @method string getSilenceTime()
 */
class ApplyMonitoringTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'ApplyMonitoringTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEnableStartTime() instead.
     *
     * @param string $enableStartTime
     *
     * @return $this
     */
    public function setEnableStartTime($enableStartTime)
    {
        return $this->withEnableStartTime($enableStartTime);
    }

    /**
     * @param string $enableStartTime
     *
     * @return $this
     */
    public function withEnableStartTime($enableStartTime)
    {
        $this->data['EnableStartTime'] = $enableStartTime;
        $this->options['query']['EnableStartTime'] = $enableStartTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withApplyMode() instead.
     *
     * @param string $applyMode
     *
     * @return $this
     */
    public function setApplyMode($applyMode)
    {
        return $this->withApplyMode($applyMode);
    }

    /**
     * @param string $applyMode
     *
     * @return $this
     */
    public function withApplyMode($applyMode)
    {
        $this->data['ApplyMode'] = $applyMode;
        $this->options['query']['ApplyMode'] = $applyMode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWebhook() instead.
     *
     * @param string $webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        return $this->withWebhook($webhook);
    }

    /**
     * @param string $webhook
     *
     * @return $this
     */
    public function withWebhook($webhook)
    {
        $this->data['Webhook'] = $webhook;
        $this->options['query']['Webhook'] = $webhook;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withEnableEndTime() instead.
     *
     * @param string $enableEndTime
     *
     * @return $this
     */
    public function setEnableEndTime($enableEndTime)
    {
        return $this->withEnableEndTime($enableEndTime);
    }

    /**
     * @param string $enableEndTime
     *
     * @return $this
     */
    public function withEnableEndTime($enableEndTime)
    {
        $this->data['EnableEndTime'] = $enableEndTime;
        $this->options['query']['EnableEndTime'] = $enableEndTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyLevel() instead.
     *
     * @param string $notifyLevel
     *
     * @return $this
     */
    public function setNotifyLevel($notifyLevel)
    {
        return $this->withNotifyLevel($notifyLevel);
    }

    /**
     * @param string $notifyLevel
     *
     * @return $this
     */
    public function withNotifyLevel($notifyLevel)
    {
        $this->data['NotifyLevel'] = $notifyLevel;
        $this->options['query']['NotifyLevel'] = $notifyLevel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSilenceTime() instead.
     *
     * @param string $silenceTime
     *
     * @return $this
     */
    public function setSilenceTime($silenceTime)
    {
        return $this->withSilenceTime($silenceTime);
    }

    /**
     * @param string $silenceTime
     *
     * @return $this
     */
    public function withSilenceTime($silenceTime)
    {
        $this->data['SilenceTime'] = $silenceTime;
        $this->options['query']['SilenceTime'] = $silenceTime;

        return $this;
    }
}
