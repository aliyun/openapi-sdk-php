<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ChangePassword
 *
 * @method string getOldPassword()
 * @method string getNewPassword()
 */
class ChangePassword extends RpcRequest
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
    public $action = 'ChangePassword';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $oldPassword
     *
     * @return $this
     */
    public function withOldPassword($oldPassword)
    {
        $this->data['OldPassword'] = $oldPassword;
        $this->options['query']['OldPassword'] = $oldPassword;

        return $this;
    }

    /**
     * @param string $newPassword
     *
     * @return $this
     */
    public function withNewPassword($newPassword)
    {
        $this->data['NewPassword'] = $newPassword;
        $this->options['query']['NewPassword'] = $newPassword;

        return $this;
    }
}
