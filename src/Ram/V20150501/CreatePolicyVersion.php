<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api CreatePolicyVersion
 *
 * @method string getSetAsDefault()
 * @method string getPolicyName()
 * @method string getPolicyDocument()
 */
class CreatePolicyVersion extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

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
