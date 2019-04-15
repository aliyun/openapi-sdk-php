<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteItemBySkuId deleteItemBySkuId(array $options = [])
 * @method PrepareCompany prepareCompany(array $options = [])
 * @method DescribeCompany describeCompany(array $options = [])
 * @method CreateStore createStore(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DeleteStore deleteStore(array $options = [])
 * @method UpdateStore updateStore(array $options = [])
 * @method DescribeStores describeStores(array $options = [])
 * @method BatchInsertItems batchInsertItems(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method DescribeItems describeItems(array $options = [])
 * @method BindEslDevice bindEslDevice(array $options = [])
 * @method UnbindEslDevice unbindEslDevice(array $options = [])
 * @method DeleteEslDevice deleteEslDevice(array $options = [])
 * @method BindEslDeviceShelf bindEslDeviceShelf(array $options = [])
 * @method DescribeEslDevices describeEslDevices(array $options = [])
 * @method UnbindEslDeviceShelf unbindEslDeviceShelf(array $options = [])
 * @method DescribeUserOperationLog describeUserOperationLog(array $options = [])
 * @method DescribeUserRamPolicy describeUserRamPolicy(array $options = [])
 */
class CloudeslApiResolver
{
    use ApiResolverTrait;
}

class V20180801Rpc extends Rpc
{
    /** @var string */
    public $product = 'cloudesl';

    /** @var string */
    public $version = '2018-08-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getSkuId()
 * @method $this withSkuId($value)
 */
class DeleteItemBySkuId extends V20180801Rpc
{
}

/**
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class PrepareCompany extends V20180801Rpc
{
}

class DescribeCompany extends V20180801Rpc
{
}

/**
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateStore extends V20180801Rpc
{
}

/**
 * @method string getErrorType()
 * @method $this withErrorType($value)
 * @method string getToAlarmTime()
 * @method $this withToAlarmTime($value)
 * @method string getAlarmType()
 * @method $this withAlarmType($value)
 * @method string getFromAlarmTime()
 * @method $this withFromAlarmTime($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAlarmStatus()
 * @method $this withAlarmStatus($value)
 */
class DescribeAlarms extends V20180801Rpc
{
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DeleteStore extends V20180801Rpc
{
}

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 */
class UpdateStore extends V20180801Rpc
{
}

/**
 * @method string getToDate()
 * @method $this withToDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromDate()
 * @method $this withFromDate($value)
 */
class DescribeStores extends V20180801Rpc
{
}

/**
 * @method array getItemInfo()
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class BatchInsertItems extends V20180801Rpc
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
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.MemberPrice'] = $depth1Value['MemberPrice'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ActionPrice'] = $depth1Value['ActionPrice'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ProductionPlace'] = $depth1Value['ProductionPlace'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeSourceCode'] = $depth1Value['BeSourceCode'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.StoreId'] = $depth1Value['StoreId'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BrandName'] = $depth1Value['BrandName'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionStart'] = $depth1Value['PromotionStart'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SourceCode'] = $depth1Value['SourceCode'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ExtraAttribute'] = $depth1Value['ExtraAttribute'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CompanyId'] = $depth1Value['CompanyId'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PriceUnit'] = $depth1Value['PriceUnit'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Rank'] = $depth1Value['Rank'];
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
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
            $this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionText'] = $depth1Value['PromotionText'];
        }

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DeleteItem extends V20180801Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBePromotion()
 * @method $this withBePromotion($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getSkuId()
 * @method $this withSkuId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeItems extends V20180801Rpc
{
}

/**
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class BindEslDevice extends V20180801Rpc
{
}

/**
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class UnbindEslDevice extends V20180801Rpc
{
}

/**
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DeleteEslDevice extends V20180801Rpc
{
}

/**
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class BindEslDeviceShelf extends V20180801Rpc
{
}

/**
 * @method string getEslStatus()
 * @method $this withEslStatus($value)
 * @method string getToBatteryLevel()
 * @method $this withToBatteryLevel($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromBatteryLevel()
 * @method $this withFromBatteryLevel($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBeBind()
 * @method $this withBeBind($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeEslDevices extends V20180801Rpc
{
}

/**
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class UnbindEslDeviceShelf extends V20180801Rpc
{
}

/**
 * @method string getOperateUserId()
 * @method $this withOperateUserId($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getOperateStatus()
 * @method $this withOperateStatus($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
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
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeUserOperationLog extends V20180801Rpc
{
}

/**
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DescribeUserRamPolicy extends V20180801Rpc
{
}
