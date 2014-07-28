<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage #!!todo: get_main_controller!!#
 */

namespace jtl\Connector\Model;

/**
 * Localized name for specific..
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage #todo: get_main_controller#
 */
class SpecificI18n extends DataModel
{
    /**
     * @type Identity Reference to specific
     */
    public $_specificId = null;

    /**
     * @type string Locale
     */
    public $_localeName = '';

    /**
     * @type string Localized name
     */
    public $_name = '';


    /**
     * @type array list of identities
     */
    public $_identities = array(
        '_specificId',
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
     * @param  string $name Localized name
     * @return \jtl\Connector\Model\SpecificI18n
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setName($name)
    {
        return $this->setProperty('_name', $name, 'string');
    }
    
    /**
     * @return string Localized name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param  Identity $specificId Reference to specific
     * @return \jtl\Connector\Model\SpecificI18n
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setSpecificId(Identity $specificId)
    {
        return $this->setProperty('_specificId', $specificId, 'Identity');
    }
    
    /**
     * @return Identity Reference to specific
     */
    public function getSpecificId()
    {
        return $this->_specificId;
    }

    /**
     * @param  string $localeName Locale
     * @return \jtl\Connector\Model\SpecificI18n
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
}

