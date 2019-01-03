<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateKeywordLib
 *
 * @method string getSourceIp()
 * @method string getLibType()
 * @method string getName()
 * @method string getBizTypes()
 * @method string getServiceModule()
 * @method string getLang()
 * @method string getCategory()
 * @method string getResourceType()
 */
class CreateKeywordLib extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'CreateKeywordLib';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLibType() instead.
     *
     * @param string $libType
     *
     * @return $this
     */
    public function setLibType($libType)
    {
        return $this->withLibType($libType);
    }

    /**
     * @param string $libType
     *
     * @return $this
     */
    public function withLibType($libType)
    {
        $this->data['LibType'] = $libType;
        $this->options['query']['LibType'] = $libType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizTypes() instead.
     *
     * @param string $bizTypes
     *
     * @return $this
     */
    public function setBizTypes($bizTypes)
    {
        return $this->withBizTypes($bizTypes);
    }

    /**
     * @param string $bizTypes
     *
     * @return $this
     */
    public function withBizTypes($bizTypes)
    {
        $this->data['BizTypes'] = $bizTypes;
        $this->options['query']['BizTypes'] = $bizTypes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServiceModule() instead.
     *
     * @param string $serviceModule
     *
     * @return $this
     */
    public function setServiceModule($serviceModule)
    {
        return $this->withServiceModule($serviceModule);
    }

    /**
     * @param string $serviceModule
     *
     * @return $this
     */
    public function withServiceModule($serviceModule)
    {
        $this->data['ServiceModule'] = $serviceModule;
        $this->options['query']['ServiceModule'] = $serviceModule;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCategory() instead.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        return $this->withCategory($category);
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }
}
