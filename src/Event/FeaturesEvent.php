<?php

namespace Jtl\Connector\Core\Event;

use Jtl\Connector\Core\Model\Features;
use Symfony\Contracts\EventDispatcher\Event;

class FeaturesEvent extends Event
{
    /**
     * @var Features
     */
    protected $features;

    /**
     * CoreConnectorAfterFeaturesEvent constructor.
     *
     * @param Features $features
     */
    public function __construct(Features $features)
    {
        $this->features = $features;
    }

    /**
     * @return Features
     */
    public function getFeatures(): Features
    {
        return $this->features;
    }
}
