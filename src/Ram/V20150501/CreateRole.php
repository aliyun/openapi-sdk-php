<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRole
 *
 * @method string getRoleName()
 * @method string getDescription()
 * @method string getAssumeRolePolicyDocument()
 */
class CreateRole extends RpcRequest
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
    public $action = 'CreateRole';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withRoleName() instead.
     *
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        return $this->withRoleName($roleName);
    }

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
     * @deprecated deprecated since version 2.0, Use withAssumeRolePolicyDocument() instead.
     *
     * @param string $assumeRolePolicyDocument
     *
     * @return $this
     */
    public function setAssumeRolePolicyDocument($assumeRolePolicyDocument)
    {
        return $this->withAssumeRolePolicyDocument($assumeRolePolicyDocument);
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
