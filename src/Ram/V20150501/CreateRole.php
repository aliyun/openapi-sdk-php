<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api CreateRole
 *
 * @method string getRoleName()
 * @method string getDescription()
 * @method string getAssumeRolePolicyDocument()
 */
class CreateRole extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function withRoleName($roleName)
    {
        $this->data['RoleName'] = $roleName;
        $this->options['query']['RoleName'] = $roleName;

        return $this;
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
     * @param string $assumeRolePolicyDocument
     *
     * @return $this
     */
    public function withAssumeRolePolicyDocument($assumeRolePolicyDocument)
    {
        $this->data['AssumeRolePolicyDocument'] = $assumeRolePolicyDocument;
        $this->options['query']['AssumeRolePolicyDocument'] = $assumeRolePolicyDocument;

        return $this;
    }
}
