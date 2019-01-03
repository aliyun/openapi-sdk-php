<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMonitoringTemplate
 *
 * @method string getEventRuleTemplatesJson()
 * @method string getName()
 * @method string getRestVersion()
 * @method string getDescription()
 * @method string getId()
 * @method string getAlertTemplatesJson()
 */
class UpdateMonitoringTemplate extends RpcRequest
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
    public $action = 'UpdateMonitoringTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEventRuleTemplatesJson() instead.
     *
     * @param string $eventRuleTemplatesJson
     *
     * @return $this
     */
    public function setEventRuleTemplatesJson($eventRuleTemplatesJson)
    {
        return $this->withEventRuleTemplatesJson($eventRuleTemplatesJson);
    }

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
     * @deprecated deprecated since version 2.0, Use withRestVersion() instead.
     *
     * @param string $restVersion
     *
     * @return $this
     */
    public function setRestVersion($restVersion)
    {
        return $this->withRestVersion($restVersion);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
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
     * @deprecated deprecated since version 2.0, Use withAlertTemplatesJson() instead.
     *
     * @param string $alertTemplatesJson
     *
     * @return $this
     */
    public function setAlertTemplatesJson($alertTemplatesJson)
    {
        return $this->withAlertTemplatesJson($alertTemplatesJson);
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
