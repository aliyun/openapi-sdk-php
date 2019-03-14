<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api UpdateMonitoringTemplate
 *
 * @method string getEventRuleTemplatesJson()
 * @method string getName()
 * @method string getRestVersion()
 * @method string getDescription()
 * @method string getId()
 * @method string getAlertTemplatesJson()
 */
class UpdateMonitoringTemplate extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $eventRuleTemplatesJson
     *
     * @return $this
     */
    public function withEventRuleTemplatesJson($eventRuleTemplatesJson)
    {
        $this->data['EventRuleTemplatesJson'] = $eventRuleTemplatesJson;
        $this->options['query']['EventRuleTemplatesJson'] = $eventRuleTemplatesJson;

        return $this;
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
     * @param string $restVersion
     *
     * @return $this
     */
    public function withRestVersion($restVersion)
    {
        $this->data['RestVersion'] = $restVersion;
        $this->options['query']['RestVersion'] = $restVersion;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @param string $alertTemplatesJson
     *
     * @return $this
     */
    public function withAlertTemplatesJson($alertTemplatesJson)
    {
        $this->data['AlertTemplatesJson'] = $alertTemplatesJson;
        $this->options['query']['AlertTemplatesJson'] = $alertTemplatesJson;

        return $this;
    }
}
