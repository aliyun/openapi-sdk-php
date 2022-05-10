<?php

namespace AlibabaCloud\Companyreg\V20200306;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BindProduceAuthorization bindProduceAuthorization(array $options = [])
 * @method CloseIntentionForPartner closeIntentionForPartner(array $options = [])
 * @method CloseUserIntention closeUserIntention(array $options = [])
 * @method CreateBusinessOpportunity createBusinessOpportunity(array $options = [])
 * @method CreateProduceForPartner createProduceForPartner(array $options = [])
 * @method DescribePartnerConfig describePartnerConfig(array $options = [])
 * @method GenerateUploadFilePolicy generateUploadFilePolicy(array $options = [])
 * @method GetAlipayUrl getAlipayUrl(array $options = [])
 * @method ListIntentionNote listIntentionNote(array $options = [])
 * @method ListProduceAuthorization listProduceAuthorization(array $options = [])
 * @method ListUserDetailSolutions listUserDetailSolutions(array $options = [])
 * @method ListUserIntentionNotes listUserIntentionNotes(array $options = [])
 * @method ListUserIntentions listUserIntentions(array $options = [])
 * @method ListUserProduceOperateLogs listUserProduceOperateLogs(array $options = [])
 * @method ListUserSolutions listUserSolutions(array $options = [])
 * @method OperateProduceForPartner operateProduceForPartner(array $options = [])
 * @method PutMeasureData putMeasureData(array $options = [])
 * @method PutMeasureReadyFlag putMeasureReadyFlag(array $options = [])
 * @method QueryAvailableNumbers queryAvailableNumbers(array $options = [])
 * @method QueryBagRemaining queryBagRemaining(array $options = [])
 * @method QueryCommodityConfig queryCommodityConfig(array $options = [])
 * @method QueryInstance queryInstance(array $options = [])
 * @method QueryPartnerIntentionList queryPartnerIntentionList(array $options = [])
 * @method QueryPartnerProduceList queryPartnerProduceList(array $options = [])
 * @method QueryUserNeedAuth queryUserNeedAuth(array $options = [])
 * @method RejectSolution rejectSolution(array $options = [])
 * @method RejectUserSolution rejectUserSolution(array $options = [])
 * @method ReleaseProduceAuthorization releaseProduceAuthorization(array $options = [])
 * @method StartBackToBackCall startBackToBackCall(array $options = [])
 * @method SubmitIntentionNote submitIntentionNote(array $options = [])
 * @method SubmitSolution submitSolution(array $options = [])
 * @method TransferIntentionOwner transferIntentionOwner(array $options = [])
 * @method TransferProduceOwner transferProduceOwner(array $options = [])
 */
class CompanyregApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'companyreg';

    /** @var string */
    public $version = '2020-03-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'companyreg';
}

/**
 * @method string getBizType()
 * @method string getAuthorizedUserIds()
 * @method string getBizId()
 */
class BindProduceAuthorization extends Rpc
{

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
    public function withAuthorizedUserIds($value)
    {
        $this->data['AuthorizedUserIds'] = $value;
        $this->options['form_params']['AuthorizedUserIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 */
class CloseIntentionForPartner extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 */
class CloseUserIntention extends Rpc
{
}

/**
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getVCode()
 * @method $this withVCode($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class CreateBusinessOpportunity extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CreateProduceForPartner extends Rpc
{
}

/**
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class DescribePartnerConfig extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GenerateUploadFilePolicy extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 */
class GetAlipayUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListIntentionNote extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListProduceAuthorization extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListUserDetailSolutions extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListUserIntentionNotes extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSortFiled()
 * @method $this withSortFiled($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUserIntentions extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserProduceOperateLogs extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExistStatus()
 * @method $this withExistStatus($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListUserSolutions extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateProduceForPartner extends Rpc
{
}

/**
 * @method string getData()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getBizType()
 * @method string getDataType()
 */
class PutMeasureData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

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
    public function withDataType($value)
    {
        $this->data['DataType'] = $value;
        $this->options['form_params']['DataType'] = $value;

        return $this;
    }
}

/**
 * @method string getReadyFlag()
 * @method $this withReadyFlag($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 */
class PutMeasureReadyFlag extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class QueryAvailableNumbers extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class QueryBagRemaining extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getQueryModule()
 * @method $this withQueryModule($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 */
class QueryCommodityConfig extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class QueryInstance extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryPartnerIntentionList extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryPartnerProduceList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class QueryUserNeedAuth extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getSolutionBizId()
 * @method $this withSolutionBizId($value)
 */
class RejectSolution extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getSolutionBizId()
 * @method $this withSolutionBizId($value)
 */
class RejectUserSolution extends Rpc
{
}

/**
 * @method string getBizType()
 * @method string getAuthorizedUserId()
 * @method string getBizId()
 */
class ReleaseProduceAuthorization extends Rpc
{

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
    public function withAuthorizedUserId($value)
    {
        $this->data['AuthorizedUserId'] = $value;
        $this->options['form_params']['AuthorizedUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getCallCenterNumber()
 * @method $this withCallCenterNumber($value)
 * @method string getMobileKey()
 * @method $this withMobileKey($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getSkillType()
 * @method $this withSkillType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class StartBackToBackCall extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 */
class SubmitIntentionNote extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class SubmitSolution extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class TransferIntentionOwner extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class TransferProduceOwner extends Rpc
{
}
