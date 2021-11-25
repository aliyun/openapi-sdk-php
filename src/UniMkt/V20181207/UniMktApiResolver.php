<?php

namespace AlibabaCloud\UniMkt\V20181207;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AccountOperate accountOperate(array $options = [])
 * @method BrandMessageMigrate brandMessageMigrate(array $options = [])
 * @method CreateOrderProxy createOrderProxy(array $options = [])
 * @method GetConsoleInfo getConsoleInfo(array $options = [])
 * @method GetImageUrl getImageUrl(array $options = [])
 * @method PopUpQuery popUpQuery(array $options = [])
 * @method PopUpQuery2 popUpQuery2(array $options = [])
 * @method QueryPromotion queryPromotion(array $options = [])
 * @method QueryWithPay queryWithPay(array $options = [])
 * @method ScanCodeNotification scanCodeNotification(array $options = [])
 * @method ServingPlanMigrate servingPlanMigrate(array $options = [])
 */
class UniMktApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'UniMkt';

    /** @var string */
    public $version = '2018-12-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = '1.0.0';
}

/**
 * @method string getAccountManagerNumber()
 * @method string getFromUserId()
 * @method string getToAccountNo()
 * @method string getCataloguePrice()
 * @method string getBpId()
 * @method string getOperateName()
 * @method string getBalance()
 * @method string getActualAmount()
 * @method string getProxyUserNick()
 * @method string getFromAccountNo()
 * @method string getPriceVersion()
 * @method string getCreateTime()
 * @method string getAmount()
 * @method string getAccountManagerName()
 * @method string getToUserId()
 * @method string getMarketCount()
 * @method string getProxyUserId()
 * @method string getDiscountRate()
 * @method string getAccuActualAmount()
 * @method string getFlowId()
 * @method string getPreDebit()
 * @method string getAccuAmount()
 */
