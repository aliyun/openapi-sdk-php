<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeEslDevices
 *
 * @method string getEslStatus()
 * @method string getToBatteryLevel()
 * @method string getStoreId()
 * @method string getType()
 * @method string getMac()
 * @method string getPageNumber()
 * @method string getFromBatteryLevel()
 * @method string getShelfCode()
 * @method string getEslBarCode()
 * @method string getVendor()
 * @method string getPageSize()
 * @method string getBeBind()
 * @method string getItemBarCode()
 */
class DescribeEslDevices extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $eslStatus
     *
     * @return $this
     */
    public function withEslStatus($eslStatus)
    {
        $this->data['EslStatus'] = $eslStatus;
        $this->options['query']['EslStatus'] = $eslStatus;

        return $this;
    }

    /**
     * @param string $toBatteryLevel
     *
     * @return $this
     */
    public function withToBatteryLevel($toBatteryLevel)
    {
        $this->data['ToBatteryLevel'] = $toBatteryLevel;
        $this->options['query']['ToBatteryLevel'] = $toBatteryLevel;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $mac
     *
     * @return $this
     */
    public function withMac($mac)
    {
        $this->data['Mac'] = $mac;
        $this->options['query']['Mac'] = $mac;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $fromBatteryLevel
     *
     * @return $this
     */
    public function withFromBatteryLevel($fromBatteryLevel)
    {
        $this->data['FromBatteryLevel'] = $fromBatteryLevel;
        $this->options['query']['FromBatteryLevel'] = $fromBatteryLevel;

        return $this;
    }

    /**
     * @param string $shelfCode
     *
     * @return $this
     */
    public function withShelfCode($shelfCode)
    {
        $this->data['ShelfCode'] = $shelfCode;
        $this->options['query']['ShelfCode'] = $shelfCode;

        return $this;
    }

    /**
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function withEslBarCode($eslBarCode)
    {
        $this->data['EslBarCode'] = $eslBarCode;
        $this->options['query']['EslBarCode'] = $eslBarCode;

        return $this;
    }

    /**
     * @param string $vendor
     *
     * @return $this
     */
    public function withVendor($vendor)
    {
        $this->data['Vendor'] = $vendor;
        $this->options['query']['Vendor'] = $vendor;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $beBind
     *
     * @return $this
     */
    public function withBeBind($beBind)
    {
        $this->data['BeBind'] = $beBind;
        $this->options['query']['BeBind'] = $beBind;

        return $this;
    }

    /**
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function withItemBarCode($itemBarCode)
    {
        $this->data['ItemBarCode'] = $itemBarCode;
        $this->options['query']['ItemBarCode'] = $itemBarCode;

        return $this;
    }
}
