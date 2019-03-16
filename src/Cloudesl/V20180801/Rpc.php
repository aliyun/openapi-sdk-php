<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withItemInfo(array $value)
    {
        $this->data['ItemInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemInfo.' . ($i + 1) . '.MemberPrice'] = $value[$i]['MemberPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ActionPrice'] = $value[$i]['ActionPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ProductionPlace'] = $value[$i]['ProductionPlace'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BeSourceCode'] = $value[$i]['BeSourceCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.StoreId'] = $value[$i]['StoreId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BrandName'] = $value[$i]['BrandName'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionStart'] = $value[$i]['PromotionStart'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SourceCode'] = $value[$i]['SourceCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemId'] = $value[$i]['ItemId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ExtraAttribute'] = $value[$i]['ExtraAttribute'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CompanyId'] = $value[$i]['CompanyId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PriceUnit'] = $value[$i]['PriceUnit'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.Rank'] = $value[$i]['Rank'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemBarCode'] = $value[$i]['ItemBarCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BePromotion'] = $value[$i]['BePromotion'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionEnd'] = $value[$i]['PromotionEnd'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemTitle'] = $value[$i]['ItemTitle'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.OriginalPrice'] = $value[$i]['OriginalPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemShortTitle'] = $value[$i]['ItemShortTitle'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureC'] = $value[$i]['CustomizeFeatureC'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemQrCode'] = $value[$i]['ItemQrCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureD'] = $value[$i]['CustomizeFeatureD'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionReason'] = $value[$i]['PromotionReason'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureE'] = $value[$i]['CustomizeFeatureE'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureF'] = $value[$i]['CustomizeFeatureF'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ForestSecondId'] = $value[$i]['ForestSecondId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureG'] = $value[$i]['CustomizeFeatureG'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureH'] = $value[$i]['CustomizeFeatureH'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureI'] = $value[$i]['CustomizeFeatureI'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureJ'] = $value[$i]['CustomizeFeatureJ'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.OptionGroups'] = $value[$i]['OptionGroups'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ModelNumber'] = $value[$i]['ModelNumber'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SaleSpec'] = $value[$i]['SaleSpec'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureA'] = $value[$i]['CustomizeFeatureA'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureB'] = $value[$i]['CustomizeFeatureB'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SuggestPrice'] = $value[$i]['SuggestPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ForestFirstId'] = $value[$i]['ForestFirstId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CategoryName'] = $value[$i]['CategoryName'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.EnergyEfficiency'] = $value[$i]['EnergyEfficiency'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SkuId'] = $value[$i]['SkuId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionText'] = $value[$i]['PromotionText'];
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
