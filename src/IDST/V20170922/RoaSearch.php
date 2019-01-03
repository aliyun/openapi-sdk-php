<?php

namespace AlibabaCloud\IDST\V20170922;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of RoaSearch
 *
 * @method string getVid()
 * @method string getApp()
 * @method string getS()
 * @method string getProductId()
 * @method string getCatId()
 * @method string getN()
 * @method string getPicName()
 */
class RoaSearch extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'IDST';

    /**
     * @var string
     */
    public $version = '2017-09-22';

    /**
     * @var string
     */
    public $action = 'RoaSearch';

    /**
     * @var string
     */
    public $pathPattern = '/bin/sp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withVid() instead.
     *
     * @param string $vid
     *
     * @return $this
     */
    public function setvid($vid)
    {
        return $this->withVid($vid);
    }

    /**
     * @param string $vid
     *
     * @return $this
     */
    public function withVid($vid)
    {
        $this->data['Vid'] = $vid;
        $this->options['query']['vid'] = $vid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withApp() instead.
     *
     * @param string $app
     *
     * @return $this
     */
    public function setapp($app)
    {
        return $this->withApp($app);
    }

    /**
     * @param string $app
     *
     * @return $this
     */
    public function withApp($app)
    {
        $this->data['App'] = $app;
        $this->options['query']['app'] = $app;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withS() instead.
     *
     * @param string $s
     *
     * @return $this
     */
    public function sets($s)
    {
        return $this->withS($s);
    }

    /**
     * @param string $s
     *
     * @return $this
     */
    public function withS($s)
    {
        $this->data['S'] = $s;
        $this->options['query']['s'] = $s;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getProductId() instead.
     *
     * @return string
     */
    public function getproduct_id()
    {
        return $this->getProductId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductId() instead.
     *
     * @param string $product_id
     *
     * @return $this
     */
    public function setproduct_id($product_id)
    {
        return $this->withProductId($product_id);
    }

    /**
     * @param string $productId
     *
     * @return $this
     */
    public function withProductId($productId)
    {
        $this->data['ProductId'] = $productId;
        $this->options['query']['product_id'] = $productId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getCatId() instead.
     *
     * @return string
     */
    public function getcat_id()
    {
        return $this->getCatId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCatId() instead.
     *
     * @param string $cat_id
     *
     * @return $this
     */
    public function setcat_id($cat_id)
    {
        return $this->withCatId($cat_id);
    }

    /**
     * @param string $catId
     *
     * @return $this
     */
    public function withCatId($catId)
    {
        $this->data['CatId'] = $catId;
        $this->options['query']['cat_id'] = $catId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withN() instead.
     *
     * @param string $n
     *
     * @return $this
     */
    public function setn($n)
    {
        return $this->withN($n);
    }

    /**
     * @param string $n
     *
     * @return $this
     */
    public function withN($n)
    {
        $this->data['N'] = $n;
        $this->options['query']['n'] = $n;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPicName() instead.
     *
     * @return string
     */
    public function getpic_name()
    {
        return $this->getPicName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPicName() instead.
     *
     * @param string $pic_name
     *
     * @return $this
     */
    public function setpic_name($pic_name)
    {
        return $this->withPicName($pic_name);
    }

    /**
     * @param string $picName
     *
     * @return $this
     */
    public function withPicName($picName)
    {
        $this->data['PicName'] = $picName;
        $this->options['query']['pic_name'] = $picName;

        return $this;
    }
}
