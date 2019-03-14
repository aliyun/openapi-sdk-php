<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api ChangePassword
 *
 * @method string getOldPassword()
 * @method string getNewPassword()
 */
class ChangePassword extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

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
