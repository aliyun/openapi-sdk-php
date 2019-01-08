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
