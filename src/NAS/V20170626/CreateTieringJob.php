<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api CreateTieringJob
 *
 * @method string getVolume()
 * @method string getPath()
 * @method string getHour()
 * @method string getName()
 * @method string getWeekday()
 * @method string getType()
 * @method string getRecursive()
 * @method string getEnabled()
 * @method string getPolicy()
 */
class CreateTieringJob extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function withVolume($volume)
    {
        $this->data['Volume'] = $volume;
        $this->options['query']['Volume'] = $volume;

        return $this;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function withPath($path)
    {
        $this->data['Path'] = $path;
        $this->options['query']['Path'] = $path;

        return $this;
    }

    /**
     * @param string $hour
     *
     * @return $this
     */
    public function withHour($hour)
    {
        $this->data['Hour'] = $hour;
        $this->options['query']['Hour'] = $hour;

        return $this;
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
     * @param string $weekday
     *
     * @return $this
     */
    public function withWeekday($weekday)
    {
        $this->data['Weekday'] = $weekday;
        $this->options['query']['Weekday'] = $weekday;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $recursive
     *
     * @return $this
     */
    public function withRecursive($recursive)
    {
        $this->data['Recursive'] = $recursive;
        $this->options['query']['Recursive'] = $recursive;

        return $this;
    }

    /**
     * @param string $enabled
     *
     * @return $this
     */
    public function withEnabled($enabled)
    {
        $this->data['Enabled'] = $enabled;
        $this->options['query']['Enabled'] = $enabled;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function withPolicy($policy)
    {
        $this->data['Policy'] = $policy;
        $this->options['query']['Policy'] = $policy;

        return $this;
    }
}
