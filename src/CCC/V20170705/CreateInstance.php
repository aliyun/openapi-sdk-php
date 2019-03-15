<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method array getUserObject()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method array getPhoneNumber()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStorageMaxDays()
 * @method $this withStorageMaxDays($value)
 * @method string getStorageMaxSize()
 * @method $this withStorageMaxSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method array getAdminRamId()
 */
class CreateInstance extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $userObject
     *
     * @return $this
     */
    public function withUserObject(array $userObject)
    {
        $this->data['UserObject'] = $userObject;
        foreach ($userObject as $i => $iValue) {
            $this->options['query']['UserObject.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber(array $phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        foreach ($phoneNumber as $i => $iValue) {
            $this->options['query']['PhoneNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $adminRamId
     *
     * @return $this
     */
    public function withAdminRamId(array $adminRamId)
    {
        $this->data['AdminRamId'] = $adminRamId;
        foreach ($adminRamId as $i => $iValue) {
            $this->options['query']['AdminRamId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
