<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api ApplyTemplate
 *
 * @method string getEnableStartTime()
 * @method string getApplyMode()
 * @method string getTemplateIds()
 * @method string getEnableEndTime()
 * @method string getGroupId()
 * @method string getNotifyLevel()
 * @method string getSilenceTime()
 */
class ApplyTemplate extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
