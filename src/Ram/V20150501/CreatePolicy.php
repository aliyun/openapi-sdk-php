<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePolicy
 *
 * @method string getDescription()
 * @method string getPolicyName()
 * @method string getPolicyDocument()
 */
class CreatePolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'CreatePolicy';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withPolicyName() instead.
     *
     * @param string $policyName
     *
     * @return $this
     */
    public function setPolicyName($policyName)
    {
        return $this->withPolicyName($policyName);
    }

    /**
     * @param string $policyName
     *
     * @return $this
     */
    public function withPolicyName($policyName)
    {
        $this->data['PolicyName'] = $policyName;
        $this->options['query']['PolicyName'] = $policyName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPolicyDocument() instead.
     *
     * @param string $policyDocument
     *
     * @return $this
     */
    public function setPolicyDocument($policyDocument)
    {
        return $this->withPolicyDocument($policyDocument);
    }

    /**
     * @param string $policyDocument
     *
     * @return $this
     */
    public function withPolicyDocument($policyDocument)
    {
        $this->data['PolicyDocument'] = $policyDocument;
        $this->options['query']['PolicyDocument'] = $policyDocument;

        return $this;
    }
}
