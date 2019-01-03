<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckInspectText
 *
 * @method array getSentence()
 * @method string getCcsInstanceId()
 */
class CheckInspectText extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'CheckInspectText';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use getSentence() instead.
     *
     * @return array
     */
    public function getSentences()
    {
        return $this->getSentence();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSentence() instead.
     *
     * @param array $sentences
     *
     * @return $this
     */
    public function setSentences(array $sentences)
    {
        return $this->withSentence($sentences);
    }

    /**
     * @param array $sentence
     *
     * @return $this
     */
    public function withSentence(array $sentence)
    {
        $this->data['Sentence'] = $sentence;
        foreach ($sentence as $i => $iValue) {
            $this->options['query']['Sentence.' . ($i + 1) . '.Speaker'] = $sentence[$i]['Speaker'];
            $this->options['query']['Sentence.' . ($i + 1) . '.EndTime'] = $sentence[$i]['EndTime'];
            $this->options['query']['Sentence.' . ($i + 1) . '.StartTime'] = $sentence[$i]['StartTime'];
            $this->options['query']['Sentence.' . ($i + 1) . '.Content'] = $sentence[$i]['Content'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }
}
