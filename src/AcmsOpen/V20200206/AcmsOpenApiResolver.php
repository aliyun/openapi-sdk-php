<?php

namespace AlibabaCloud\AcmsOpen\V20200206;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateConfiguration createConfiguration(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method DeleteConfiguration deleteConfiguration(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeployConfiguration deployConfiguration(array $options = [])
 * @method DescribeConfiguration describeConfiguration(array $options = [])
 * @method DescribeNamespace describeNamespace(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 */
class AcmsOpenApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'acms-open';

    /** @var string */
    public $version = '2020-02-06';

    /** @var string */
    public $method = 'DELETE';

    /** @var string */
    public $serviceCode = 'acms';
}

/**
 * @method string getDataId()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getType()
 * @method string getContent()
 * @method string getGroup()
 * @method string getDesc()
 * @method string getTags()
 */
class CreateConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/configuration';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['form_params']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['form_params']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class CreateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/namespace';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getNamespaceId()
 * @method string getGroup()
 */
class DeleteConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/configuration';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class DeleteNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/namespace';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getType()
 * @method string getContent()
 * @method string getGroup()
 * @method string getDesc()
 * @method string getTags()
 */
class DeployConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/configuration';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['form_params']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['form_params']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getNamespaceId()
 * @method string getGroup()
 */
class DescribeConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/configuration';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class DescribeNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/namespace';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceName()
 * @method string getNamespaceId()
 */
class UpdateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/diamond-ops/pop/namespace';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceName($value)
    {
        $this->data['NamespaceName'] = $value;
        $this->options['form_params']['NamespaceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['form_params']['NamespaceId'] = $value;

        return $this;
    }
}
