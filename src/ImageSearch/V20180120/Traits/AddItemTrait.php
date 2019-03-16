<?php

namespace AlibabaCloud\ImageSearch\V20180120\Traits;

/**
 * Trait AddItemTrait
 *
 * @package AlibabaCloud\ImageSearch\V20180120\Traits
 */
trait AddItemTrait
{
    /**
     * @var string
     */
    private $itemId;

    /**
     * @var string
     */
    private $cateId;

    /**
     * @var string
     */
    private $custContent;

    /**
     * @var array
     */
    private $picMap = [];

    /**
     * @param $picName
     * @param $picContent
     *
     * @return $this
     */
    public function addPicture($picName, $picContent)
    {
        $encodePicName                = base64_encode($picName);
        $encodePicContent             = base64_encode($picContent);
        $this->picMap[$encodePicName] = $encodePicContent;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $itemId
     *
     * @return $this
     */
    public function withItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $cateId
     *
     * @return $this
     */
    public function withCateId($cateId)
    {
        $this->cateId = $cateId;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $custContent
     *
     * @return $this
     */
    public function withCustContent($custContent)
    {
        $this->custContent = $custContent;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @return bool
     */
    private function buildPostContent()
    {
        $map = [];

        if ($this->itemId === null || $this->itemId === ''
            || $this->cateId === null
            || $this->cateId === ''
            || empty($this->picMap)) {
            return false;
        }

        $map['item_id']      = $this->itemId;
        $map['cat_id']       = $this->cateId;
        $map['cust_content'] = $this->custContent;

        $picListStr = '';
        foreach ($this->picMap as $key => $value) {
            if ($key === null || $key === ''
                || $value === null
                || $value === '') {
                return false;
            }
            $picListStr .= $key . ',';
            $map[$key]  = $value;
        }

        $map['pic_list'] = substr($picListStr, 0, -1);

        $this->body($this->buildContent($map));
        $this->format('JSON');

        return true;
    }

    /**
     * @param $map
     *
     * @return string
     */
    private function buildContent($map)
    {
        $meta  = '';
        $body  = '';
        $start = 0;

        foreach ($map as $key => $value) {
            if ($meta !== '') {
                $meta .= '#';
            }
            $meta  .= $key . ',' . $start . ',' . ($start + strlen($value));
            $body  .= $value;
            $start += strlen($value);
        }

        return $meta . '^' . $body;
    }
}
