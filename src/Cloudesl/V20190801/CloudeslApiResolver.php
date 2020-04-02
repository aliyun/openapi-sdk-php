<?php

namespace AlibabaCloud\Cloudesl\V20190801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateApDevice activateApDevice(array $options = [])
 * @method AddApDevice addApDevice(array $options = [])
 * @method AddEslDevice addEslDevice(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method AssignUser assignUser(array $options = [])
 * @method BatchInsertItems batchInsertItems(array $options = [])
 * @method BindEslDevice bindEslDevice(array $options = [])
 * @method BindEslDeviceShelf bindEslDeviceShelf(array $options = [])
 * @method ConfirmLogistics confirmLogistics(array $options = [])
 * @method CreateStore createStore(array $options = [])
 * @method DeleteApDevice deleteApDevice(array $options = [])
 * @method DeleteEslDevice deleteEslDevice(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method DeleteItemBySkuId deleteItemBySkuId(array $options = [])
 * @method DeleteStore deleteStore(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DescribeApDevices describeApDevices(array $options = [])
 * @method DescribeEslDevices describeEslDevices(array $options = [])
 * @method DescribeItems describeItems(array $options = [])
 * @method DescribeLogistics describeLogistics(array $options = [])
 * @method DescribePayOrders describePayOrders(array $options = [])
 * @method DescribePlanogramRails describePlanogramRails(array $options = [])
 * @method DescribeStores describeStores(array $options = [])
 * @method DescribeUserLog describeUserLog(array $options = [])
 * @method DescribeUsers describeUsers(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method MapPlanogramRail mapPlanogramRail(array $options = [])
 * @method UnassignUser unassignUser(array $options = [])
 * @method UnbindEslDevice unbindEslDevice(array $options = [])
 * @method UnbindEslDeviceShelf unbindEslDeviceShelf(array $options = [])
 * @method UnmapPlanogramRail unmapPlanogramRail(array $options = [])
 * @method UpdateEslDeviceLight updateEslDeviceLight(array $options = [])
 * @method UpdateStore updateStore(array $options = [])
 */
class CloudeslApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloudesl';

    /** @var string */
    public $version = '2019-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudesl';
}

/**
 * @method string getApMac()
 * @method string getStoreId()
 */
class ActivateApDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApMac($value)
    {
        $this->data['ApMac'] = $value;
        $this->options['form_params']['ApMac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getApMac()
 * @method string getStoreId()
 */
class AddApDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApMac($value)
    {
        $this->data['ApMac'] = $value;
        $this->options['form_params']['ApMac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getEslBarCode()
 */
class AddEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 */
class AddUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getStores()
 * @method string getUserType()
 * @method string getUserId()
 */
class AssignUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStores($value)
    {
        $this->data['Stores'] = $value;
        $this->options['form_params']['Stores'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['form_params']['UserType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method array getItemInfo()
 */
class BatchInsertItems extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param array $itemInfo
     *
     * @return $this
     */
	public function withItemInfo(array $itemInfo)
	{
	    $this->data['ItemInfo'] = $itemInfo;
		foreach ($itemInfo as $depth1 => $depth1Value) {
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.MemberPrice'] = $depth1Value['MemberPrice'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ActionPrice'] = $depth1Value['ActionPrice'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ProductionPlace'] = $depth1Value['ProductionPlace'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeSourceCode'] = $depth1Value['BeSourceCode'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.StoreId'] = $depth1Value['StoreId'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BrandName'] = $depth1Value['BrandName'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionStart'] = $depth1Value['PromotionStart'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SourceCode'] = $depth1Value['SourceCode'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ExtraAttribute'] = $depth1Value['ExtraAttribute'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CompanyId'] = $depth1Value['CompanyId'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PriceUnit'] = $depth1Value['PriceUnit'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Rank'] = $depth1Value['Rank'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemInfoIndex'] = $depth1Value['ItemInfoIndex'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemBarCode'] = $depth1Value['ItemBarCode'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BePromotion'] = $depth1Value['BePromotion'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionEnd'] = $depth1Value['PromotionEnd'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemTitle'] = $depth1Value['ItemTitle'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.OriginalPrice'] = $depth1Value['OriginalPrice'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemShortTitle'] = $depth1Value['ItemShortTitle'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureC'] = $depth1Value['CustomizeFeatureC'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemQrCode'] = $depth1Value['ItemQrCode'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureD'] = $depth1Value['CustomizeFeatureD'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionReason'] = $depth1Value['PromotionReason'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureE'] = $depth1Value['CustomizeFeatureE'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureF'] = $depth1Value['CustomizeFeatureF'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ForestSecondId'] = $depth1Value['ForestSecondId'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureG'] = $depth1Value['CustomizeFeatureG'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureH'] = $depth1Value['CustomizeFeatureH'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureI'] = $depth1Value['CustomizeFeatureI'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureJ'] = $depth1Value['CustomizeFeatureJ'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.OptionGroups'] = $depth1Value['OptionGroups'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ModelNumber'] = $depth1Value['ModelNumber'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SaleSpec'] = $depth1Value['SaleSpec'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureA'] = $depth1Value['CustomizeFeatureA'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureB'] = $depth1Value['CustomizeFeatureB'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SuggestPrice'] = $depth1Value['SuggestPrice'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ForestFirstId'] = $depth1Value['ForestFirstId'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CategoryName'] = $depth1Value['CategoryName'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.EnergyEfficiency'] = $depth1Value['EnergyEfficiency'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionText'] = $depth1Value['PromotionText'];
			$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
		}

		return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getEslBarCode()
 * @method string getItemBarCode()
 */
class BindEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getShelfCode()
 * @method string getEslBarCode()
 */
class BindEslDeviceShelf extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShelfCode($value)
    {
        $this->data['ShelfCode'] = $value;
        $this->options['form_params']['ShelfCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getPrNumber()
 * @method string getLogisticsDocuments()
 * @method string getPoNumber()
 * @method string getStatus()
 */
class ConfirmLogistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrNumber($value)
    {
        $this->data['PrNumber'] = $value;
        $this->options['form_params']['PrNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogisticsDocuments($value)
    {
        $this->data['LogisticsDocuments'] = $value;
        $this->options['form_params']['LogisticsDocuments'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPoNumber($value)
    {
        $this->data['PoNumber'] = $value;
        $this->options['form_params']['PoNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreName()
 * @method string getParentId()
 * @method string getCompanyId()
 * @method string getBrand()
 * @method string getComments()
 * @method string getGroups()
 * @method string getPhone()
 * @method string getOutId()
 */
class CreateStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreName($value)
    {
        $this->data['StoreName'] = $value;
        $this->options['form_params']['StoreName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentId($value)
    {
        $this->data['ParentId'] = $value;
        $this->options['form_params']['ParentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyId($value)
    {
        $this->data['CompanyId'] = $value;
        $this->options['form_params']['CompanyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrand($value)
    {
        $this->data['Brand'] = $value;
        $this->options['form_params']['Brand'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComments($value)
    {
        $this->data['Comments'] = $value;
        $this->options['form_params']['Comments'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroups($value)
    {
        $this->data['Groups'] = $value;
        $this->options['form_params']['Groups'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['form_params']['Phone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutId($value)
    {
        $this->data['OutId'] = $value;
        $this->options['form_params']['OutId'] = $value;

        return $this;
    }
}

/**
 * @method string getApMac()
 * @method string getStoreId()
 */
class DeleteApDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApMac($value)
    {
        $this->data['ApMac'] = $value;
        $this->options['form_params']['ApMac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getEslBarCode()
 */
class DeleteEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getItemBarCode()
 */
class DeleteItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getSkuId()
 */
class DeleteItemBySkuId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkuId($value)
    {
        $this->data['SkuId'] = $value;
        $this->options['form_params']['SkuId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class DeleteStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 */
class DeleteUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getFromAlarmTime()
 * @method string getPageSize()
 * @method string getToAlarmTime()
 * @method string getAlarmType()
 * @method string getAlarmStatus()
 * @method string getErrorType()
 * @method string getAlarmId()
 */
class DescribeAlarms extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromAlarmTime($value)
    {
        $this->data['FromAlarmTime'] = $value;
        $this->options['form_params']['FromAlarmTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToAlarmTime($value)
    {
        $this->data['ToAlarmTime'] = $value;
        $this->options['form_params']['ToAlarmTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmType($value)
    {
        $this->data['AlarmType'] = $value;
        $this->options['form_params']['AlarmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmStatus($value)
    {
        $this->data['AlarmStatus'] = $value;
        $this->options['form_params']['AlarmStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErrorType($value)
    {
        $this->data['ErrorType'] = $value;
        $this->options['form_params']['ErrorType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmId($value)
    {
        $this->data['AlarmId'] = $value;
        $this->options['form_params']['AlarmId'] = $value;

        return $this;
    }
}

/**
 * @method string getApMac()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getActivated()
 */
class DescribeApDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApMac($value)
    {
        $this->data['ApMac'] = $value;
        $this->options['form_params']['ApMac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivated($value)
    {
        $this->data['Activated'] = $value;
        $this->options['form_params']['Activated'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getMac()
 * @method string getVendor()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getItemBarCode()
 * @method string getEslStatus()
 * @method string getToBatteryLevel()
 * @method string getFromBatteryLevel()
 * @method string getShelfCode()
 * @method string getBeBind()
 */
class DescribeEslDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMac($value)
    {
        $this->data['Mac'] = $value;
        $this->options['form_params']['Mac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendor($value)
    {
        $this->data['Vendor'] = $value;
        $this->options['form_params']['Vendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslStatus($value)
    {
        $this->data['EslStatus'] = $value;
        $this->options['form_params']['EslStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToBatteryLevel($value)
    {
        $this->data['ToBatteryLevel'] = $value;
        $this->options['form_params']['ToBatteryLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromBatteryLevel($value)
    {
        $this->data['FromBatteryLevel'] = $value;
        $this->options['form_params']['FromBatteryLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShelfCode($value)
    {
        $this->data['ShelfCode'] = $value;
        $this->options['form_params']['ShelfCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeBind($value)
    {
        $this->data['BeBind'] = $value;
        $this->options['form_params']['BeBind'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getItemId()
 * @method string getPageSize()
 * @method string getItemBarCode()
 * @method string getBePromotion()
 * @method string getItemTitle()
 * @method string getSkuId()
 */
class DescribeItems extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemId($value)
    {
        $this->data['ItemId'] = $value;
        $this->options['form_params']['ItemId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBePromotion($value)
    {
        $this->data['BePromotion'] = $value;
        $this->options['form_params']['BePromotion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemTitle($value)
    {
        $this->data['ItemTitle'] = $value;
        $this->options['form_params']['ItemTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkuId($value)
    {
        $this->data['SkuId'] = $value;
        $this->options['form_params']['SkuId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 */
class DescribeLogistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['OrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getToDate()
 * @method string getPageSize()
 */
class DescribePayOrders extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['OrderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDate($value)
    {
        $this->data['FromDate'] = $value;
        $this->options['form_params']['FromDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToDate($value)
    {
        $this->data['ToDate'] = $value;
        $this->options['form_params']['ToDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getLayer()
 * @method string getPageNumber()
 * @method string getShelf()
 * @method string getRailCode()
 * @method string getPageSize()
 */
class DescribePlanogramRails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLayer($value)
    {
        $this->data['Layer'] = $value;
        $this->options['form_params']['Layer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShelf($value)
    {
        $this->data['Shelf'] = $value;
        $this->options['form_params']['Shelf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRailCode($value)
    {
        $this->data['RailCode'] = $value;
        $this->options['form_params']['RailCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreName()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getCompanyId()
 * @method string getToDate()
 * @method string getPageSize()
 * @method string getBrand()
 */
class DescribeStores extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreName($value)
    {
        $this->data['StoreName'] = $value;
        $this->options['form_params']['StoreName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDate($value)
    {
        $this->data['FromDate'] = $value;
        $this->options['form_params']['FromDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyId($value)
    {
        $this->data['CompanyId'] = $value;
        $this->options['form_params']['CompanyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToDate($value)
    {
        $this->data['ToDate'] = $value;
        $this->options['form_params']['ToDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrand($value)
    {
        $this->data['Brand'] = $value;
        $this->options['form_params']['Brand'] = $value;

        return $this;
    }
}

/**
 * @method string getOperateUserId()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getItemId()
 * @method string getToDate()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getItemBarCode()
 * @method string getOperateStatus()
 * @method string getItemTitle()
 * @method string getReverse()
 * @method string getOperateType()
 */
class DescribeUserLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperateUserId($value)
    {
        $this->data['OperateUserId'] = $value;
        $this->options['form_params']['OperateUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDate($value)
    {
        $this->data['FromDate'] = $value;
        $this->options['form_params']['FromDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemId($value)
    {
        $this->data['ItemId'] = $value;
        $this->options['form_params']['ItemId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToDate($value)
    {
        $this->data['ToDate'] = $value;
        $this->options['form_params']['ToDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperateStatus($value)
    {
        $this->data['OperateStatus'] = $value;
        $this->options['form_params']['OperateStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemTitle($value)
    {
        $this->data['ItemTitle'] = $value;
        $this->options['form_params']['ItemTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverse($value)
    {
        $this->data['Reverse'] = $value;
        $this->options['form_params']['Reverse'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperateType($value)
    {
        $this->data['OperateType'] = $value;
        $this->options['form_params']['OperateType'] = $value;

        return $this;
    }
}

/**
 * @method string getUserType()
 * @method string getUserId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getUserName()
 */
class DescribeUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['form_params']['UserType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 */
class GetUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getLayer()
 * @method string getShelf()
 * @method string getRailCode()
 */
class MapPlanogramRail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLayer($value)
    {
        $this->data['Layer'] = $value;
        $this->options['form_params']['Layer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShelf($value)
    {
        $this->data['Shelf'] = $value;
        $this->options['form_params']['Shelf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRailCode($value)
    {
        $this->data['RailCode'] = $value;
        $this->options['form_params']['RailCode'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 */
class UnassignUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getEslBarCode()
 * @method string getItemBarCode()
 */
class UnbindEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getEslBarCode()
 */
class UnbindEslDeviceShelf extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getRailCode()
 */
class UnmapPlanogramRail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRailCode($value)
    {
        $this->data['RailCode'] = $value;
        $this->options['form_params']['RailCode'] = $value;

        return $this;
    }
}

/**
 * @method string getLightUpTime()
 * @method string getStoreId()
 * @method string getFrequency()
 * @method string getEslBarCode()
 * @method string getLedColor()
 * @method string getItemBarCode()
 */
class UpdateEslDeviceLight extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLightUpTime($value)
    {
        $this->data['LightUpTime'] = $value;
        $this->options['form_params']['LightUpTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrequency($value)
    {
        $this->data['Frequency'] = $value;
        $this->options['form_params']['Frequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslBarCode($value)
    {
        $this->data['EslBarCode'] = $value;
        $this->options['form_params']['EslBarCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedColor($value)
    {
        $this->data['LedColor'] = $value;
        $this->options['form_params']['LedColor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemBarCode($value)
    {
        $this->data['ItemBarCode'] = $value;
        $this->options['form_params']['ItemBarCode'] = $value;

        return $this;
    }
}

/**
 * @method string getComments()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getStoreId()
 * @method string getPhone()
 * @method string getOutId()
 * @method string getBrand()
 */
class UpdateStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComments($value)
    {
        $this->data['Comments'] = $value;
        $this->options['form_params']['Comments'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreName($value)
    {
        $this->data['StoreName'] = $value;
        $this->options['form_params']['StoreName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroups($value)
    {
        $this->data['Groups'] = $value;
        $this->options['form_params']['Groups'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['form_params']['Phone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutId($value)
    {
        $this->data['OutId'] = $value;
        $this->options['form_params']['OutId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrand($value)
    {
        $this->data['Brand'] = $value;
        $this->options['form_params']['Brand'] = $value;

        return $this;
    }
}
