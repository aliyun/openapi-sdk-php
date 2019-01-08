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
