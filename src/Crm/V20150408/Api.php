<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method AddLabelForBid addLabelForBid(array $options = [])
 * @method CheckLabelForBid checkLabelForBid(array $options = [])
 * @method DeleteLabelForBid deleteLabelForBid(array $options = [])
 * @method BatchGetAliyunIdByAliyunPk batchGetAliyunIdByAliyunPk(array $options = [])
 * @method GetAliyunPkByAliyunId getAliyunPkByAliyunId(array $options = [])
 * @method QueryBidUserCertifiedInfo queryBidUserCertifiedInfo(array $options = [])
 * @method RemoveIdentityCertifiedForBidUser removeIdentityCertifiedForBidUser(array $options = [])
 * @method AddIdentityCertifiedForBidUser addIdentityCertifiedForBidUser(array $options = [])
 * @method AddLabel addLabel(array $options = [])
 * @method CheckLabel checkLabel(array $options = [])
 * @method DeleteLabel deleteLabel(array $options = [])
 * @method QueryCustomerLabel queryCustomerLabel(array $options = [])
 */
class CrmApiResolver
{
    use ApiResolverTrait;
}

class V20150408Rpc extends Rpc
{
    /** @var string */
    public $product = 'Crm';

    /** @var string */
    public $version = '2015-04-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'crm';
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class AddLabelForBid extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class CheckLabelForBid extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class DeleteLabelForBid extends V20150408Rpc
{
}

/**
 * @method array getPkList()
 */
class BatchGetAliyunIdByAliyunPk extends V20150408Rpc
{

    /**
     * @param array $pkList
     *
     * @return $this
     */
    public function withPkList(array $pkList)
    {
        $this->data['PkList'] = $pkList;
        foreach ($pkList as $i => $iValue) {
            $this->options['query']['PkList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class GetAliyunPkByAliyunId extends V20150408Rpc
{
}

/**
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class QueryBidUserCertifiedInfo extends V20150408Rpc
{
}

/**
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class RemoveIdentityCertifiedForBidUser extends V20150408Rpc
{
}

/**
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getLicenseNumber()
 * @method $this withLicenseNumber($value)
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getIsEnterprise()
 * @method $this withIsEnterprise($value)
 */
class AddIdentityCertifiedForBidUser extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabelName()
 * @method $this withLabelName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddLabel extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabelName()
 * @method $this withLabelName($value)
 */
class CheckLabel extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabelName()
 * @method $this withLabelName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteLabel extends V20150408Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 */
class QueryCustomerLabel extends V20150408Rpc
{
}