class AccountOperate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountManagerNumber($value)
    {
        $this->data['AccountManagerNumber'] = $value;
        $this->options['form_params']['AccountManagerNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromUserId($value)
    {
        $this->data['FromUserId'] = $value;
        $this->options['form_params']['FromUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToAccountNo($value)
    {
        $this->data['ToAccountNo'] = $value;
        $this->options['form_params']['ToAccountNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCataloguePrice($value)
    {
        $this->data['CataloguePrice'] = $value;
        $this->options['form_params']['CataloguePrice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBpId($value)
    {
        $this->data['BpId'] = $value;
        $this->options['form_params']['BpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperateName($value)
    {
        $this->data['OperateName'] = $value;
        $this->options['form_params']['OperateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBalance($value)
    {
        $this->data['Balance'] = $value;
        $this->options['form_params']['Balance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActualAmount($value)
    {
        $this->data['ActualAmount'] = $value;
        $this->options['form_params']['ActualAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserNick($value)
    {
        $this->data['ProxyUserNick'] = $value;
        $this->options['form_params']['ProxyUserNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromAccountNo($value)
    {
        $this->data['FromAccountNo'] = $value;
        $this->options['form_params']['FromAccountNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriceVersion($value)
    {
        $this->data['PriceVersion'] = $value;
        $this->options['form_params']['PriceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTime($value)
    {
        $this->data['CreateTime'] = $value;
        $this->options['form_params']['CreateTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAmount($value)
    {
        $this->data['Amount'] = $value;
        $this->options['form_params']['Amount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountManagerName($value)
    {
        $this->data['AccountManagerName'] = $value;
        $this->options['form_params']['AccountManagerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToUserId($value)
    {
        $this->data['ToUserId'] = $value;
        $this->options['form_params']['ToUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMarketCount($value)
    {
        $this->data['MarketCount'] = $value;
        $this->options['form_params']['MarketCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiscountRate($value)
    {
        $this->data['DiscountRate'] = $value;
        $this->options['form_params']['DiscountRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccuActualAmount($value)
    {
        $this->data['AccuActualAmount'] = $value;
        $this->options['form_params']['AccuActualAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreDebit($value)
    {
        $this->data['PreDebit'] = $value;
        $this->options['form_params']['PreDebit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccuAmount($value)
    {
        $this->data['AccuAmount'] = $value;
        $this->options['form_params']['AccuAmount'] = $value;

        return $this;
    }
}

/**
 * @method string getBrandUserId()
 * @method string getBrandUserNick()
 * @method string getIndustry()
 * @method string getProxyUserId()
 * @method string getUserId()
 * @method string getContactName()
 * @method string getAccountNo()
 * @method string getCompany()
 * @method string getProxyUserNick()
 * @method string getContactPhone()
 */
class BrandMessageMigrate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrandUserId($value)
    {
        $this->data['BrandUserId'] = $value;
        $this->options['form_params']['BrandUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrandUserNick($value)
    {
        $this->data['BrandUserNick'] = $value;
        $this->options['form_params']['BrandUserNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIndustry($value)
    {
        $this->data['Industry'] = $value;
        $this->options['form_params']['Industry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

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
    public function withContactName($value)
    {
        $this->data['ContactName'] = $value;
        $this->options['form_params']['ContactName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountNo($value)
    {
        $this->data['AccountNo'] = $value;
        $this->options['form_params']['AccountNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompany($value)
    {
        $this->data['Company'] = $value;
        $this->options['form_params']['Company'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserNick($value)
    {
        $this->data['ProxyUserNick'] = $value;
        $this->options['form_params']['ProxyUserNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactPhone($value)
    {
        $this->data['ContactPhone'] = $value;
        $this->options['form_params']['ContactPhone'] = $value;

        return $this;
    }
}

/**
 * @method string getSalePrice()
 * @method $this withSalePrice($value)
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 * @method string getHolderId()
 * @method $this withHolderId($value)
 * @method string getPromotionId()
 * @method $this withPromotionId($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getAlipayUid()
 * @method $this withAlipayUid($value)
 * @method string getDeviceCode()
 * @method $this withDeviceCode($value)
 * @method string getV()
 * @method $this withV($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getOuterCode()
 * @method $this withOuterCode($value)
 * @method string getQueryStr()
 * @method $this withQueryStr($value)
 */
class CreateOrderProxy extends Rpc
{
}

/**
 * @method string getMessage()
 */
class GetConsoleInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessage($value)
    {
        $this->data['Message'] = $value;
        $this->options['form_params']['Message'] = $value;

        return $this;
    }
}

/**
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 */
class GetImageUrl extends Rpc
{
}

/**
 * @method string getOptionType()
 * @method string getExtra()
 * @method string getUrlId()
 * @method string getAlipayOpenId()
 * @method string getChannelId()
 * @method string getOuterCode()
 */
class PopUpQuery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptionType($value)
    {
        $this->data['OptionType'] = $value;
        $this->options['form_params']['OptionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlId($value)
    {
        $this->data['UrlId'] = $value;
        $this->options['form_params']['UrlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayOpenId($value)
    {
        $this->data['AlipayOpenId'] = $value;
        $this->options['form_params']['AlipayOpenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterCode($value)
    {
        $this->data['OuterCode'] = $value;
        $this->options['form_params']['OuterCode'] = $value;

        return $this;
    }
}

/**
 * @method string getExtra()
 * @method string getUrlId()
 * @method string getAlipayOpenId()
 * @method string getChannelId()
 * @method string getOuterCode()
 */
class PopUpQuery2 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlId($value)
    {
        $this->data['UrlId'] = $value;
        $this->options['form_params']['UrlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayOpenId($value)
    {
        $this->data['AlipayOpenId'] = $value;
        $this->options['form_params']['AlipayOpenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterCode($value)
    {
        $this->data['OuterCode'] = $value;
        $this->options['form_params']['OuterCode'] = $value;

        return $this;
    }
}

/**
 * @method string getExtra()
 * @method string getAlipayOpenId()
 * @method string getChannelId()
 */
class QueryPromotion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayOpenId($value)
    {
        $this->data['AlipayOpenId'] = $value;
        $this->options['form_params']['AlipayOpenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtra()
 * @method string getSalePrice()
 * @method string getCommodityId()
 * @method string getAlipayOpenId()
 * @method string getDeviceSn()
 * @method string getChannelId()
 */
class QueryWithPay extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSalePrice($value)
    {
        $this->data['SalePrice'] = $value;
        $this->options['form_params']['SalePrice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommodityId($value)
    {
        $this->data['CommodityId'] = $value;
        $this->options['form_params']['CommodityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayOpenId($value)
    {
        $this->data['AlipayOpenId'] = $value;
        $this->options['form_params']['AlipayOpenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSn($value)
    {
        $this->data['DeviceSn'] = $value;
        $this->options['form_params']['DeviceSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }
}

/**
 * @method string getRealCostAmount()
 * @method $this withRealCostAmount($value)
 * @method string getSalePrice()
 * @method $this withSalePrice($value)
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 * @method string getHolderId()
 * @method $this withHolderId($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getDeviceCode()
 * @method $this withDeviceCode($value)
 * @method string getApplyPrice()
 * @method $this withApplyPrice($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOuterCode()
 * @method $this withOuterCode($value)
 * @method string getQueryStr()
 * @method $this withQueryStr($value)
 * @method string getPhase()
 * @method $this withPhase($value)
 * @method string getBizResult()
 * @method $this withBizResult($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getBrandUserId()
 * @method $this withBrandUserId($value)
 * @method string getSex()
 * @method $this withSex($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getAlipayOpenId()
 * @method $this withAlipayOpenId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBrandNick()
 * @method $this withBrandNick($value)
 * @method string getV()
 * @method $this withV($value)
 * @method string getChargeTag()
 * @method $this withChargeTag($value)
 * @method string getAge()
 * @method $this withAge($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getCid()
 * @method $this withCid($value)
 */
class ScanCodeNotification extends Rpc
{
}

/**
 * @method string getQuotaPerDay()
 * @method string getBrandUserId()
 * @method string getEndTime()
 * @method string getBrandUserNick()
 * @method string getStartTime()
 * @method string getProxyUserId()
 * @method string getBizType()
 * @method string getQuota()
 * @method string getName()
 * @method string getProxyUserNick()
 * @method string getPayType()
 * @method string getTaskId()
 * @method string getStatus()
 */
class ServingPlanMigrate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaPerDay($value)
    {
        $this->data['QuotaPerDay'] = $value;
        $this->options['form_params']['QuotaPerDay'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrandUserId($value)
    {
        $this->data['BrandUserId'] = $value;
        $this->options['form_params']['BrandUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrandUserNick($value)
    {
        $this->data['BrandUserNick'] = $value;
        $this->options['form_params']['BrandUserNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuota($value)
    {
        $this->data['Quota'] = $value;
        $this->options['form_params']['Quota'] = $value;

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
    public function withProxyUserNick($value)
    {
        $this->data['ProxyUserNick'] = $value;
        $this->options['form_params']['ProxyUserNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayType($value)
    {
        $this->data['PayType'] = $value;
        $this->options['form_params']['PayType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

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
