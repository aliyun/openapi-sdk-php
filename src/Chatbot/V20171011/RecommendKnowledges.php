<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RecommendKnowledges
 *
 * @method string getSimilarityLevel()
 * @method string getNumber()
 * @method string getInstanceId()
 * @method string getAppId()
 * @method string getUtterance()
 */
class RecommendKnowledges extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'RecommendKnowledges';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withSimilarityLevel() instead.
     *
     * @param string $similarityLevel
     *
     * @return $this
     */
    public function setSimilarityLevel($similarityLevel)
    {
        return $this->withSimilarityLevel($similarityLevel);
    }

    /**
     * @param string $similarityLevel
     *
     * @return $this
     */
    public function withSimilarityLevel($similarityLevel)
    {
        $this->data['SimilarityLevel'] = $similarityLevel;
        $this->options['query']['SimilarityLevel'] = $similarityLevel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNumber() instead.
     *
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        return $this->withNumber($number);
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function withNumber($number)
    {
        $this->data['Number'] = $number;
        $this->options['query']['Number'] = $number;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUtterance() instead.
     *
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        return $this->withUtterance($utterance);
    }

    /**
     * @param string $utterance
     *
     * @return $this
     */
    public function withUtterance($utterance)
    {
        $this->data['Utterance'] = $utterance;
        $this->options['query']['Utterance'] = $utterance;

        return $this;
    }
}
