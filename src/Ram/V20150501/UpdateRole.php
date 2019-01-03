<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateRole
 *
 * @method string getNewAssumeRolePolicyDocument()
 * @method string getRoleName()
 */
class UpdateRole extends RpcRequest
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
    public $action = 'UpdateRole';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNewAssumeRolePolicyDocument() instead.
     *
     * @param string $newAssumeRolePolicyDocument
     *
     * @return $this
     */
    public function setNewAssumeRolePolicyDocument($newAssumeRolePolicyDocument)
    {
        return $this->withNewAssumeRolePolicyDocument($newAssumeRolePolicyDocument);
    }

    /**
     * @param string $newAssumeRolePolicyDocument
     *
     * @return $this
     */
    public function withNewAssumeRolePolicyDocument($newAssumeRolePolicyDocument)
    {
        $this->data['NewAssumeRolePolicyDocument'] = $newAssumeRolePolicyDocument;
        $this->options['query']['NewAssumeRolePolicyDocument'] = $newAssumeRolePolicyDocument;

        return $this;
    }

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
}
