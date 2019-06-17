<?php

namespace AlibabaCloud\Companyreg\V20190508;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ProcessCompanyRegOrder processCompanyRegOrder(array $options = [])
 * @method SendVcode sendVcode(array $options = [])
 * @method SubmitConsultation submitConsultation(array $options = [])
 * @method ListCompanyRegOrders listCompanyRegOrders(array $options = [])
 * @method GetCompanyRegOrder getCompanyRegOrder(array $options = [])
 * @method ListCompanyRegConsultations listCompanyRegConsultations(array $options = [])
 */
class CompanyregApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'companyreg';

    /** @var string */
    public $version = '2019-05-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'companyreg';
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getActionRequestId()
 * @method $this withActionRequestId($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getActionInfo()
 * @method $this withActionInfo($value)
 */
class ProcessCompanyRegOrder extends Rpc
{
}

/**
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 */
class SendVcode extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getConsultRequestId()
 * @method $this withConsultRequestId($value)
 * @method string getVcode()
 * @method $this withVcode($value)
 */
class SubmitConsultation extends Rpc
{
}

/**
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizStatus()
 * @method $this withBizStatus($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListCompanyRegOrders extends Rpc
{
}

/**
 * @method string getActionTypes()
 * @method $this withActionTypes($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxOperationSize()
 * @method $this withMaxOperationSize($value)
 */
class GetCompanyRegOrder extends Rpc
{
}

/**
 * @method string getEndGmtCreate()
 * @method $this withEndGmtCreate($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStartGmtCreate()
 * @method $this withStartGmtCreate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListCompanyRegConsultations extends Rpc
{
}
