<?php

namespace AlibabaCloud\Cloudesl\V20200201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateApDevice activateApDevice(array $options = [])
 * @method AddApDevice addApDevice(array $options = [])
 * @method AddCompanyTemplate addCompanyTemplate(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method ApplyCompanyTemplateVersionToStores applyCompanyTemplateVersionToStores(array $options = [])
 * @method AssignUser assignUser(array $options = [])
 * @method BatchInsertItems batchInsertItems(array $options = [])
 * @method BindEslDevice bindEslDevice(array $options = [])
 * @method CreateStore createStore(array $options = [])
 * @method DeleteApDevice deleteApDevice(array $options = [])
 * @method DeleteCompanyTemplate deleteCompanyTemplate(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method DeleteStore deleteStore(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DescribeApDevices describeApDevices(array $options = [])
 * @method DescribeAvailableEslModels describeAvailableEslModels(array $options = [])
 * @method DescribeBinders describeBinders(array $options = [])
 * @method DescribeCompanyTemplateVersions describeCompanyTemplateVersions(array $options = [])
 * @method DescribeEslDevice describeEslDevice(array $options = [])
 * @method DescribeEslDevices describeEslDevices(array $options = [])
 * @method DescribeEslModelByTemplateVersion describeEslModelByTemplateVersion(array $options = [])
 * @method DescribeItems describeItems(array $options = [])
 * @method DescribeStoreByTemplateVersion describeStoreByTemplateVersion(array $options = [])
 * @method DescribeStoreConfig describeStoreConfig(array $options = [])
 * @method DescribeStores describeStores(array $options = [])
 * @method DescribeTemplateByModel describeTemplateByModel(array $options = [])
 * @method DescribeUserLog describeUserLog(array $options = [])
 * @method DescribeUsers describeUsers(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method QueryTemplateListByGroupId queryTemplateListByGroupId(array $options = [])
 * @method SyncAddMaterial syncAddMaterial(array $options = [])
 * @method UnassignUser unassignUser(array $options = [])
 * @method UnbindEslDevice unbindEslDevice(array $options = [])
 * @method UpdateEslDeviceLight updateEslDeviceLight(array $options = [])
 * @method UpdateStore updateStore(array $options = [])
 * @method UpdateStoreConfig updateStoreConfig(array $options = [])
 */
class CloudeslApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloudesl';

    /** @var string */
    public $version = '2020-02-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getExtraParams()
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
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
 * @method string getExtraParams()
 * @method string getClientToken()
 * @method string getRemark()
 * @method string getApMac()
 * @method string getStoreId()
 * @method string getSerialNumber()
 */
class AddApDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

        return $this;
    }

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
    public function withSerialNumber($value)
    {
        $this->data['SerialNumber'] = $value;
        $this->options['form_params']['SerialNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getEslSize()
 * @method string getIfPromotion()
 * @method string getDeviceType()
 * @method string getScene()
 * @method string getTemplateVersion()
 * @method string getTemplateType()
 * @method string getVendor()
 * @method string getIfDefault()
 * @method string getTemplateName()
 * @method string getTemplateSceneId()
 * @method string getIfSourceCode()
 * @method string getGroupId()
 * @method string getIfMember()
 * @method string getLayout()
 * @method string getIfOutOfInventory()
 */
class AddCompanyTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslSize($value)
    {
        $this->data['EslSize'] = $value;
        $this->options['form_params']['EslSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIfPromotion($value)
    {
        $this->data['IfPromotion'] = $value;
        $this->options['form_params']['IfPromotion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateType($value)
    {
        $this->data['TemplateType'] = $value;
        $this->options['form_params']['TemplateType'] = $value;

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
    public function withIfDefault($value)
    {
        $this->data['IfDefault'] = $value;
        $this->options['form_params']['IfDefault'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateSceneId($value)
    {
        $this->data['TemplateSceneId'] = $value;
        $this->options['form_params']['TemplateSceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIfSourceCode($value)
    {
        $this->data['IfSourceCode'] = $value;
        $this->options['form_params']['IfSourceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIfMember($value)
    {
        $this->data['IfMember'] = $value;
        $this->options['form_params']['IfMember'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLayout($value)
    {
        $this->data['Layout'] = $value;
        $this->options['form_params']['Layout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIfOutOfInventory($value)
    {
        $this->data['IfOutOfInventory'] = $value;
        $this->options['form_params']['IfOutOfInventory'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getClientToken()
 * @method string getUserId()
 */
class AddUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

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
 * @method string getStores()
 * @method string getTemplateVersion()
 */
class ApplyCompanyTemplateVersionToStores extends Rpc
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
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
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
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
 * @method string getExtraParams()
 * @method string getStoreId()
 * @method string getSyncByItemId()
 * @method array getItemInfo()
 */
class BatchInsertItems extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withSyncByItemId($value)
    {
        $this->data['SyncByItemId'] = $value;
        $this->options['form_params']['SyncByItemId'] = $value;

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
			if(isset($depth1Value['MemberPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.MemberPrice'] = $depth1Value['MemberPrice'];
			}
			if(isset($depth1Value['ActionPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ActionPrice'] = $depth1Value['ActionPrice'];
			}
			if(isset($depth1Value['BeSourceCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeSourceCode'] = $depth1Value['BeSourceCode'];
			}
			if(isset($depth1Value['BrandName'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BrandName'] = $depth1Value['BrandName'];
			}
			if(isset($depth1Value['PromotionStart'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionStart'] = $depth1Value['PromotionStart'];
			}
			if(isset($depth1Value['PriceUnit'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PriceUnit'] = $depth1Value['PriceUnit'];
			}
			if(isset($depth1Value['Rank'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Rank'] = $depth1Value['Rank'];
			}
			if(isset($depth1Value['ItemInfoIndex'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemInfoIndex'] = $depth1Value['ItemInfoIndex'];
			}
			if(isset($depth1Value['ItemBarCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemBarCode'] = $depth1Value['ItemBarCode'];
			}
			if(isset($depth1Value['CustomizeFeatureK'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureK'] = $depth1Value['CustomizeFeatureK'];
			}
			if(isset($depth1Value['CustomizeFeatureL'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureL'] = $depth1Value['CustomizeFeatureL'];
			}
			if(isset($depth1Value['CustomizeFeatureM'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureM'] = $depth1Value['CustomizeFeatureM'];
			}
			if(isset($depth1Value['CustomizeFeatureN'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureN'] = $depth1Value['CustomizeFeatureN'];
			}
			if(isset($depth1Value['BePromotion'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BePromotion'] = $depth1Value['BePromotion'];
			}
			if(isset($depth1Value['CustomizeFeatureO'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureO'] = $depth1Value['CustomizeFeatureO'];
			}
			if(isset($depth1Value['CustomizeFeatureP'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureP'] = $depth1Value['CustomizeFeatureP'];
			}
			if(isset($depth1Value['PromotionEnd'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionEnd'] = $depth1Value['PromotionEnd'];
			}
			if(isset($depth1Value['ItemTitle'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemTitle'] = $depth1Value['ItemTitle'];
			}
			if(isset($depth1Value['CustomizeFeatureQ'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureQ'] = $depth1Value['CustomizeFeatureQ'];
			}
			if(isset($depth1Value['CustomizeFeatureR'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureR'] = $depth1Value['CustomizeFeatureR'];
			}
			if(isset($depth1Value['CustomizeFeatureC'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureC'] = $depth1Value['CustomizeFeatureC'];
			}
			if(isset($depth1Value['CustomizeFeatureD'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureD'] = $depth1Value['CustomizeFeatureD'];
			}
			if(isset($depth1Value['ItemQrCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemQrCode'] = $depth1Value['ItemQrCode'];
			}
			if(isset($depth1Value['CustomizeFeatureE'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureE'] = $depth1Value['CustomizeFeatureE'];
			}
			if(isset($depth1Value['PromotionReason'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionReason'] = $depth1Value['PromotionReason'];
			}
			if(isset($depth1Value['InventoryStatus'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.InventoryStatus'] = $depth1Value['InventoryStatus'];
			}
			if(isset($depth1Value['CustomizeFeatureF'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureF'] = $depth1Value['CustomizeFeatureF'];
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
			if(isset($depth1Value['ProductionPlace'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ProductionPlace'] = $depth1Value['ProductionPlace'];
			}
			if(isset($depth1Value['SourceCode'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SourceCode'] = $depth1Value['SourceCode'];
			}
			if(isset($depth1Value['Manufacturer'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Manufacturer'] = $depth1Value['Manufacturer'];
			}
			if(isset($depth1Value['ItemId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['BeMember'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeMember'] = $depth1Value['BeMember'];
			}
			if(isset($depth1Value['CustomizeFeatureS'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureS'] = $depth1Value['CustomizeFeatureS'];
			}
			if(isset($depth1Value['CustomizeFeatureT'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureT'] = $depth1Value['CustomizeFeatureT'];
			}
			if(isset($depth1Value['CustomizeFeatureU'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureU'] = $depth1Value['CustomizeFeatureU'];
			}
			if(isset($depth1Value['TemplateSceneId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.TemplateSceneId'] = $depth1Value['TemplateSceneId'];
			}
			if(isset($depth1Value['CustomizeFeatureV'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureV'] = $depth1Value['CustomizeFeatureV'];
			}
			if(isset($depth1Value['CustomizeFeatureW'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureW'] = $depth1Value['CustomizeFeatureW'];
			}
			if(isset($depth1Value['CustomizeFeatureX'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureX'] = $depth1Value['CustomizeFeatureX'];
			}
			if(isset($depth1Value['CustomizeFeatureY'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureY'] = $depth1Value['CustomizeFeatureY'];
			}
			if(isset($depth1Value['CustomizeFeatureZ'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CustomizeFeatureZ'] = $depth1Value['CustomizeFeatureZ'];
			}
			if(isset($depth1Value['SalesPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SalesPrice'] = $depth1Value['SalesPrice'];
			}
			if(isset($depth1Value['OriginalPrice'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.OriginalPrice'] = $depth1Value['OriginalPrice'];
			}
			if(isset($depth1Value['ItemShortTitle'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemShortTitle'] = $depth1Value['ItemShortTitle'];
			}
			if(isset($depth1Value['ItemPicUrl'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ItemPicUrl'] = $depth1Value['ItemPicUrl'];
			}
			if(isset($depth1Value['ForestSecondId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ForestSecondId'] = $depth1Value['ForestSecondId'];
			}
			if(isset($depth1Value['SupplierName'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SupplierName'] = $depth1Value['SupplierName'];
			}
			if(isset($depth1Value['BeClearance'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.BeClearance'] = $depth1Value['BeClearance'];
			}
			if(isset($depth1Value['Material'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.Material'] = $depth1Value['Material'];
			}
			if(isset($depth1Value['ModelNumber'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.ModelNumber'] = $depth1Value['ModelNumber'];
			}
			if(isset($depth1Value['SaleSpec'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SaleSpec'] = $depth1Value['SaleSpec'];
			}
			if(isset($depth1Value['CategoryName'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.CategoryName'] = $depth1Value['CategoryName'];
			}
			if(isset($depth1Value['TaxFee'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.TaxFee'] = $depth1Value['TaxFee'];
			}
			if(isset($depth1Value['EnergyEfficiency'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.EnergyEfficiency'] = $depth1Value['EnergyEfficiency'];
			}
			if(isset($depth1Value['PromotionText'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.PromotionText'] = $depth1Value['PromotionText'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['form_params']['ItemInfo.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getContainerName()
 * @method string getStoreId()
 * @method string getLayoutId()
 * @method string getLayer()
 * @method string getEslBarCode()
 * @method string getLayoutName()
 * @method string getItemBarCode()
 * @method string getColumn()
 * @method string getShelf()
 * @method string getContainerId()
 */
class BindEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContainerName($value)
    {
        $this->data['ContainerName'] = $value;
        $this->options['form_params']['ContainerName'] = $value;

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
    public function withLayoutId($value)
    {
        $this->data['LayoutId'] = $value;
        $this->options['form_params']['LayoutId'] = $value;

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
    public function withLayoutName($value)
    {
        $this->data['LayoutName'] = $value;
        $this->options['form_params']['LayoutName'] = $value;

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
    public function withColumn($value)
    {
        $this->data['Column'] = $value;
        $this->options['form_params']['Column'] = $value;

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
    public function withContainerId($value)
    {
        $this->data['ContainerId'] = $value;
        $this->options['form_params']['ContainerId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getClientToken()
 * @method string getTimeZone()
 * @method string getStoreName()
 * @method string getParentId()
 * @method string getAutoUnbindDays()
 * @method string getAutoUnbindOfflineEsl()
 * @method string getBarCodeEncode()
 * @method string getUserStoreCode()
 * @method string getPhone()
 */
class CreateStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeZone($value)
    {
        $this->data['TimeZone'] = $value;
        $this->options['form_params']['TimeZone'] = $value;

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
    public function withAutoUnbindDays($value)
    {
        $this->data['AutoUnbindDays'] = $value;
        $this->options['form_params']['AutoUnbindDays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoUnbindOfflineEsl($value)
    {
        $this->data['AutoUnbindOfflineEsl'] = $value;
        $this->options['form_params']['AutoUnbindOfflineEsl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBarCodeEncode($value)
    {
        $this->data['BarCodeEncode'] = $value;
        $this->options['form_params']['BarCodeEncode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserStoreCode($value)
    {
        $this->data['UserStoreCode'] = $value;
        $this->options['form_params']['UserStoreCode'] = $value;

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
}

/**
 * @method string getExtraParams()
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
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
 * @method string getExtraParams()
 * @method string getTemplateId()
 */
class DeleteCompanyTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getItemBarCode()
 * @method string getUnbindEslDevice()
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnbindEslDevice($value)
    {
        $this->data['UnbindEslDevice'] = $value;
        $this->options['form_params']['UnbindEslDevice'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getStoreId()
 */
class DeleteStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getExtraParams()
 * @method string getUserId()
 */
class DeleteUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getExtraParams()
 * @method string getApMac()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getModel()
 * @method string getBeActivate()
 * @method string getStatus()
 */
class DescribeApDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['Model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeActivate($value)
    {
        $this->data['BeActivate'] = $value;
        $this->options['form_params']['BeActivate'] = $value;

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
 * @method string getModelId()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 */
class DescribeAvailableEslModels extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['form_params']['ModelId'] = $value;

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

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
 * @method string getExtraParams()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getItemBarCode()
 * @method string getItemTitle()
 */
class DescribeBinders extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withItemTitle($value)
    {
        $this->data['ItemTitle'] = $value;
        $this->options['form_params']['ItemTitle'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class DescribeCompanyTemplateVersions extends Rpc
{

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
}

/**
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getToDate()
 * @method string getPageSize()
 */
class DescribeEslDevice extends Rpc
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
 * @method string getExtraParams()
 * @method string getType()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getTypeEncode()
 * @method string getEslStatus()
 * @method string getToBatteryLevel()
 * @method string getFromBatteryLevel()
 */
class DescribeEslDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
    public function withTypeEncode($value)
    {
        $this->data['TypeEncode'] = $value;
        $this->options['form_params']['TypeEncode'] = $value;

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
}

/**
 * @method string getPageNumber()
 * @method string getTemplateVersion()
 * @method string getPageSize()
 */
class DescribeEslModelByTemplateVersion extends Rpc
{

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
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

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
 * @method string getExtraParams()
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
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getTemplateVersion()
 */
class DescribeStoreByTemplateVersion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getStoreId()
 */
class DescribeStoreConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getExtraParams()
 * @method string getStoreName()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getTemplateVersion()
 * @method string getToDate()
 * @method string getPageSize()
 * @method string getUserStoreCode()
 */
class DescribeStores extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

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
    public function withUserStoreCode($value)
    {
        $this->data['UserStoreCode'] = $value;
        $this->options['form_params']['UserStoreCode'] = $value;

        return $this;
    }
}

/**
 * @method string getEslSize()
 * @method string getDeviceType()
 * @method string getPageNumber()
 * @method string getTemplateVersion()
 * @method string getPageSize()
 */
class DescribeTemplateByModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEslSize($value)
    {
        $this->data['EslSize'] = $value;
        $this->options['form_params']['EslSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

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
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

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
 * @method string getExtraParams()
 * @method string getStoreId()
 * @method string getUserId()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getOperationStatus()
 * @method string getToDate()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getItemBarCode()
 * @method string getItemShortTitle()
 * @method string getOperationType()
 * @method string getLogId()
 */
class DescribeUserLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withOperationStatus($value)
    {
        $this->data['OperationStatus'] = $value;
        $this->options['form_params']['OperationStatus'] = $value;

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
    public function withItemShortTitle($value)
    {
        $this->data['ItemShortTitle'] = $value;
        $this->options['form_params']['ItemShortTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogId($value)
    {
        $this->data['LogId'] = $value;
        $this->options['form_params']['LogId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getUserId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getUserType()
 * @method string getUserName()
 */
class DescribeUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getUserId()
 */
class GetUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getGroupId()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class QueryTemplateListByGroupId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

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
}

/**
 * @method string getContent()
 * @method string getName()
 */
class SyncAddMaterial extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraParams()
 * @method string getUserId()
 */
class UnassignUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
 * @method string getExtraParams()
 * @method string getContainerName()
 * @method string getStoreId()
 * @method string getLayer()
 * @method string getEslBarCode()
 * @method string getItemBarCode()
 * @method string getColumn()
 * @method string getShelf()
 */
class UnbindEslDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContainerName($value)
    {
        $this->data['ContainerName'] = $value;
        $this->options['form_params']['ContainerName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColumn($value)
    {
        $this->data['Column'] = $value;
        $this->options['form_params']['Column'] = $value;

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
}

/**
 * @method string getExtraParams()
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
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

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
 * @method string getExtraParams()
 * @method string getTimezone()
 * @method string getStoreName()
 * @method string getStoreId()
 * @method string getAutoUnbindDays()
 * @method string getTemplateVersion()
 * @method string getAutoUnbindOfflineEsl()
 * @method string getBarCodeEncode()
 * @method string getUserStoreCode()
 * @method string getPhone()
 */
class UpdateStore extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

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
    public function withAutoUnbindDays($value)
    {
        $this->data['AutoUnbindDays'] = $value;
        $this->options['form_params']['AutoUnbindDays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['form_params']['TemplateVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoUnbindOfflineEsl($value)
    {
        $this->data['AutoUnbindOfflineEsl'] = $value;
        $this->options['form_params']['AutoUnbindOfflineEsl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBarCodeEncode($value)
    {
        $this->data['BarCodeEncode'] = $value;
        $this->options['form_params']['BarCodeEncode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserStoreCode($value)
    {
        $this->data['UserStoreCode'] = $value;
        $this->options['form_params']['UserStoreCode'] = $value;

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
}

/**
 * @method string getExtraParams()
 * @method string getStoreId()
 * @method string getSubscribeContents()
 * @method string getEnableNotification()
 * @method string getNotificationWebHook()
 * @method string getNotificationSilentTimes()
 */
class UpdateStoreConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

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
    public function withSubscribeContents($value)
    {
        $this->data['SubscribeContents'] = $value;
        $this->options['form_params']['SubscribeContents'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableNotification($value)
    {
        $this->data['EnableNotification'] = $value;
        $this->options['form_params']['EnableNotification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotificationWebHook($value)
    {
        $this->data['NotificationWebHook'] = $value;
        $this->options['form_params']['NotificationWebHook'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotificationSilentTimes($value)
    {
        $this->data['NotificationSilentTimes'] = $value;
        $this->options['form_params']['NotificationSilentTimes'] = $value;

        return $this;
    }
}
