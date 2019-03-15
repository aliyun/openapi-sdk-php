<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getPlanId()
 * @method string getName()
 * @method string getEventTypes()
 * @method string getPreRecordDuration()
 * @method string getRecordDuration()
 * @method string getTemplateId()
 */
class UpdateEventRecordPlan extends RpcRequest
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
    public $action = 'UpdateEventRecordPlan';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $planId
     *
     * @return $this
     */
    public function withPlanId($planId)
    {
        $this->data['PlanId']             = $planId;
        $this->options['query']['PlanId'] = $planId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name']             = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $eventTypes
     *
     * @return $this
     */
    public function withEventTypes($eventTypes)
    {
        $this->data['EventTypes']             = $eventTypes;
        $this->options['query']['EventTypes'] = $eventTypes;

        return $this;
    }

    /**
     * @param string $preRecordDuration
     *
     * @return $this
     */
    public function withPreRecordDuration($preRecordDuration)
    {
        $this->data['PreRecordDuration']             = $preRecordDuration;
        $this->options['query']['PreRecordDuration'] = $preRecordDuration;

        return $this;
    }

    /**
     * @param string $recordDuration
     *
     * @return $this
     */
    public function withRecordDuration($recordDuration)
    {
        $this->data['RecordDuration']             = $recordDuration;
        $this->options['query']['RecordDuration'] = $recordDuration;

        return $this;
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId']             = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }
}
