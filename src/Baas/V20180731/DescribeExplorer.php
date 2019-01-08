<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeExplorer
 *
 * @method string getOrganizationId()
 * @method string getExBody()
 * @method string getExUrl()
 * @method string getExMethod()
 */
class DescribeExplorer extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'DescribeExplorer';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param string $organizationId
     *
     * @return $this
     */
    public function withOrganizationId($organizationId)
    {
        $this->data['OrganizationId'] = $organizationId;
        $this->options['query']['OrganizationId'] = $organizationId;

        return $this;
    }

    /**
     * @param string $exBody
     *
     * @return $this
     */
    public function withExBody($exBody)
    {
        $this->data['ExBody'] = $exBody;
        $this->options['query']['ExBody'] = $exBody;

        return $this;
    }

    /**
     * @param string $exUrl
     *
     * @return $this
     */
    public function withExUrl($exUrl)
    {
        $this->data['ExUrl'] = $exUrl;
        $this->options['query']['ExUrl'] = $exUrl;

        return $this;
    }

    /**
     * @param string $exMethod
     *
     * @return $this
     */
    public function withExMethod($exMethod)
    {
        $this->data['ExMethod'] = $exMethod;
        $this->options['query']['ExMethod'] = $exMethod;

        return $this;
    }
}
