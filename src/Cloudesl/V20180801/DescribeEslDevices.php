<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEslDevices
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
class DescribeEslDevices extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeEslDevices';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEslStatus() instead.
     *
     * @param string $eslStatus
     *
     * @return $this
     */
    public function setEslStatus($eslStatus)
    {
        return $this->withEslStatus($eslStatus);
    }

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
     * @deprecated deprecated since version 2.0, Use withToBatteryLevel() instead.
     *
     * @param string $toBatteryLevel
     *
     * @return $this
     */
    public function setToBatteryLevel($toBatteryLevel)
    {
        return $this->withToBatteryLevel($toBatteryLevel);
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
     * @deprecated deprecated since version 2.0, Use withStoreId() instead.
     *
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->withStoreId($storeId);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withMac() instead.
     *
     * @param string $mac
     *
     * @return $this
     */
    public function setMac($mac)
    {
        return $this->withMac($mac);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
     * @deprecated deprecated since version 2.0, Use withFromBatteryLevel() instead.
     *
     * @param string $fromBatteryLevel
     *
     * @return $this
     */
    public function setFromBatteryLevel($fromBatteryLevel)
    {
        return $this->withFromBatteryLevel($fromBatteryLevel);
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
     * @deprecated deprecated since version 2.0, Use withShelfCode() instead.
     *
     * @param string $shelfCode
     *
     * @return $this
     */
    public function setShelfCode($shelfCode)
    {
        return $this->withShelfCode($shelfCode);
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
     * @deprecated deprecated since version 2.0, Use withEslBarCode() instead.
     *
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function setEslBarCode($eslBarCode)
    {
        return $this->withEslBarCode($eslBarCode);
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
     * @deprecated deprecated since version 2.0, Use withVendor() instead.
     *
     * @param string $vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        return $this->withVendor($vendor);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withBeBind() instead.
     *
     * @param string $beBind
     *
     * @return $this
     */
    public function setBeBind($beBind)
    {
        return $this->withBeBind($beBind);
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
     * @deprecated deprecated since version 2.0, Use withItemBarCode() instead.
     *
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function setItemBarCode($itemBarCode)
    {
        return $this->withItemBarCode($itemBarCode);
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
