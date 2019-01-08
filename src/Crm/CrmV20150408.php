<?php

namespace AlibabaCloud\Crm;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Crm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Crm
 *
 * @method static V20150408\AddIdentityCertifiedForBidUser addIdentityCertifiedForBidUser(array $options = [])
 * @method static V20150408\AddLabel addLabel(array $options = [])
 * @method static V20150408\AddLabelForBid addLabelForBid(array $options = [])
 * @method static V20150408\BatchGetAliyunIdByAliyunPk batchGetAliyunIdByAliyunPk(array $options = [])
 * @method static V20150408\CheckLabel checkLabel(array $options = [])
 * @method static V20150408\CheckLabelForBid checkLabelForBid(array $options = [])
 * @method static V20150408\DeleteLabel deleteLabel(array $options = [])
 * @method static V20150408\DeleteLabelForBid deleteLabelForBid(array $options = [])
 * @method static V20150408\GetAliyunPkByAliyunId getAliyunPkByAliyunId(array $options = [])
 * @method static V20150408\QueryBidUserCertifiedInfo queryBidUserCertifiedInfo(array $options = [])
 * @method static V20150408\QueryCustomerLabel queryCustomerLabel(array $options = [])
 * @method static V20150408\RemoveIdentityCertifiedForBidUser removeIdentityCertifiedForBidUser(array $options = [])
 */
class CrmV20150408
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Crm\\V20150408';
}
