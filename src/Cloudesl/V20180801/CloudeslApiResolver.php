<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateApService activateApService(array $options = [])
 * @method ActivateApService2 activateApService2(array $options = [])
 * @method BatchInsertItems batchInsertItems(array $options = [])
 * @method BindApStoreService bindApStoreService(array $options = [])
 * @method BindEslDevice bindEslDevice(array $options = [])
 * @method BindEslDeviceShelf bindEslDeviceShelf(array $options = [])
 * @method CreateStore createStore(array $options = [])
 * @method DeleteApService deleteApService(array $options = [])
 * @method DeleteEslDevice deleteEslDevice(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method DeleteItemBySkuId deleteItemBySkuId(array $options = [])
 * @method DeleteStore deleteStore(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DescribeCompany describeCompany(array $options = [])
 * @method DescribeEslDevices describeEslDevices(array $options = [])
 * @method DescribeItems describeItems(array $options = [])
 * @method DescribeStores describeStores(array $options = [])
 * @method DescribeUserOperationLog describeUserOperationLog(array $options = [])
 * @method DescribeUserRamPolicy describeUserRamPolicy(array $options = [])
 * @method SearchApService searchApService(array $options = [])
 * @method UnbindEslDevice unbindEslDevice(array $options = [])
 * @method UnbindEslDeviceShelf unbindEslDeviceShelf(array $options = [])
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
    public $version = '2018-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudesl';
}

/**
 * @method string getApMac()
 * @method $this withApMac($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class ActivateApService extends Rpc
{
}

/**
 * @method string getApMac()
 * @method $this withApMac($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class ActivateApService2 extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method array getItemInfo()
 */
class BatchInsertItems extends Rpc
{

    /**
     * @param array $itemInfo
     *
     * @return $this
     */
	public function withItemInfo(array $itemInfo)
	{
	    $this->data['ItemInfo'] = $itemInfo;
		foreach ($itemInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['MemberPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.MemberPrice'] = $depth1Value['MemberPrice'];
			}
			if(isset($depth1Value['ActionPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ActionPrice'] = $depth1Value['ActionPrice'];
			}
			if(isset($depth1Value['ProductionPlace'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ProductionPlace'] = $depth1Value['ProductionPlace'];
			}
			if(isset($depth1Value['BeSourceCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeSourceCode'] = $depth1Value['BeSourceCode'];
			}
			if(isset($depth1Value['StoreId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.StoreId'] = $depth1Value['StoreId'];
			}
			if(isset($depth1Value['BrandName'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BrandName'] = $depth1Value['BrandName'];
			}
			if(isset($depth1Value['PromotionStart'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionStart'] = $depth1Value['PromotionStart'];
			}
			if(isset($depth1Value['SourceCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SourceCode'] = $depth1Value['SourceCode'];
			}
			if(isset($depth1Value['ItemId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['ExtraAttribute'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ExtraAttribute'] = $depth1Value['ExtraAttribute'];
			}
			if(isset($depth1Value['CompanyId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CompanyId'] = $depth1Value['CompanyId'];
			}
			if(isset($depth1Value['PriceUnit'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PriceUnit'] = $depth1Value['PriceUnit'];
			}
			if(isset($depth1Value['Rank'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Rank'] = $depth1Value['Rank'];
			}
			if(isset($depth1Value['ItemBarCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemBarCode'] = $depth1Value['ItemBarCode'];
			}
			if(isset($depth1Value['BePromotion'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BePromotion'] = $depth1Value['BePromotion'];
			}
			if(isset($depth1Value['PromotionEnd'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionEnd'] = $depth1Value['PromotionEnd'];
			}
			if(isset($depth1Value['ItemTitle'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemTitle'] = $depth1Value['ItemTitle'];
			}
			if(isset($depth1Value['OriginalPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.OriginalPrice'] = $depth1Value['OriginalPrice'];
			}
			if(isset($depth1Value['ItemShortTitle'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemShortTitle'] = $depth1Value['ItemShortTitle'];
			}
			if(isset($depth1Value['CustomizeFeatureC'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureC'] = $depth1Value['CustomizeFeatureC'];
			}
			if(isset($depth1Value['ItemQrCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemQrCode'] = $depth1Value['ItemQrCode'];
			}
			if(isset($depth1Value['CustomizeFeatureD'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureD'] = $depth1Value['CustomizeFeatureD'];
			}
			if(isset($depth1Value['PromotionReason'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionReason'] = $depth1Value['PromotionReason'];
			}
			if(isset($depth1Value['CustomizeFeatureE'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureE'] = $depth1Value['CustomizeFeatureE'];
			}
			if(isset($depth1Value['CustomizeFeatureF'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureF'] = $depth1Value['CustomizeFeatureF'];
			}
			if(isset($depth1Value['ForestSecondId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ForestSecondId'] = $depth1Value['ForestSecondId'];
			}
			if(isset($depth1Value['CustomizeFeatureG'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureG'] = $depth1Value['CustomizeFeatureG'];
			}
			if(isset($depth1Value['CustomizeFeatureH'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureH'] = $depth1Value['CustomizeFeatureH'];
			}
			if(isset($depth1Value['CustomizeFeatureI'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureI'] = $depth1Value['CustomizeFeatureI'];
			}
			if(isset($depth1Value['CustomizeFeatureJ'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureJ'] = $depth1Value['CustomizeFeatureJ'];
			}
			if(isset($depth1Value['OptionGroups'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.OptionGroups'] = $depth1Value['OptionGroups'];
			}
			if(isset($depth1Value['ModelNumber'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ModelNumber'] = $depth1Value['ModelNumber'];
			}
			if(isset($depth1Value['SaleSpec'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SaleSpec'] = $depth1Value['SaleSpec'];
			}
			if(isset($depth1Value['CustomizeFeatureA'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureA'] = $depth1Value['CustomizeFeatureA'];
			}
			if(isset($depth1Value['CustomizeFeatureB'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureB'] = $depth1Value['CustomizeFeatureB'];
			}
			if(isset($depth1Value['SuggestPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SuggestPrice'] = $depth1Value['SuggestPrice'];
			}
			if(isset($depth1Value['ForestFirstId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ForestFirstId'] = $depth1Value['ForestFirstId'];
			}
			if(isset($depth1Value['CategoryName'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CategoryName'] = $depth1Value['CategoryName'];
			}
			if(isset($depth1Value['EnergyEfficiency'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.EnergyEfficiency'] = $depth1Value['EnergyEfficiency'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
			}
			if(isset($depth1Value['PromotionText'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionText'] = $depth1Value['PromotionText'];
			}
		}

		return $this;
    }
}

/**
 * @method string getApMac()
 * @method $this withApMac($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class BindApStoreService extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class BindEslDevice extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 */
class BindEslDeviceShelf extends Rpc
{
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class CreateStore extends Rpc
{
}

/**
 * @method string getApMac()
 * @method $this withApMac($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DeleteApService extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 */
class DeleteEslDevice extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DeleteItem extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getSkuId()
 * @method $this withSkuId($value)
 */
class DeleteItemBySkuId extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DeleteStore extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromAlarmTime()
 * @method $this withFromAlarmTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getToAlarmTime()
 * @method $this withToAlarmTime($value)
 * @method string getAlarmType()
 * @method $this withAlarmType($value)
 * @method string getAlarmStatus()
 * @method $this withAlarmStatus($value)
 * @method string getErrorType()
 * @method $this withErrorType($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 */
class DescribeAlarms extends Rpc
{
}

class DescribeCompany extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 * @method string getEslStatus()
 * @method $this withEslStatus($value)
 * @method string getToBatteryLevel()
 * @method $this withToBatteryLevel($value)
 * @method string getFromBatteryLevel()
 * @method $this withFromBatteryLevel($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getBeBind()
 * @method $this withBeBind($value)
 */
class DescribeEslDevices extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 * @method string getBePromotion()
 * @method $this withBePromotion($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getSkuId()
 * @method $this withSkuId($value)
 */
class DescribeItems extends Rpc
{
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromDate()
 * @method $this withFromDate($value)
 * @method string getToDate()
 * @method $this withToDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 */
class DescribeStores extends Rpc
{
}

/**
 * @method string getOperateUserId()
 * @method $this withOperateUserId($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromDate()
 * @method $this withFromDate($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getToDate()
 * @method $this withToDate($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getOperateStatus()
 * @method $this withOperateStatus($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class DescribeUserOperationLog extends Rpc
{
}

/**
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 */
class DescribeUserRamPolicy extends Rpc
{
}

/**
 * @method string getApMac()
 * @method $this withApMac($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getActivated()
 * @method $this withActivated($value)
 */
class SearchApService extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class UnbindEslDevice extends Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 */
class UnbindEslDeviceShelf extends Rpc
{
}

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 */
class UpdateStore extends Rpc
{
}
