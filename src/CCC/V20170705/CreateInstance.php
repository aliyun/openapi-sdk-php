<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CreateInstance
 *
 * @method array getUserObject()
 * @method string getName()
 * @method string getDomainName()
 * @method array getPhoneNumber()
 * @method string getDescription()
 * @method string getStorageMaxDays()
 * @method string getStorageMaxSize()
 * @method string getDirectoryId()
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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
     * @param string $storageMaxDays
     *
     * @return $this
     */
    public function withStorageMaxDays($storageMaxDays)
    {
        $this->data['StorageMaxDays'] = $storageMaxDays;
        $this->options['query']['StorageMaxDays'] = $storageMaxDays;

        return $this;
    }

    /**
     * @param string $storageMaxSize
     *
     * @return $this
     */
    public function withStorageMaxSize($storageMaxSize)
    {
        $this->data['StorageMaxSize'] = $storageMaxSize;
        $this->options['query']['StorageMaxSize'] = $storageMaxSize;

        return $this;
    }

    /**
     * @param string $directoryId
     *
     * @return $this
     */
    public function withDirectoryId($directoryId)
    {
        $this->data['DirectoryId'] = $directoryId;
        $this->options['query']['DirectoryId'] = $directoryId;

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
