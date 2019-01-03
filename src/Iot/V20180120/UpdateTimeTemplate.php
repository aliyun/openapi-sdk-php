<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateTimeTemplate
 *
 * @method string getTemplateId()
 * @method string getName()
 * @method string getAllDay()
 * @method array getTimeSections()
 */
class UpdateTimeTemplate extends RpcRequest
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
    public $action = 'UpdateTimeTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withAllDay() instead.
     *
     * @param string $allDay
     *
     * @return $this
     */
    public function setAllDay($allDay)
    {
        return $this->withAllDay($allDay);
    }

    /**
     * @param string $allDay
     *
     * @return $this
     */
    public function withAllDay($allDay)
    {
        $this->data['AllDay'] = $allDay;
        $this->options['query']['AllDay'] = $allDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTimeSections() instead.
     *
     * @return array
     */
    public function getTimeSectionss()
    {
        return $this->getTimeSections();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeSections() instead.
     *
     * @param array $timeSectionss
     *
     * @return $this
     */
    public function setTimeSectionss(array $timeSectionss)
    {
        return $this->withTimeSections($timeSectionss);
    }

    /**
     * @param array $timeSections
     *
     * @return $this
     */
    public function withTimeSections(array $timeSections)
    {
        $this->data['TimeSections'] = $timeSections;
        foreach ($timeSections as $i => $iValue) {
            $this->options['query']['TimeSections.' . ($i + 1) . '.DayOfWeek'] = $timeSections[$i]['DayOfWeek'];
            $this->options['query']['TimeSections.' . ($i + 1) . '.End'] = $timeSections[$i]['End'];
            $this->options['query']['TimeSections.' . ($i + 1) . '.Begin'] = $timeSections[$i]['Begin'];
        }

        return $this;
    }
}
