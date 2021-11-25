<?php

namespace AlibabaCloud\UniMkt\V20181212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeMediaStatus changeMediaStatus(array $options = [])
 * @method ChangeSlotStatus changeSlotStatus(array $options = [])
 * @method ChangeTenantStatus changeTenantStatus(array $options = [])
 * @method ChangeTenantUserStatus changeTenantUserStatus(array $options = [])
 * @method ChargeLaunch chargeLaunch(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CheckReceivingDetail checkReceivingDetail(array $options = [])
 * @method CheckTenantBiz checkTenantBiz(array $options = [])
 * @method CountUser countUser(array $options = [])
 * @method CreateCalculation createCalculation(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method CreateMedia createMedia(array $options = [])
 * @method CreateProxyBrandUser createProxyBrandUser(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateSlot createSlot(array $options = [])
 * @method CreatesSlotTemplate createsSlotTemplate(array $options = [])
 * @method CreateTenant createTenant(array $options = [])
 * @method CreateTenantUser createTenantUser(array $options = [])
 * @method CreateUnionTask createUnionTask(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method EndUnionTask endUnionTask(array $options = [])
 * @method GetMainPartList getMainPartList(array $options = [])
 * @method GetUnionTaskStatus getUnionTaskStatus(array $options = [])
 * @method KeepAlive keepAlive(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListMedia listMedia(array $options = [])
 * @method ListMediaName listMediaName(array $options = [])
 * @method ListRule listRule(array $options = [])
 * @method ListRuleArea listRuleArea(array $options = [])
 * @method ListSlot listSlot(array $options = [])
 * @method ListTenant listTenant(array $options = [])
 * @method ListTenantName listTenantName(array $options = [])
 * @method ListUser listUser(array $options = [])
 * @method ModifyMedia modifyMedia(array $options = [])
 * @method ModifyRule modifyRule(array $options = [])
 * @method ModifySlot modifySlot(array $options = [])
 * @method ModifySlotTemplate modifySlotTemplate(array $options = [])
 * @method ModifyTenantInfo modifyTenantInfo(array $options = [])
 * @method PushDeviceStatus pushDeviceStatus(array $options = [])
 * @method PushExtraTradeDetail pushExtraTradeDetail(array $options = [])
 * @method PushFaultEvent pushFaultEvent(array $options = [])
 * @method PushTradeDetail pushTradeDetail(array $options = [])
 * @method QueryAppPromotion queryAppPromotion(array $options = [])
 * @method QueryAppTasks queryAppTasks(array $options = [])
 * @method QueryAvailableBalance queryAvailableBalance(array $options = [])
 * @method QueryChannelHistoryData queryChannelHistoryData(array $options = [])
 * @method QueryContentInfo queryContentInfo(array $options = [])
 * @method QueryContentList queryContentList(array $options = [])
 * @method QueryFlow queryFlow(array $options = [])
 * @method QueryIncomeData queryIncomeData(array $options = [])
 * @method QueryIncomeTrend queryIncomeTrend(array $options = [])
 * @method QueryIndustryLabelBag queryIndustryLabelBag(array $options = [])
 * @method QueryMedia queryMedia(array $options = [])
 * @method QueryPromotion queryPromotion(array $options = [])
 * @method QueryRule queryRule(array $options = [])
 * @method QuerySlot querySlot(array $options = [])
 * @method QuerySlotTemplate querySlotTemplate(array $options = [])
 * @method QueryTaskBizType queryTaskBizType(array $options = [])
 * @method QueryTaskRuleLimit queryTaskRuleLimit(array $options = [])
 * @method QueryTaskRules queryTaskRules(array $options = [])
 * @method QueryTenantBizConfig queryTenantBizConfig(array $options = [])
 * @method QueryTenantInfo queryTenantInfo(array $options = [])
 * @method QueryTenantUser queryTenantUser(array $options = [])
 * @method QueryTenantUserByUserId queryTenantUserByUserId(array $options = [])
 * @method QueryUnionChannel queryUnionChannel(array $options = [])
 * @method QueryUnionContentInfo queryUnionContentInfo(array $options = [])
 * @method QueryUnionPromotion queryUnionPromotion(array $options = [])
 * @method QueryUnionSumChannelData queryUnionSumChannelData(array $options = [])
 * @method QueryUnionTaskInfo queryUnionTaskInfo(array $options = [])
 * @method QueryUnionTaskList queryUnionTaskList(array $options = [])
 * @method QueryUser queryUser(array $options = [])
 * @method ReduceAmount reduceAmount(array $options = [])
 * @method RegistDevice registDevice(array $options = [])
 * @method SaveCpmTrade saveCpmTrade(array $options = [])
 * @method ScanCodeNotification scanCodeNotification(array $options = [])
 * @method SendTaokeInfo sendTaokeInfo(array $options = [])
 * @method SyncUnionOrder syncUnionOrder(array $options = [])
 * @method UpdateFlow updateFlow(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
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
    public $serviceCode = '1.0.0';
}

/**
 * @method string getMessageKey()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMediaId()
 * @method string getMediaStatus()
 * @method string getMessage()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAccessStatus()
 */
class ChangeMediaStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageKey($value)
    {
        $this->data['MessageKey'] = $value;
        $this->options['form_params']['MessageKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaId($value)
    {
        $this->data['MediaId'] = $value;
        $this->options['form_params']['MediaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaStatus($value)
    {
        $this->data['MediaStatus'] = $value;
        $this->options['form_params']['MediaStatus'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessStatus($value)
    {
        $this->data['AccessStatus'] = $value;
        $this->options['form_params']['AccessStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getMessageKey()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMessage()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAdSlotStatus()
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlotCorporateStatus()
 */
class ChangeSlotStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageKey($value)
    {
        $this->data['MessageKey'] = $value;
        $this->options['form_params']['MessageKey'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlotStatus($value)
    {
        $this->data['AdSlotStatus'] = $value;
        $this->options['form_params']['AdSlotStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlotId($value)
    {
        $this->data['AdSlotId'] = $value;
        $this->options['form_params']['AdSlotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlotCorporateStatus($value)
    {
        $this->data['AdSlotCorporateStatus'] = $value;
        $this->options['form_params']['AdSlotCorporateStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getMessageKey()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMessage()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getStatus()
 */
class ChangeTenantStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageKey($value)
    {
        $this->data['MessageKey'] = $value;
        $this->options['form_params']['MessageKey'] = $value;

        return $this;
    }

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
 * @method string getMessageKey()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMessage()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getStatus()
 */
class ChangeTenantUserStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageKey($value)
    {
        $this->data['MessageKey'] = $value;
        $this->options['form_params']['MessageKey'] = $value;

        return $this;
    }

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
}

/**
 * @method string getDeviceSn()
 * @method string getChannelId()
 */
class CheckDevice extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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

    /** @var string */
    public $scheme = 'https';

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
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CheckTenantBiz extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getSspUser()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CountUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSspUser($value)
    {
        $this->data['SspUser'] = $value;
        $this->options['form_params']['SspUser'] = $value;

        return $this;
    }
}

/**
 * @method string getCloudCodeUserId()
 * @method $this withCloudCodeUserId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 */
class CreateCalculation extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getFlow()
 */
class CreateFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlow($value)
    {
        $this->data['Flow'] = $value;
        $this->options['form_params']['Flow'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMedia()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CreateMedia extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMedia($value)
    {
        $this->data['Media'] = $value;
        $this->options['form_params']['Media'] = $value;

        return $this;
    }
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCompany()
 * @method $this withCompany($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getBrandUserNick()
 * @method $this withBrandUserNick($value)
 * @method string getContactPhone()
 * @method $this withContactPhone($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateProxyBrandUser extends Rpc
{
}

/**
 * @method string getAdRule()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CreateRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdRule($value)
    {
        $this->data['AdRule'] = $value;
        $this->options['form_params']['AdRule'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlot()
 */
class CreateSlot extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlot($value)
    {
        $this->data['AdSlot'] = $value;
        $this->options['form_params']['AdSlot'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getAdSlotTemplate()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CreatesSlotTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlotTemplate($value)
    {
        $this->data['AdSlotTemplate'] = $value;
        $this->options['form_params']['AdSlotTemplate'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getTenant()
 */
class CreateTenant extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenant($value)
    {
        $this->data['Tenant'] = $value;
        $this->options['form_params']['Tenant'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTenantUser()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CreateTenantUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantUser($value)
    {
        $this->data['TenantUser'] = $value;
        $this->options['form_params']['TenantUser'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getCustomCreativeType()
 * @method $this withCustomCreativeType($value)
 * @method string getTaskBizType()
 * @method $this withTaskBizType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBrandUserId()
 * @method $this withBrandUserId($value)
 * @method string getContentId()
 * @method $this withContentId($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBrandUserNick()
 * @method $this withBrandUserNick($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContentUrl()
 * @method $this withContentUrl($value)
 * @method string getTaskRuleType()
 * @method $this withTaskRuleType($value)
 * @method string getQuota()
 * @method $this withQuota($value)
 * @method string getIndustryLabelBagId()
 * @method $this withIndustryLabelBagId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQuotaDay()
 * @method $this withQuotaDay($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateUnionTask extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getSspUser()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class CreateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSspUser($value)
    {
        $this->data['SspUser'] = $value;
        $this->options['form_params']['SspUser'] = $value;

        return $this;
    }
}

/**
 * @method string getMessageKey()
 * @method $this withMessageKey($value)
 * @method string getAdRule()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DeleteRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdRule($value)
    {
        $this->data['AdRule'] = $value;
        $this->options['form_params']['AdRule'] = $value;

        return $this;
    }
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class EndUnionTask extends Rpc
{
}

/**
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getMainType()
 * @method $this withMainType($value)
 * @method string getParentMainId()
 * @method $this withParentMainId($value)
 * @method string getMainName()
 * @method $this withMainName($value)
 */
class GetMainPartList extends Rpc
{
}

/**
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getSign()
 * @method $this withSign($value)
 * @method string getAlipayOpenId()
 * @method $this withAlipayOpenId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class GetUnionTaskStatus extends Rpc
{
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

    /** @var string */
    public $scheme = 'https';

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
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method string getListFlow()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class ListFlow extends Rpc
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
    public function withListFlow($value)
    {
        $this->data['ListFlow'] = $value;
        $this->options['form_params']['ListFlow'] = $value;

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
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessStatus()
 * @method $this withAccessStatus($value)
 * @method string getFirstScene()
 * @method $this withFirstScene($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getMediaStatus()
 * @method $this withMediaStatus($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getSecondScene()
 * @method $this withSecondScene($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class ListMedia extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessStatus()
 * @method $this withAccessStatus($value)
 * @method string getFirstScene()
 * @method $this withFirstScene($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getMediaStatus()
 * @method $this withMediaStatus($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getSecondScene()
 * @method $this withSecondScene($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class ListMediaName extends Rpc
{
}

/**
 * @method string getAdSlotType()
 * @method $this withAdSlotType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaStatus()
 * @method $this withMediaStatus($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlotName()
 * @method $this withAdSlotName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ListRule extends Rpc
{
}

/**
 * @method string getAdSlotType()
 * @method $this withAdSlotType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaStatus()
 * @method $this withMediaStatus($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ListRuleArea extends Rpc
{
}

/**
 * @method string getAdSlotType()
 * @method $this withAdSlotType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAdSlotStatus()
 * @method $this withAdSlotStatus($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAdSlotCorporateStatus()
 * @method $this withAdSlotCorporateStatus($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlotName()
 * @method $this withAdSlotName($value)
 */
class ListSlot extends Rpc
{
}

/**
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getTenantName()
 * @method $this withTenantName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTenant extends Rpc
{
}

/**
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getTenantName()
 * @method $this withTenantName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTenantName extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method string getSspUser()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class ListUser extends Rpc
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
    public function withSspUser($value)
    {
        $this->data['SspUser'] = $value;
        $this->options['form_params']['SspUser'] = $value;

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
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMedia()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class ModifyMedia extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMedia($value)
    {
        $this->data['Media'] = $value;
        $this->options['form_params']['Media'] = $value;

        return $this;
    }
}

/**
 * @method string getAdRule()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class ModifyRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdRule($value)
    {
        $this->data['AdRule'] = $value;
        $this->options['form_params']['AdRule'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlot()
 */
class ModifySlot extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlot($value)
    {
        $this->data['AdSlot'] = $value;
        $this->options['form_params']['AdSlot'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getAdSlotTemplate()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class ModifySlotTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdSlotTemplate($value)
    {
        $this->data['AdSlotTemplate'] = $value;
        $this->options['form_params']['AdSlotTemplate'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getTenant()
 */
class ModifyTenantInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenant($value)
    {
        $this->data['Tenant'] = $value;
        $this->options['form_params']['Tenant'] = $value;

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

    /** @var string */
    public $scheme = 'https';

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

    /** @var string */
    public $scheme = 'https';

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

    /** @var string */
    public $scheme = 'https';

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

    /** @var string */
    public $scheme = 'https';

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
 * @method $this withExtra($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryAppPromotion extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryAppTasks extends Rpc
{
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryAvailableBalance extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryChannelHistoryData extends Rpc
{
}

/**
 * @method string getContentId()
 * @method $this withContentId($value)
 */
class QueryContentInfo extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskBizType()
 * @method $this withTaskBizType($value)
 * @method string getBrandUserId()
 * @method $this withBrandUserId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryContentList extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getFlowId()
 */
class QueryFlow extends Rpc
{

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
}

/**
 * @method string getAdSlotType()
 * @method $this withAdSlotType($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlotName()
 * @method $this withAdSlotName($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class QueryIncomeData extends Rpc
{
}

/**
 * @method string getAdSlotType()
 * @method $this withAdSlotType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSlot()
 * @method $this withSlot($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMediaName()
 * @method $this withMediaName($value)
 * @method string getSlotDimension()
 * @method $this withSlotDimension($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getAdSlotName()
 * @method $this withAdSlotName($value)
 */
class QueryIncomeTrend extends Rpc
{
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryIndustryLabelBag extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QueryMedia extends Rpc
{
}

/**
 * @method string getProxyChannelId()
 * @method string getExtra()
 * @method string getAlipayOpenId()
 * @method string getUserId()
 * @method string getChannelId()
 */
class QueryPromotion extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyChannelId($value)
    {
        $this->data['ProxyChannelId'] = $value;
        $this->options['form_params']['ProxyChannelId'] = $value;

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
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class QueryRule extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAdSlotId()
 * @method $this withAdSlotId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QuerySlot extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getAdSlotTemplateId()
 * @method $this withAdSlotTemplateId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QuerySlotTemplate extends Rpc
{
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryTaskBizType extends Rpc
{
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryTaskRuleLimit extends Rpc
{
}

/**
 * @method string getTaskRuleType()
 * @method $this withTaskRuleType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryTaskRules extends Rpc
{
}

/**
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 */
class QueryTenantBizConfig extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QueryTenantInfo extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QueryTenantUser extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QueryTenantUserByUserId extends Rpc
{
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryUnionChannel extends Rpc
{
}

/**
 * @method string getContentId()
 * @method $this withContentId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryUnionContentInfo extends Rpc
{
}

/**
 * @method string getUnionBizType()
 * @method $this withUnionBizType($value)
 * @method string getProxyChannelId()
 * @method $this withProxyChannelId($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getSign()
 * @method $this withSign($value)
 * @method string getAlipayOpenId()
 * @method $this withAlipayOpenId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryUnionPromotion extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryUnionSumChannelData extends Rpc
{
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryUnionTaskInfo extends Rpc
{
}

/**
 * @method string getBrandUserId()
 * @method $this withBrandUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryUnionTaskList extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getSspUser()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class QueryUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSspUser($value)
    {
        $this->data['SspUser'] = $value;
        $this->options['form_params']['SspUser'] = $value;

        return $this;
    }
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getV()
 * @method $this withV($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class ReduceAmount extends Rpc
{
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

    /** @var string */
    public $scheme = 'https';

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

    /** @var string */
    public $scheme = 'https';
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

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getProductId()
 * @method string getGender()
 * @method string getCity()
 * @method string getUserId()
 * @method string getMac()
 * @method string getProvince()
 * @method string getProductTitle()
 * @method string getBrandId()
 * @method string getSellPrice()
 * @method string getPlat()
 * @method string getComponentId()
 * @method string getAddress()
 * @method string getIp()
 * @method string getMediaId()
 * @method string getPhone()
 * @method string getV()
 * @method string getEnvironmentType()
 * @method string getDistrict()
 * @method string getImei()
 * @method string getPayPrice()
 * @method string getChannelId()
 * @method string getAge()
 * @method string getStatus()
 */
class SendTaokeInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductId($value)
    {
        $this->data['ProductId'] = $value;
        $this->options['form_params']['ProductId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

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
    public function withProductTitle($value)
    {
        $this->data['ProductTitle'] = $value;
        $this->options['form_params']['ProductTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrandId($value)
    {
        $this->data['BrandId'] = $value;
        $this->options['form_params']['BrandId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSellPrice($value)
    {
        $this->data['SellPrice'] = $value;
        $this->options['form_params']['SellPrice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlat($value)
    {
        $this->data['Plat'] = $value;
        $this->options['form_params']['Plat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentId($value)
    {
        $this->data['ComponentId'] = $value;
        $this->options['form_params']['ComponentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaId($value)
    {
        $this->data['MediaId'] = $value;
        $this->options['form_params']['MediaId'] = $value;

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
    public function withEnvironmentType($value)
    {
        $this->data['EnvironmentType'] = $value;
        $this->options['form_params']['EnvironmentType'] = $value;

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
    public function withImei($value)
    {
        $this->data['Imei'] = $value;
        $this->options['form_params']['Imei'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayPrice($value)
    {
        $this->data['PayPrice'] = $value;
        $this->options['form_params']['PayPrice'] = $value;

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
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

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
 * @method string getProxyChannelId()
 * @method $this withProxyChannelId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getRealCostAmount()
 * @method $this withRealCostAmount($value)
 * @method string getTaskBizType()
 * @method $this withTaskBizType($value)
 * @method string getSex()
 * @method $this withSex($value)
 * @method string getBrandUserId()
 * @method $this withBrandUserId($value)
 * @method string getBrandName()
 * @method $this withBrandName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getHolderId()
 * @method $this withHolderId($value)
 * @method string getBizSerialNumber()
 * @method $this withBizSerialNumber($value)
 * @method string getTaskRuleType()
 * @method $this withTaskRuleType($value)
 * @method string getV()
 * @method $this withV($value)
 * @method string getIndustryLabelBagId()
 * @method $this withIndustryLabelBagId($value)
 * @method string getApplyPrice()
 * @method $this withApplyPrice($value)
 * @method string getTradeTimeString()
 * @method $this withTradeTimeString($value)
 * @method string getExtendInfo()
 * @method $this withExtendInfo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getAge()
 * @method $this withAge($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SyncUnionOrder extends Rpc
{
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 * @method string getFlow()
 */
class UpdateFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlow($value)
    {
        $this->data['Flow'] = $value;
        $this->options['form_params']['Flow'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOriginSiteUserId()
 * @method $this withOriginSiteUserId($value)
 * @method string getSspUser()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getUserSite()
 * @method $this withUserSite($value)
 */
class UpdateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSspUser($value)
    {
        $this->data['SspUser'] = $value;
        $this->options['form_params']['SspUser'] = $value;

        return $this;
    }
}
