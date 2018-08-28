<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class Energy extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {

        // Calorie
        $cal = UnitOfMeasure::nativeUnitFactory('cal');
        $cal->addAlias('calorie');
        static::addUnit($cal);

        // Kilojoule
        $newUnit = UnitOfMeasure::linearUnitFactory('kJ', 0,239006);
        $newUnit->addAlias('kilojoules');
        $newUnit->addAlias('kilojoule');
        static::addUnit($newUnit);

        // Kilojoule
        $newUnit = UnitOfMeasure::linearUnitFactory('kcal', 1000);
        $newUnit->addAlias('kilocalories');
        $newUnit->addAlias('kilocalorie');
        static::addUnit($newUnit);

        /*
        // Joule
        $joule = UnitOfMeasure::nativeUnitFactory('J');
        $joule->addAlias('joule');
        $joule->addAlias('joules');
        static::addUnit($joule);

        static::addMissingSIPrefixedUnits(
            $joule,
            1,
            '%pJ',
            [
                '%Pjoule',
                '%Pjoules',
            ]
        );

        // Watt hour
        $wattHour = UnitOfMeasure::linearUnitFactory('Wh', 3600);
        $wattHour->addAlias('watt hour');
        $wattHour->addAlias('watt hours');
        static::addUnit($wattHour);

        static::addMissingSIPrefixedUnits(
            $wattHour,
            1,
            '%pWh',
            [
                '%Pwatt hour',
                '%Pwatt hours',
            ]
        );
        */
    }
}
