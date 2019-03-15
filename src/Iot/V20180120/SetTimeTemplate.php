<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getName()
 * @method string getAllDay()
 * @method array getTimeSections()
 */
class SetTimeTemplate extends RpcRequest
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
    public $action = 'SetTimeTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $allDay
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withAllDay() instead.
     *
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
        $this->data['AllDay']             = $allDay;
        $this->options['query']['AllDay'] = $allDay;

        return $this;
    }

    /**
     * @return array
     * @deprecated deprecated since version 2.0, Use getTimeSections() instead.
     *
     */
    public function getTimeSectionss()
    {
        return $this->getTimeSections();
    }

    /**
     * @param array $timeSectionss
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withTimeSections() instead.
     *
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
            $this->options['query']['TimeSections.' . ($i + 1) . '.End']       = $timeSections[$i]['End'];
            $this->options['query']['TimeSections.' . ($i + 1) . '.Begin']     = $timeSections[$i]['Begin'];
        }

        return $this;
    }
}
