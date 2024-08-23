<?php

namespace AlibabaCloud\Governance\V20210120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchEnrollAccounts batchEnrollAccounts(array $options = [])
 * @method CreateAccountFactoryBaseline createAccountFactoryBaseline(array $options = [])
 * @method DeleteAccountFactoryBaseline deleteAccountFactoryBaseline(array $options = [])
 * @method EnrollAccount enrollAccount(array $options = [])
 * @method GetAccountFactoryBaseline getAccountFactoryBaseline(array $options = [])
 * @method GetEnrolledAccount getEnrolledAccount(array $options = [])
 * @method ListAccountFactoryBaselineItems listAccountFactoryBaselineItems(array $options = [])
 * @method ListAccountFactoryBaselines listAccountFactoryBaselines(array $options = [])
 * @method ListEnrolledAccounts listEnrolledAccounts(array $options = [])
 * @method ListEvaluationMetadata listEvaluationMetadata(array $options = [])
 * @method ListEvaluationMetricDetails listEvaluationMetricDetails(array $options = [])
 * @method ListEvaluationResults listEvaluationResults(array $options = [])
 * @method ListEvaluationScoreHistory listEvaluationScoreHistory(array $options = [])
 * @method RunEvaluation runEvaluation(array $options = [])
 * @method UpdateAccountFactoryBaseline updateAccountFactoryBaseline(array $options = [])
 */
class GovernanceApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'governance';

    /** @var string */
    public $version = '2021-01-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'governance';
}

/**
 * @method string getBaselineId()
 * @method $this withBaselineId($value)
 * @method string getBaselineItems()
 * @method $this withBaselineItems($value)
 * @method string getAccounts()
 * @method $this withAccounts($value)
 */
class BatchEnrollAccounts extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBaselineName()
 * @method $this withBaselineName($value)
 * @method string getBaselineItems()
 * @method $this withBaselineItems($value)
 */
class CreateAccountFactoryBaseline extends Rpc
{
}

/**
 * @method string getBaselineId()
 * @method $this withBaselineId($value)
 */
class DeleteAccountFactoryBaseline extends Rpc
{
}

/**
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getPayerAccountUid()
 * @method $this withPayerAccountUid($value)
 * @method string getAccountUid()
 * @method $this withAccountUid($value)
 * @method string getAccountNamePrefix()
 * @method $this withAccountNamePrefix($value)
 * @method string getResellAccountType()
 * @method $this withResellAccountType($value)
 * @method string getBaselineId()
 * @method $this withBaselineId($value)
 * @method string getBaselineItems()
 * @method $this withBaselineItems($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 */
class EnrollAccount extends Rpc
{
}

/**
 * @method string getBaselineId()
 * @method $this withBaselineId($value)
 */
class GetAccountFactoryBaseline extends Rpc
{
}

/**
 * @method string getAccountUid()
 * @method $this withAccountUid($value)
 */
class GetEnrolledAccount extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAccountFactoryBaselineItems extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAccountFactoryBaselines extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListEnrolledAccounts extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 */
class ListEvaluationMetadata extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListEvaluationMetricDetails extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 */
class ListEvaluationResults extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getShowScoreDiff()
 * @method $this withShowScoreDiff($value)
 */
class ListEvaluationScoreHistory extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 */
class RunEvaluation extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBaselineName()
 * @method $this withBaselineName($value)
 * @method string getBaselineId()
 * @method $this withBaselineId($value)
 * @method string getBaselineItems()
 * @method $this withBaselineItems($value)
 */
class UpdateAccountFactoryBaseline extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}
