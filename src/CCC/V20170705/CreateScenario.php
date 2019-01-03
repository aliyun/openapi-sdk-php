<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateScenario
 *
 * @method string getInstanceId()
 * @method array getSurveysJson()
 * @method string getStrategyJson()
 * @method string getName()
 * @method string getDescription()
 * @method string getType()
 */
class CreateScenario extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'CreateScenario';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getSurveysJson() instead.
     *
     * @return array
     */
    public function getSurveysJsons()
    {
        return $this->getSurveysJson();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSurveysJson() instead.
     *
     * @param array $surveysJsons
     *
     * @return $this
     */
    public function setSurveysJsons(array $surveysJsons)
    {
        return $this->withSurveysJson($surveysJsons);
    }

    /**
     * @param array $surveysJson
     *
     * @return $this
     */
    public function withSurveysJson(array $surveysJson)
    {
        $this->data['SurveysJson'] = $surveysJson;
        foreach ($surveysJson as $i => $iValue) {
            $this->options['query']['SurveysJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStrategyJson() instead.
     *
     * @param string $strategyJson
     *
     * @return $this
     */
    public function setStrategyJson($strategyJson)
    {
        return $this->withStrategyJson($strategyJson);
    }

    /**
     * @param string $strategyJson
     *
     * @return $this
     */
    public function withStrategyJson($strategyJson)
    {
        $this->data['StrategyJson'] = $strategyJson;
        $this->options['query']['StrategyJson'] = $strategyJson;

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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}
