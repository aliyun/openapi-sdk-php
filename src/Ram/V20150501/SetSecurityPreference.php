<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api SetSecurityPreference
 *
 * @method string getAllowUserToManageAccessKeys()
 * @method string getAllowUserToManageMFADevices()
 * @method string getAllowUserToManagePublicKeys()
 * @method string getEnableSaveMFATicket()
 * @method string getLoginNetworkMasks()
 * @method string getAllowUserToChangePassword()
 * @method string getLoginSessionDuration()
 */
class SetSecurityPreference extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $allowUserToManageAccessKeys
     *
     * @return $this
     */
    public function withAllowUserToManageAccessKeys($allowUserToManageAccessKeys)
    {
        $this->data['AllowUserToManageAccessKeys'] = $allowUserToManageAccessKeys;
        $this->options['query']['AllowUserToManageAccessKeys'] = $allowUserToManageAccessKeys;

        return $this;
    }

    /**
     * @param string $allowUserToManageMFADevices
     *
     * @return $this
     */
    public function withAllowUserToManageMFADevices($allowUserToManageMFADevices)
    {
        $this->data['AllowUserToManageMFADevices'] = $allowUserToManageMFADevices;
        $this->options['query']['AllowUserToManageMFADevices'] = $allowUserToManageMFADevices;

        return $this;
    }

    /**
     * @param string $allowUserToManagePublicKeys
     *
     * @return $this
     */
    public function withAllowUserToManagePublicKeys($allowUserToManagePublicKeys)
    {
        $this->data['AllowUserToManagePublicKeys'] = $allowUserToManagePublicKeys;
        $this->options['query']['AllowUserToManagePublicKeys'] = $allowUserToManagePublicKeys;

        return $this;
    }

    /**
     * @param string $enableSaveMFATicket
     *
     * @return $this
     */
    public function withEnableSaveMFATicket($enableSaveMFATicket)
    {
        $this->data['EnableSaveMFATicket'] = $enableSaveMFATicket;
        $this->options['query']['EnableSaveMFATicket'] = $enableSaveMFATicket;

        return $this;
    }

    /**
     * @param string $loginNetworkMasks
     *
     * @return $this
     */
    public function withLoginNetworkMasks($loginNetworkMasks)
    {
        $this->data['LoginNetworkMasks'] = $loginNetworkMasks;
        $this->options['query']['LoginNetworkMasks'] = $loginNetworkMasks;

        return $this;
    }

    /**
     * @param string $allowUserToChangePassword
     *
     * @return $this
     */
    public function withAllowUserToChangePassword($allowUserToChangePassword)
    {
        $this->data['AllowUserToChangePassword'] = $allowUserToChangePassword;
        $this->options['query']['AllowUserToChangePassword'] = $allowUserToChangePassword;

        return $this;
    }

    /**
     * @param string $loginSessionDuration
     *
     * @return $this
     */
    public function withLoginSessionDuration($loginSessionDuration)
    {
        $this->data['LoginSessionDuration'] = $loginSessionDuration;
        $this->options['query']['LoginSessionDuration'] = $loginSessionDuration;

        return $this;
    }
}
