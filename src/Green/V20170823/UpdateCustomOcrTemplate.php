<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateCustomOcrTemplate
 *
 * @method string getSourceIp()
 * @method string getReferArea()
 * @method string getRecognizeArea()
 * @method string getName()
 * @method string getId()
 */
class UpdateCustomOcrTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UpdateCustomOcrTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $referArea
     *
     * @return $this
     */
    public function withReferArea($referArea)
    {
        $this->data['ReferArea'] = $referArea;
        $this->options['query']['ReferArea'] = $referArea;

        return $this;
    }

    /**
     * @param string $recognizeArea
     *
     * @return $this
     */
    public function withRecognizeArea($recognizeArea)
    {
        $this->data['RecognizeArea'] = $recognizeArea;
        $this->options['query']['RecognizeArea'] = $recognizeArea;

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
}
