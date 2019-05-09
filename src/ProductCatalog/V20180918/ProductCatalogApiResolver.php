<?php

namespace AlibabaCloud\ProductCatalog\V20180918;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetProduct getProduct(array $options = [])
 * @method ListProducts listProducts(array $options = [])
 * @method ListApis listApis(array $options = [])
 * @method GetApi getApi(array $options = [])
 */
class ProductCatalogApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'ProductCatalog';

    /** @var string */
    public $version = '2018-09-18';
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getLanguage()
 */
class GetProduct extends Roa
{
    /** @var string */
    public $pathPattern = '/products/v1/public/[ProductId]/';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['query']['Language'] = $value;

        return $this;
    }
}

/**
 * @method string getLimit()
 * @method string getLanguage()
 * @method string getPage()
 */
class ListProducts extends Roa
{
    /** @var string */
    public $pathPattern = '/products/v1/public/';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['query']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['query']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getLimit()
 * @method string getLanguage()
 * @method string getPage()
 */
class ListApis extends Roa
{
    /** @var string */
    public $pathPattern = '/products/v1/public/[ProductId]/versions/[VersionId]/apis/';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['query']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['query']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getReader()
 * @method string getLanguage()
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class GetApi extends Roa
{
    /** @var string */
    public $pathPattern = '/products/v1/public/[ProductId]/versions/[VersionId]/apis/[ApiId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReader($value)
    {
        $this->data['Reader'] = $value;
        $this->options['query']['Reader'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['query']['Language'] = $value;

        return $this;
    }
}
