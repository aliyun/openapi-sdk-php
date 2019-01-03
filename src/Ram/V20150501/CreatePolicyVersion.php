<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePolicyVersion
 *
 * @method string getSetAsDefault()
 * @method string getPolicyName()
 * @method string getPolicyDocument()
 */
class CreatePolicyVersion extends RpcRequest
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
    public $action = 'CreatePolicyVersion';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSetAsDefault() instead.
     *
     * @param string $setAsDefault
     *
     * @return $this
     */
    public function setSetAsDefault($setAsDefault)
    {
        return $this->withSetAsDefault($setAsDefault);
    }

    /**
     * @param string $setAsDefault
     *
     * @return $this
     */
    public function withSetAsDefault($setAsDefault)
    {
        $this->data['SetAsDefault'] = $setAsDefault;
        $this->options['query']['SetAsDefault'] = $setAsDefault;

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
