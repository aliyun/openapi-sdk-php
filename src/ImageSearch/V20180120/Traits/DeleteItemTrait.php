<?php

namespace AlibabaCloud\ImageSearch\V20180120\Traits;

/**
 * Trait DeleteItemTrait
 *
 * @package AlibabaCloud\ImageSearch\V20180120\Traits
 */
trait DeleteItemTrait
{
    /**
     * @var string
     */
    private $itemId;

    /**
     * @var array
     */
    private $picList = [];

    /**
     * @param $deletePictureName
     *
     * @return $this
     */
    public function addPicture($deletePictureName)
    {
        $this->picList[] = $deletePictureName;
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
     * @return bool
     */
    private function buildPostContent()
    {
        if ($this->itemId === null || $this->itemId === '') {
            return false;
        }

        $map            = [];
        $map['item_id'] = $this->itemId;

        $picListStr = '';
        foreach ($this->picList as $key => $value) {
            if ($picListStr !== null && $picListStr !== '') {
                $picListStr .= ',';
            }
            $picListStr .= base64_encode($value);
        }
        $map['pic_list'] = $picListStr;

        $content = $this->buildContent($map);

        $this->body($content);
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
