<?php

namespace AlibabaCloud\UniMkt\V20181212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChargeLaunch chargeLaunch(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CheckReceivingDetail checkReceivingDetail(array $options = [])
 * @method KeepAlive keepAlive(array $options = [])
 * @method PushDeviceStatus pushDeviceStatus(array $options = [])
 * @method PushExtraTradeDetail pushExtraTradeDetail(array $options = [])
 * @method PushFaultEvent pushFaultEvent(array $options = [])
 * @method PushTradeDetail pushTradeDetail(array $options = [])
 * @method QueryPromotion queryPromotion(array $options = [])
 * @method RegistDevice registDevice(array $options = [])
 * @method SaveCpmTrade saveCpmTrade(array $options = [])
 * @method ScanCodeNotification scanCodeNotification(array $options = [])
 */
class UniMktApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'UniMkt';

    /** @var string */
    public $version = '2018-12-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'uniMkt';
}

/**
 * @method string getExtra()
 * @method $this withExtra($value)
 * @method string getAlipayOpenId()
 * @method $this withAlipayOpenId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getOuterCode()
 * @method $this withOuterCode($value)
 */
class ChargeLaunch extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDeviceSn()
 * @method string getChannelId()
 */
class CheckDevice extends Rpc
{

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
 * @method string getDeviceCode()
 * @method string getV()
 * @method string getChannelId()
 */
class CheckReceivingDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceCode($value)
    {
        $this->data['DeviceCode'] = $value;
        $this->options['form_params']['DeviceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withV($value)
    {
        $this->data['V'] = $value;
        $this->options['form_params']['V'] = $value;

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
 * @method string getTac()
 * @method string getNetworkType()
 * @method string getCellId()
 * @method string getDeviceSn()
 * @method string getChannelId()
 */
class KeepAlive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTac($value)
    {
        $this->data['Tac'] = $value;
        $this->options['form_params']['Tac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCellId($value)
    {
        $this->data['CellId'] = $value;
        $this->options['form_params']['CellId'] = $value;

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
 * @method string getDeviceSn()
 * @method string getChannelId()
 * @method string getStatus()
 */
class PushDeviceStatus extends Rpc
{

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
 * @method string getOrderId()
 * @method string getSalePrice()
 * @method string getTradeStatus()
 * @method string getCommodityId()
 * @method string getDeviceSn()
 * @method string getChannelId()
 * @method string getCommodityName()
 * @method string getTradeTime()
 * @method string getTradePrice()
 */
class PushExtraTradeDetail extends Rpc
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
    public function withTradeStatus($value)
    {
        $this->data['TradeStatus'] = $value;
        $this->options['form_params']['TradeStatus'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommodityName($value)
    {
        $this->data['CommodityName'] = $value;
        $this->options['form_params']['CommodityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTradeTime($value)
    {
        $this->data['TradeTime'] = $value;
        $this->options['form_params']['TradeTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTradePrice($value)
    {
        $this->data['TradePrice'] = $value;
        $this->options['form_params']['TradePrice'] = $value;

        return $this;
    }
}

/**
 * @method string getFaultComment()
 * @method string getTime()
 * @method string getType()
 * @method string getDeviceSn()
 * @method string getChannelId()
 * @method string getFaultType()
 */
class PushFaultEvent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaultComment($value)
    {
        $this->data['FaultComment'] = $value;
        $this->options['form_params']['FaultComment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTime($value)
    {
        $this->data['Time'] = $value;
        $this->options['form_params']['Time'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaultType($value)
    {
        $this->data['FaultType'] = $value;
        $this->options['form_params']['FaultType'] = $value;

        return $this;
    }
}

/**
 * @method string getSalePrice()
 * @method string getEndTime()
 * @method string getTradeStatus()
 * @method string getCommodityId()
 * @method string getStartTime()
 * @method string getTradeOrderId()
 * @method string getDeviceSn()
 * @method string getCommodityName()
 * @method string getVerificationStatus()
 * @method string getAlipayOrderId()
 * @method string getChannelId()
 * @method string getOuterTradeId()
 * @method string getTradeTime()
 * @method string getTradePrice()
 */
class PushTradeDetail extends Rpc
{

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
    public function withTradeStatus($value)
    {
        $this->data['TradeStatus'] = $value;
        $this->options['form_params']['TradeStatus'] = $value;

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
    public function withTradeOrderId($value)
    {
        $this->data['TradeOrderId'] = $value;
        $this->options['form_params']['TradeOrderId'] = $value;

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
    public function withCommodityName($value)
    {
        $this->data['CommodityName'] = $value;
        $this->options['form_params']['CommodityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerificationStatus($value)
    {
        $this->data['VerificationStatus'] = $value;
        $this->options['form_params']['VerificationStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayOrderId($value)
    {
        $this->data['AlipayOrderId'] = $value;
        $this->options['form_params']['AlipayOrderId'] = $value;

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
    public function withOuterTradeId($value)
    {
        $this->data['OuterTradeId'] = $value;
        $this->options['form_params']['OuterTradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTradeTime($value)
    {
        $this->data['TradeTime'] = $value;
        $this->options['form_params']['TradeTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTradePrice($value)
    {
        $this->data['TradePrice'] = $value;
        $this->options['form_params']['TradePrice'] = $value;

        return $this;
    }
}

/**
 * @method string getExtra()
 * @method string getAlipayOpenId()
 * @method string getUserId()
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
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }
}

/**
 * @method string getFirstScene()
 * @method string getDetailAddr()
 * @method string getCity()
 * @method string getDeviceType()
 * @method string getLocationName()
 * @method string getProvince()
 * @method string getDistrict()
 * @method string getDeviceName()
 * @method string getDeviceModelNumber()
 * @method string getSecondScene()
 * @method string getFloor()
 * @method string getChannelId()
 * @method string getOuterCode()
 */
class RegistDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFirstScene($value)
    {
        $this->data['FirstScene'] = $value;
        $this->options['form_params']['FirstScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetailAddr($value)
    {
        $this->data['DetailAddr'] = $value;
        $this->options['form_params']['DetailAddr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCity($value)
    {
        $this->data['City'] = $value;
        $this->options['form_params']['City'] = $value;

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
    public function withLocationName($value)
    {
        $this->data['LocationName'] = $value;
        $this->options['form_params']['LocationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProvince($value)
    {
        $this->data['Province'] = $value;
        $this->options['form_params']['Province'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDistrict($value)
    {
        $this->data['District'] = $value;
        $this->options['form_params']['District'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceModelNumber($value)
    {
        $this->data['DeviceModelNumber'] = $value;
        $this->options['form_params']['DeviceModelNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecondScene($value)
    {
        $this->data['SecondScene'] = $value;
        $this->options['form_params']['SecondScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFloor($value)
    {
        $this->data['Floor'] = $value;
        $this->options['form_params']['Floor'] = $value;

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
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getRealCostAmount()
 * @method $this withRealCostAmount($value)
 * @method string getSex()
 * @method $this withSex($value)
 * @method string getCostDetail()
 * @method $this withCostDetail($value)
 * @method string getTaskTag()
 * @method $this withTaskTag($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getDeviceCode()
 * @method $this withDeviceCode($value)
 * @method string getV()
 * @method $this withV($value)
 * @method string getApplyPrice()
 * @method $this withApplyPrice($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getHoldId()
 * @method $this withHoldId($value)
 * @method string getExtendString()
 * @method $this withExtendString($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getAge()
 * @method $this withAge($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getAdvertType()
 * @method $this withAdvertType($value)
 * @method string getOuterCode()
 * @method $this withOuterCode($value)
 * @method string getTradeTime()
 * @method $this withTradeTime($value)
 */
class SaveCpmTrade extends Rpc
{
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
 * @method string getCostDetail()
 * @method $this withCostDetail($value)
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
