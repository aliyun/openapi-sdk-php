<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetEventRecordPlan
 *
 * @method string getName()
 * @method string getEventTypes()
 * @method string getPreRecordDuration()
 * @method string getRecordDuration()
 * @method string getTemplateId()
 */
class SetEventRecordPlan extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'SetEventRecordPlan';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventTypes() instead.
     *
     * @param string $eventTypes
     *
     * @return $this
     */
    public function setEventTypes($eventTypes)
    {
        return $this->withEventTypes($eventTypes);
    }

    /**
     * @param string $eventTypes
     *
     * @return $this
     */
    public function withEventTypes($eventTypes)
    {
        $this->data['EventTypes'] = $eventTypes;
        $this->options['query']['EventTypes'] = $eventTypes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPreRecordDuration() instead.
     *
     * @param string $preRecordDuration
     *
     * @return $this
     */
    public function setPreRecordDuration($preRecordDuration)
    {
        return $this->withPreRecordDuration($preRecordDuration);
    }

    /**
     * @param string $preRecordDuration
     *
     * @return $this
     */
    public function withPreRecordDuration($preRecordDuration)
    {
        $this->data['PreRecordDuration'] = $preRecordDuration;
        $this->options['query']['PreRecordDuration'] = $preRecordDuration;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecordDuration() instead.
     *
     * @param string $recordDuration
     *
     * @return $this
     */
    public function setRecordDuration($recordDuration)
    {
        return $this->withRecordDuration($recordDuration);
    }

    /**
     * @param string $recordDuration
     *
     * @return $this
     */
    public function withRecordDuration($recordDuration)
    {
        $this->data['RecordDuration'] = $recordDuration;
        $this->options['query']['RecordDuration'] = $recordDuration;

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
}
