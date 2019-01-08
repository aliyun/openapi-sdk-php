<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMonitoringTemplate
 *
 * @method string getEventRuleTemplatesJson()
 * @method string getName()
 * @method string getNamespace()
 * @method string getDescription()
 * @method string getAlertTemplatesJson()
 */
class CreateMonitoringTemplate extends RpcRequest
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
    public $action = 'CreateMonitoringTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $namespace
     *
     * @return $this
     */
    public function withNamespace($namespace)
    {
        $this->data['Namespace'] = $namespace;
        $this->options['query']['Namespace'] = $namespace;

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
