<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetPasswordPolicy
 *
 * @method string getRequireNumbers()
 * @method string getPasswordReusePrevention()
 * @method string getRequireUppercaseCharacters()
 * @method string getMaxPasswordAge()
 * @method string getMaxLoginAttemps()
 * @method string getHardExpiry()
 * @method string getMinimumPasswordLength()
 * @method string getRequireLowercaseCharacters()
 * @method string getRequireSymbols()
 */
class SetPasswordPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'SetPasswordPolicy';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withRequireNumbers() instead.
     *
     * @param string $requireNumbers
     *
     * @return $this
     */
    public function setRequireNumbers($requireNumbers)
    {
        return $this->withRequireNumbers($requireNumbers);
    }

    /**
     * @param string $requireNumbers
     *
     * @return $this
     */
    public function withRequireNumbers($requireNumbers)
    {
        $this->data['RequireNumbers'] = $requireNumbers;
        $this->options['query']['RequireNumbers'] = $requireNumbers;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPasswordReusePrevention() instead.
     *
     * @param string $passwordReusePrevention
     *
     * @return $this
     */
    public function setPasswordReusePrevention($passwordReusePrevention)
    {
        return $this->withPasswordReusePrevention($passwordReusePrevention);
    }

    /**
     * @param string $passwordReusePrevention
     *
     * @return $this
     */
    public function withPasswordReusePrevention($passwordReusePrevention)
    {
        $this->data['PasswordReusePrevention'] = $passwordReusePrevention;
        $this->options['query']['PasswordReusePrevention'] = $passwordReusePrevention;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRequireUppercaseCharacters() instead.
     *
     * @param string $requireUppercaseCharacters
     *
     * @return $this
     */
    public function setRequireUppercaseCharacters($requireUppercaseCharacters)
    {
        return $this->withRequireUppercaseCharacters($requireUppercaseCharacters);
    }

    /**
     * @param string $requireUppercaseCharacters
     *
     * @return $this
     */
    public function withRequireUppercaseCharacters($requireUppercaseCharacters)
    {
        $this->data['RequireUppercaseCharacters'] = $requireUppercaseCharacters;
        $this->options['query']['RequireUppercaseCharacters'] = $requireUppercaseCharacters;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxPasswordAge() instead.
     *
     * @param string $maxPasswordAge
     *
     * @return $this
     */
    public function setMaxPasswordAge($maxPasswordAge)
    {
        return $this->withMaxPasswordAge($maxPasswordAge);
    }

    /**
     * @param string $maxPasswordAge
     *
     * @return $this
     */
    public function withMaxPasswordAge($maxPasswordAge)
    {
        $this->data['MaxPasswordAge'] = $maxPasswordAge;
        $this->options['query']['MaxPasswordAge'] = $maxPasswordAge;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxLoginAttemps() instead.
     *
     * @param string $maxLoginAttemps
     *
     * @return $this
     */
    public function setMaxLoginAttemps($maxLoginAttemps)
    {
        return $this->withMaxLoginAttemps($maxLoginAttemps);
    }

    /**
     * @param string $maxLoginAttemps
     *
     * @return $this
     */
    public function withMaxLoginAttemps($maxLoginAttemps)
    {
        $this->data['MaxLoginAttemps'] = $maxLoginAttemps;
        $this->options['query']['MaxLoginAttemps'] = $maxLoginAttemps;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHardExpiry() instead.
     *
     * @param string $hardExpiry
     *
     * @return $this
     */
    public function setHardExpiry($hardExpiry)
    {
        return $this->withHardExpiry($hardExpiry);
    }

    /**
     * @param string $hardExpiry
     *
     * @return $this
     */
    public function withHardExpiry($hardExpiry)
    {
        $this->data['HardExpiry'] = $hardExpiry;
        $this->options['query']['HardExpiry'] = $hardExpiry;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMinimumPasswordLength() instead.
     *
     * @param string $minimumPasswordLength
     *
     * @return $this
     */
    public function setMinimumPasswordLength($minimumPasswordLength)
    {
        return $this->withMinimumPasswordLength($minimumPasswordLength);
    }

    /**
     * @param string $minimumPasswordLength
     *
     * @return $this
     */
    public function withMinimumPasswordLength($minimumPasswordLength)
    {
        $this->data['MinimumPasswordLength'] = $minimumPasswordLength;
        $this->options['query']['MinimumPasswordLength'] = $minimumPasswordLength;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRequireLowercaseCharacters() instead.
     *
     * @param string $requireLowercaseCharacters
     *
     * @return $this
     */
    public function setRequireLowercaseCharacters($requireLowercaseCharacters)
    {
        return $this->withRequireLowercaseCharacters($requireLowercaseCharacters);
    }

    /**
     * @param string $requireLowercaseCharacters
     *
     * @return $this
     */
    public function withRequireLowercaseCharacters($requireLowercaseCharacters)
    {
        $this->data['RequireLowercaseCharacters'] = $requireLowercaseCharacters;
        $this->options['query']['RequireLowercaseCharacters'] = $requireLowercaseCharacters;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRequireSymbols() instead.
     *
     * @param string $requireSymbols
     *
     * @return $this
     */
    public function setRequireSymbols($requireSymbols)
    {
        return $this->withRequireSymbols($requireSymbols);
    }

    /**
     * @param string $requireSymbols
     *
     * @return $this
     */
    public function withRequireSymbols($requireSymbols)
    {
        $this->data['RequireSymbols'] = $requireSymbols;
        $this->options['query']['RequireSymbols'] = $requireSymbols;

        return $this;
    }
}
