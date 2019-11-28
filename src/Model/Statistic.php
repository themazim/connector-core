<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package Jtl\Connector\Core\Model
 * @subpackage Internal
 */

namespace Jtl\Connector\Core\Model;

use InvalidArgumentException;
use stdClass;
use JMS\Serializer\Annotation as Serializer;

/**
 * Statistic Model
 *
 * @access public
 * @package Jtl\Connector\Core\Model
 * @subpackage Internal
 */
class Statistic extends AbstractDataModel
{
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("available")
     * @Serializer\Accessor(getter="getAvailable",setter="setAvailable")
     */
    protected $available = 0;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("controllerName")
     * @Serializer\Accessor(getter="getControllerName",setter="setControllerName")
     */
    protected $controllerName = '';

    /**
     * @return integer
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    
    /**
     * @param integer $available
     * @return Statistic
     * @throws InvalidArgumentException if the provided argument is not of type 'integer'.
     */
    public function setAvailable(int $available): Statistic
    {
        $this->available = $available;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }
    
    /**
     * @param string $controllerName
     * @return Statistic
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setControllerName(string $controllerName): Statistic
    {
        $this->controllerName = $controllerName;
        return $this;
    }
}
