<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteWhiteListDbItemConditional deleteWhiteListDbItemConditional(array $options = [])
 * @method DeleteWhiteListConditional deleteWhiteListConditional(array $options = [])
 * @method DescribeCdnCertify describeCdnCertify(array $options = [])
 * @method CreateAllEcsWhiteList createAllEcsWhiteList(array $options = [])
 * @method DescribeSpecialEcs describeSpecialEcs(array $options = [])
 * @method DescribeEcsListPage describeEcsListPage(array $options = [])
 * @method DescribeConsoleAccessWhiteList describeConsoleAccessWhiteList(array $options = [])
 * @method CreateConsoleAccessWhiteList createConsoleAccessWhiteList(array $options = [])
 * @method DeleteConsoleAccessWhiteList deleteConsoleAccessWhiteList(array $options = [])
 * @method DeleteCdnIp deleteCdnIp(array $options = [])
 * @method CreateCdnIp createCdnIp(array $options = [])
 * @method DescribeCdnIpList describeCdnIpList(array $options = [])
 * @method DeleteCdnSubscription deleteCdnSubscription(array $options = [])
 * @method CreateCdnSubscription createCdnSubscription(array $options = [])
 * @method DescribeCdnSubscription describeCdnSubscription(array $options = [])
 * @method DescribeCdnVendor describeCdnVendor(array $options = [])
 * @method DescribeAccessWhiteListSlbList describeAccessWhiteListSlbList(array $options = [])
 * @method DescribeAccessWhiteListEipList describeAccessWhiteListEipList(array $options = [])
 * @method DescribePunishList describePunishList(array $options = [])
 * @method DescribeRiskListDetail describeRiskListDetail(array $options = [])
 * @method DescribeDdosDefenseInfo describeDdosDefenseInfo(array $options = [])
 * @method DescribePhoneInfo describePhoneInfo(array $options = [])
 * @method DeleteUidWhiteListGroup deleteUidWhiteListGroup(array $options = [])
 * @method ModifyUidWhiteListAutoShare modifyUidWhiteListAutoShare(array $options = [])
 * @method CreateUidWhiteListGroup createUidWhiteListGroup(array $options = [])
 * @method DescribeUidWhiteListGroup describeUidWhiteListGroup(array $options = [])
 * @method DescribeRiskTrend describeRiskTrend(array $options = [])
 * @method ModifyAccessWhiteListAutoShare modifyAccessWhiteListAutoShare(array $options = [])
 * @method DescribeUidGcLevel describeUidGcLevel(array $options = [])
 * @method DescribeResetRecordQueryCount describeResetRecordQueryCount(array $options = [])
 * @method DescribeResetRecordList describeResetRecordList(array $options = [])
 * @method DescribeCpmcPunishList describeCpmcPunishList(array $options = [])
 * @method DescribeAccessWhiteListGroup describeAccessWhiteListGroup(array $options = [])
 * @method DescribeAccessWhitelistEcsList describeAccessWhitelistEcsList(array $options = [])
 * @method DeleteAccessWhiteListGroup deleteAccessWhiteListGroup(array $options = [])
 * @method CreateCpmcPunishFeedBack createCpmcPunishFeedBack(array $options = [])
 * @method CreateAccessWhiteListGroup createAccessWhiteListGroup(array $options = [])
 */
class JarvisApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'jarvis';

    /** @var string */
    public $version = '2018-02-06';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryProduct()
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteWhiteListDbItemConditional extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryProduct($value)
    {
        $this->data['QueryProduct'] = $value;
        $this->options['query']['queryProduct'] = $value;

        return $this;
    }
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryProduct()
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteWhiteListConditional extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryProduct($value)
    {
        $this->data['QueryProduct'] = $value;
        $this->options['query']['queryProduct'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnCertify extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateAllEcsWhiteList extends Rpc
{
}

/**
 * @method string getTargetIp()
 * @method $this withTargetIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeSpecialEcs extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeEcsListPage extends Rpc
{
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryProduct()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeConsoleAccessWhiteList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryProduct($value)
    {
        $this->data['QueryProduct'] = $value;
        $this->options['query']['queryProduct'] = $value;

        return $this;
    }
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getInstanceInfoList()
 * @method $this withInstanceInfoList($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateConsoleAccessWhiteList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDisableWhitelist()
 * @method $this withDisableWhitelist($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteConsoleAccessWhiteList extends Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCdnIp()
 * @method $this withCdnIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteCdnIp extends Rpc
{
}

/**
 * @method string getCdnIpList()
 * @method $this withCdnIpList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateCdnIp extends Rpc
{
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWlState()
 * @method $this withWlState($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnIpList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCdnUidList()
 * @method $this withCdnUidList($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteCdnSubscription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCdnUidList()
 * @method $this withCdnUidList($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateCdnSubscription extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSubscriptionState()
 * @method $this withSubscriptionState($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVendorName()
 * @method $this withVendorName($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnSubscription extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnVendor extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeAccessWhiteListSlbList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeAccessWhiteListEipList extends Rpc
{
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getPunishStatus()
 * @method $this withPunishStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method string getSourceCode()
 */
class DescribePunishList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['currentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcUid($value)
    {
        $this->data['SrcUid'] = $value;
        $this->options['query']['srcUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCode($value)
    {
        $this->data['SourceCode'] = $value;
        $this->options['query']['sourceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getRiskType()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method string getQueryProduct()
 * @method string getCurrentPage()
 * @method string getRiskDescribe()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method string getSourceCode()
 * @method string getQueryRegionId()
 * @method string getStatus()
 */
class DescribeRiskListDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRiskType($value)
    {
        $this->data['RiskType'] = $value;
        $this->options['query']['riskType'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryProduct($value)
    {
        $this->data['QueryProduct'] = $value;
        $this->options['query']['queryProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['currentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRiskDescribe($value)
    {
        $this->data['RiskDescribe'] = $value;
        $this->options['query']['riskDescribe'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcUid($value)
    {
        $this->data['SrcUid'] = $value;
        $this->options['query']['srcUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCode($value)
    {
        $this->data['SourceCode'] = $value;
        $this->options['query']['sourceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryRegionId($value)
    {
        $this->data['QueryRegionId'] = $value;
        $this->options['query']['queryRegionId'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method string getSourceCode()
 */
class DescribeDdosDefenseInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcUid($value)
    {
        $this->data['SrcUid'] = $value;
        $this->options['query']['srcUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCode($value)
    {
        $this->data['SourceCode'] = $value;
        $this->options['query']['sourceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPhoneNum()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 */
class DescribePhoneInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNum($value)
    {
        $this->data['PhoneNum'] = $value;
        $this->options['query']['phoneNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCode($value)
    {
        $this->data['SourceCode'] = $value;
        $this->options['query']['sourceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupIdList()
 * @method $this withGroupIdList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteUidWhiteListGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAutoConfig()
 * @method $this withAutoConfig($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class ModifyUidWhiteListAutoShare extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateUidWhiteListGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeUidWhiteListGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryProduct()
 * @method $this withQueryProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPeroid()
 * @method $this withPeroid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 * @method string getQueryRegionId()
 * @method $this withQueryRegionId($value)
 */
class DescribeRiskTrend extends Rpc
{
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAutoConfig()
 * @method $this withAutoConfig($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class ModifyAccessWhiteListAutoShare extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeUidGcLevel extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeResetRecordQueryCount extends Rpc
{
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeResetRecordList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['currentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method string getPunishType()
 * @method $this withPunishType($value)
 * @method string getCurrentPage()
 * @method string getPunishStatus()
 * @method $this withPunishStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCpmcPunishList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['currentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryProduct()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeAccessWhiteListGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryProduct($value)
    {
        $this->data['QueryProduct'] = $value;
        $this->options['query']['queryProduct'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeAccessWhitelistEcsList extends Rpc
{
}

/**
 * @method string getGroupIdList()
 * @method $this withGroupIdList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DeleteAccessWhiteListGroup extends Rpc
{
}

/**
 * @method string getFeedBack()
 * @method $this withFeedBack($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getProtocolName()
 * @method $this withProtocolName($value)
 * @method string getSrcPort()
 * @method $this withSrcPort($value)
 * @method string getPunishType()
 * @method $this withPunishType($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateCpmcPunishFeedBack extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getInstanceInfoList()
 * @method $this withInstanceInfoList($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateAccessWhiteListGroup extends Rpc
{
}
