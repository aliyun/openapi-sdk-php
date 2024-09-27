<?php

namespace AlibabaCloud\EcsWorkbench\V20220220;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetInstanceRecordConfig getInstanceRecordConfig(array $options = [])
 * @method ListInstanceRecords listInstanceRecords(array $options = [])
 * @method ListTerminalCommands listTerminalCommands(array $options = [])
 * @method LoginInstance loginInstance(array $options = [])
 * @method SetInstanceRecordConfig setInstanceRecordConfig(array $options = [])
 * @method ViewInstanceRecords viewInstanceRecords(array $options = [])
 */
class EcsWorkbenchApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ecs-workbench';

    /** @var string */
    public $version = '2022-02-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'ecs-workbench';
}

/**
 * @method string getInstanceId()
 */
class GetInstanceRecordConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 */
class ListInstanceRecords extends Rpc
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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

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
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTerminalSessionToken()
 */
class ListTerminalCommands extends Rpc
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
    public function withTerminalSessionToken($value)
    {
        $this->data['TerminalSessionToken'] = $value;
        $this->options['form_params']['TerminalSessionToken'] = $value;

        return $this;
    }
}

/**
 * @method string getPartnerInfo()
 * @method $this withPartnerInfo($value)
 * @method string getInstanceLoginInfo()
 * @method $this withInstanceLoginInfo($value)
 * @method string getUserAccount()
 * @method $this withUserAccount($value)
 */
class LoginInstance extends Rpc
{
}

/**
 * @method string getEnabled()
 * @method string getRecordStorageTarget()
 * @method string getInstanceId()
 * @method string getExpirationDays()
 */
class SetInstanceRecordConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordStorageTarget($value)
    {
        $this->data['RecordStorageTarget'] = $value;
        $this->options['form_params']['RecordStorageTarget'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpirationDays($value)
    {
        $this->data['ExpirationDays'] = $value;
        $this->options['form_params']['ExpirationDays'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTerminalSessionToken()
 */
class ViewInstanceRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTerminalSessionToken($value)
    {
        $this->data['TerminalSessionToken'] = $value;
        $this->options['form_params']['TerminalSessionToken'] = $value;

        return $this;
    }
}
