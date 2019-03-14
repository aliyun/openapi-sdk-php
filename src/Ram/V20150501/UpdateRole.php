<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api UpdateRole
 *
 * @method string getNewAssumeRolePolicyDocument()
 * @method string getRoleName()
 */
class UpdateRole extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

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
