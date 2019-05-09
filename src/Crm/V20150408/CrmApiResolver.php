<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteLabelForBid deleteLabelForBid(array $options = [])
 * @method CheckLabelForBid checkLabelForBid(array $options = [])
 * @method AddLabelForBid addLabelForBid(array $options = [])
 * @method GetAliyunPkByAliyunId getAliyunPkByAliyunId(array $options = [])
 * @method BatchGetAliyunIdByAliyunPk batchGetAliyunIdByAliyunPk(array $options = [])
 * @method RemoveIdentityCertifiedForBidUser removeIdentityCertifiedForBidUser(array $options = [])
 * @method QueryBidUserCertifiedInfo queryBidUserCertifiedInfo(array $options = [])
 * @method AddIdentityCertifiedForBidUser addIdentityCertifiedForBidUser(array $options = [])
 * @method DeleteLabel deleteLabel(array $options = [])
 * @method CheckLabel checkLabel(array $options = [])
 * @method AddLabel addLabel(array $options = [])
 * @method QueryCustomerLabel queryCustomerLabel(array $options = [])
 */
class CrmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class DeleteLabelForBid extends Rpc
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
class CheckLabelForBid extends Rpc
{
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
class AddLabelForBid extends Rpc
{
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class GetAliyunPkByAliyunId extends Rpc
{
}

/**
 * @method array getPkList()
 */
class BatchGetAliyunIdByAliyunPk extends Rpc
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
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class RemoveIdentityCertifiedForBidUser extends Rpc
{
}

/**
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class QueryBidUserCertifiedInfo extends Rpc
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
class AddIdentityCertifiedForBidUser extends Rpc
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
class DeleteLabel extends Rpc
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
class CheckLabel extends Rpc
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
class AddLabel extends Rpc
{
}

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 */
class QueryCustomerLabel extends Rpc
{
}
