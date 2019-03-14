<?php

namespace AlibabaCloud\IDST\V20170922;

use AlibabaCloud\Roa;

/**
 * Api RoaSearch
 *
 * @method string getVid()
 * @method string getApp()
 * @method string getS()
 * @method string getProductId()
 * @method string getCatId()
 * @method string getN()
 * @method string getPicName()
 */
class RoaSearch extends Roa
{
    public $product = 'IDST';

    public $version = '2017-09-22';

    public $pathPattern = '/bin/sp';

    public $method = 'POST';

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
