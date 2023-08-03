<?php

namespace AlibabaCloud\RdsData\V20220330;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchExecuteStatement batchExecuteStatement(array $options = [])
 * @method BeginTransaction beginTransaction(array $options = [])
 * @method CommitTransaction commitTransaction(array $options = [])
 * @method Delete delete(array $options = [])
 * @method ExecuteStatement executeStatement(array $options = [])
 * @method Insert insert(array $options = [])
 * @method InsertList insertList(array $options = [])
 * @method RollbackTransaction rollbackTransaction(array $options = [])
 * @method Select select(array $options = [])
 * @method Update update(array $options = [])
 */
class RdsDataApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'rds-data';

    /** @var string */
    public $version = '2022-03-30';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getParameterSets()
 * @method string getTransactionId()
 * @method string getSql()
 * @method string getDatabase()
 * @method string getResourceArn()
 * @method string getSecretArn()
 */
class BatchExecuteStatement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterSets($value)
    {
        $this->data['ParameterSets'] = $value;
        $this->options['form_params']['ParameterSets'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSql($value)
    {
        $this->data['Sql'] = $value;
        $this->options['form_params']['Sql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getDatabase()
 * @method string getResourceArn()
 * @method string getSecretArn()
 */
class BeginTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getResourceArn()
 * @method string getSecretArn()
 */
class CommitTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getFilter()
 * @method string getDatabase()
 * @method string getResourceArn()
 * @method string getTable()
 * @method string getSecretArn()
 */
class Delete extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['form_params']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getIncludeResultMetadata()
 * @method string getFormatRecordsAs()
 * @method string getTransactionId()
 * @method string getSql()
 * @method string getResultSetOptions()
 * @method string getDatabase()
 * @method string getResourceArn()
 * @method string getParameters()
 * @method string getContinueAfterTimeout()
 * @method string getSecretArn()
 */
class ExecuteStatement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeResultMetadata($value)
    {
        $this->data['IncludeResultMetadata'] = $value;
        $this->options['form_params']['IncludeResultMetadata'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatRecordsAs($value)
    {
        $this->data['FormatRecordsAs'] = $value;
        $this->options['form_params']['FormatRecordsAs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSql($value)
    {
        $this->data['Sql'] = $value;
        $this->options['form_params']['Sql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultSetOptions($value)
    {
        $this->data['ResultSetOptions'] = $value;
        $this->options['form_params']['ResultSetOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContinueAfterTimeout($value)
    {
        $this->data['ContinueAfterTimeout'] = $value;
        $this->options['form_params']['ContinueAfterTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getDatabase()
 * @method string getRecord()
 * @method string getResourceArn()
 * @method string getTable()
 * @method string getSecretArn()
 */
class Insert extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecord($value)
    {
        $this->data['Record'] = $value;
        $this->options['form_params']['Record'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getRecords()
 * @method string getTransactionId()
 * @method string getDatabase()
 * @method string getResourceArn()
 * @method string getTable()
 * @method string getSecretArn()
 */
class InsertList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecords($value)
    {
        $this->data['Records'] = $value;
        $this->options['form_params']['Records'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getResourceArn()
 * @method string getSecretArn()
 */
class RollbackTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getPageNumber()
 * @method string getFilter()
 * @method string getDatabase()
 * @method string getPageSize()
 * @method string getResourceArn()
 * @method string getTable()
 * @method string getSecretArn()
 */
class Select extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

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
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['form_params']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}

/**
 * @method string getTransactionId()
 * @method string getFilter()
 * @method string getDatabase()
 * @method string getRecord()
 * @method string getResourceArn()
 * @method string getTable()
 * @method string getSecretArn()
 */
class Update extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['form_params']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['form_params']['Database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecord($value)
    {
        $this->data['Record'] = $value;
        $this->options['form_params']['Record'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceArn($value)
    {
        $this->data['ResourceArn'] = $value;
        $this->options['form_params']['ResourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecretArn($value)
    {
        $this->data['SecretArn'] = $value;
        $this->options['form_params']['SecretArn'] = $value;

        return $this;
    }
}
