<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateStore
 *
 * @method string getCompanyId()
 * @method string getComments()
 * @method string getPhone()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getOutId()
 * @method string getBrand()
 * @method string getParentId()
 */
class CreateStore extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'CreateStore';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCompanyId() instead.
     *
     * @param string $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        return $this->withCompanyId($companyId);
    }

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function withCompanyId($companyId)
    {
        $this->data['CompanyId'] = $companyId;
        $this->options['query']['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withComments() instead.
     *
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        return $this->withComments($comments);
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function withComments($comments)
    {
        $this->data['Comments'] = $comments;
        $this->options['query']['Comments'] = $comments;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhone() instead.
     *
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        return $this->withPhone($phone);
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroups() instead.
     *
     * @param string $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        return $this->withGroups($groups);
    }

    /**
     * @param string $groups
     *
     * @return $this
     */
    public function withGroups($groups)
    {
        $this->data['Groups'] = $groups;
        $this->options['query']['Groups'] = $groups;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOutId() instead.
     *
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        return $this->withOutId($outId);
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function withOutId($outId)
    {
        $this->data['OutId'] = $outId;
        $this->options['query']['OutId'] = $outId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBrand() instead.
     *
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        return $this->withBrand($brand);
    }

    /**
     * @param string $brand
     *
     * @return $this
     */
    public function withBrand($brand)
    {
        $this->data['Brand'] = $brand;
        $this->options['query']['Brand'] = $brand;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withParentId() instead.
     *
     * @param string $parentId
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        return $this->withParentId($parentId);
    }

    /**
     * @param string $parentId
     *
     * @return $this
     */
    public function withParentId($parentId)
    {
        $this->data['ParentId'] = $parentId;
        $this->options['query']['ParentId'] = $parentId;

        return $this;
    }
}
