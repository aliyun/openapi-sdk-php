<?php

namespace AlibabaCloud\Jarvis;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Jarvis based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Jarvis
 *
 * @method static V20180206\CreateAccessWhiteListGroup createAccessWhiteListGroup(array $options = [])
 * @method static V20180206\CreateCdnSubscription createCdnSubscription(array $options = [])
 * @method static V20180206\CreateCpmcPunishFeedBack createCpmcPunishFeedBack(array $options = [])
 * @method static V20180206\CreateUidWhiteListGroup createUidWhiteListGroup(array $options = [])
 * @method static V20180206\DeleteAccessWhiteListGroup deleteAccessWhiteListGroup(array $options = [])
 * @method static V20180206\DeleteCdnSubscription deleteCdnSubscription(array $options = [])
 * @method static V20180206\DeleteUidWhiteListGroup deleteUidWhiteListGroup(array $options = [])
 * @method static V20180206\DescribeAccessWhiteListEipList describeAccessWhiteListEipList(array $options = [])
 * @method static V20180206\DescribeAccessWhiteListGroup describeAccessWhiteListGroup(array $options = [])
 * @method static V20180206\DescribeAccessWhiteListSlbList describeAccessWhiteListSlbList(array $options = [])
 * @method static V20180206\DescribeAccessWhitelistEcsList describeAccessWhitelistEcsList(array $options = [])
 * @method static V20180206\DescribeCdnSubscription describeCdnSubscription(array $options = [])
 * @method static V20180206\DescribeCdnVendor describeCdnVendor(array $options = [])
 * @method static V20180206\DescribeCpmcPunishList describeCpmcPunishList(array $options = [])
 * @method static V20180206\DescribeDdosDefenseInfo describeDdosDefenseInfo(array $options = [])
 * @method static V20180206\DescribePhoneInfo describePhoneInfo(array $options = [])
 * @method static V20180206\DescribePunishList describePunishList(array $options = [])
 * @method static V20180206\DescribeResetRecordList describeResetRecordList(array $options = [])
 * @method static V20180206\DescribeResetRecordQueryCount describeResetRecordQueryCount(array $options = [])
 * @method static V20180206\DescribeRiskListDetail describeRiskListDetail(array $options = [])
 * @method static V20180206\DescribeRiskTrend describeRiskTrend(array $options = [])
 * @method static V20180206\DescribeUidGcLevel describeUidGcLevel(array $options = [])
 * @method static V20180206\DescribeUidWhiteListGroup describeUidWhiteListGroup(array $options = [])
 * @method static V20180206\ModifyAccessWhiteListAutoShare modifyAccessWhiteListAutoShare(array $options = [])
 * @method static V20180206\ModifyUidWhiteListAutoShare modifyUidWhiteListAutoShare(array $options = [])
 */
class JarvisV20180206
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Jarvis\\V20180206';
}
