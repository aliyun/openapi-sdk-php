<?php

namespace AlibabaCloud\AmpTest\V20201230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateRules createRules(array $options = [])
 * @method Huichenget huichenget(array $options = [])
 * @method Huichengetest huichengetest(array $options = [])
 * @method HuichengTestGray huichengTestGray(array $options = [])
 * @method HuichengTestGrayEight huichengTestGrayEight(array $options = [])
 * @method HuichengTestGrayFifth huichengTestGrayFifth(array $options = [])
 * @method HuichengTestGrayNine huichengTestGrayNine(array $options = [])
 * @method HuichengTestGraySecond huichengTestGraySecond(array $options = [])
 * @method HuichengTestGraySeven huichengTestGraySeven(array $options = [])
 * @method HuichengTestGraySix huichengTestGraySix(array $options = [])
 * @method HuichengTestGrayTen huichengTestGrayTen(array $options = [])
 * @method HuichengTestGrayThird huichengTestGrayThird(array $options = [])
 * @method HuichengTestResourceOwnerId huichengTestResourceOwnerId(array $options = [])
 */
class AmpTestApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'AmpTest';

    /** @var string */
    public $version = '2020-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'AmpTest';
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class CreateRules extends Rpc
{
}

/**
 * @method string getAdd()
 * @method $this withAdd($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getSix()
 * @method $this withSix($value)
 * @method string getEnight()
 * @method $this withEnight($value)
 * @method string getNewName()
 * @method $this withNewName($value)
 * @method string getList()
 * @method $this withList($value)
 * @method string getTwo()
 * @method $this withTwo($value)
 * @method string getThree()
 * @method $this withThree($value)
 * @method string getNigh()
 * @method $this withNigh($value)
 * @method string getRed()
 * @method $this withRed($value)
 * @method string getApple()
 * @method $this withApple($value)
 * @method string getTea()
 * @method $this withTea($value)
 * @method string getBlue()
 * @method $this withBlue($value)
 * @method string getWhite()
 * @method $this withWhite($value)
 * @method string getFour()
 * @method $this withFour($value)
 * @method string getNow()
 * @method $this withNow($value)
 * @method string getTen()
 * @method $this withTen($value)
 * @method string getFive()
 * @method $this withFive($value)
 */
class Huichenget extends Rpc
{
}

class Huichengetest extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGray extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGrayEight extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGrayFifth extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGrayNine extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGraySecond extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGraySeven extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGraySix extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGrayTen extends Rpc
{
}

/**
 * @method string getHome()
 * @method $this withHome($value)
 */
class HuichengTestGrayThird extends Rpc
{
}

class HuichengTestResourceOwnerId extends Rpc
{

    /** @var string */
    public $method = 'GET';
}
