<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage #!!todo: get_main_controller!!#
 */

namespace jtl\Connector\Model;

/**
 * Global language model.
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage #todo: get_main_controller#
 */
class Language extends DataModel
{
    /**
     * @type Identity Unique language id
     */
    public $_id = null;

    /**
     * @type boolean Flag default language for frontend. Exact 1 language must be marked as default.
     */
    public $_isDefault = false;

    /**
     * @type string Locale
     */
    public $_localeName = '';

    /**
     * @type string English term
     */
    public $_nameEnglish = '';

    /**
     * @type string German term
     */
    public $_nameGerman = '';


    /**
     * @type array list of identities
     */
    public $_identities = array(
        '_id',
    );

    /**
     * @type array list of navigations
     */
    public $_navigations = array(
    );

    /**
     * @return array 
     */
    public function getIdentities()
    {
        return $this->_identities;
    }

    /**
     * @return array 
     */
    public function getNavigations()
    {
        return $this->_navigations;
    }

    /**
     * @todo: Move to BasisModel
     */
    protected function setProperty($name, $value, $type)
    {
        if (!$this->validateType($value, $type)) {
            throw new InvalidArgumentException(sprintf("expected type %s, given value %s.", $type, gettype($value)));
        }
        $this->{$name} = $value;
        return $this;
    }

    /**
     * @todo: Move to BasisModel
     */
    protected function validateType($value, $type)
    {
        switch ($type)
        {
            case 'boolean':
                return is_bool($value);
            case 'integer':
                return is_integer($value);
            case 'float':
                return is_float($value);
            case 'string':
                return is_string($value);
            case 'array':
                return is_array($value);
            default:
                throw new InvalidArgumentException('type validator not found');
        }
    }

    /**
     * @param  string $nameEnglish English term
     * @return \jtl\Connector\Model\Language
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setNameEnglish($nameEnglish)
    {
        return $this->setProperty('_nameEnglish', $nameEnglish, 'string');
    }
    
    /**
     * @return string English term
     */
    public function getNameEnglish()
    {
        return $this->_nameEnglish;
    }

    /**
     * @param  string $nameGerman German term
     * @return \jtl\Connector\Model\Language
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setNameGerman($nameGerman)
    {
        return $this->setProperty('_nameGerman', $nameGerman, 'string');
    }
    
    /**
     * @return string German term
     */
    public function getNameGerman()
    {
        return $this->_nameGerman;
    }

    /**
     * @param  string $localeName Locale
     * @return \jtl\Connector\Model\Language
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setLocaleName($localeName)
    {
        return $this->setProperty('_localeName', $localeName, 'string');
    }
    
    /**
     * @return string Locale
     */
    public function getLocaleName()
    {
        return $this->_localeName;
    }

    /**
     * @param  Identity $id Unique language id
     * @return \jtl\Connector\Model\Language
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('_id', $id, 'Identity');
    }
    
    /**
     * @return Identity Unique language id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param  boolean $isDefault Flag default language for frontend. Exact 1 language must be marked as default.
     * @return \jtl\Connector\Model\Language
     * @throws InvalidArgumentException if the provided argument is not of type 'boolean'.
     */
    public function setIsDefault($isDefault)
    {
        return $this->setProperty('_isDefault', $isDefault, 'boolean');
    }
    
    /**
     * @return boolean Flag default language for frontend. Exact 1 language must be marked as default.
     */
    public function getIsDefault()
    {
        return $this->_isDefault;
    }
}

