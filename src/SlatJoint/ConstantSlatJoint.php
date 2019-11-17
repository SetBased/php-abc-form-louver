<?php
declare(strict_types=1);

namespace Plaisio\Form\SlatJoint;

use Plaisio\Form\Control\ConstantControl;
use Plaisio\Form\Control\Control;

/**
 * Slat joint for table columns witch table cells with a constant form controls.
 */
class ConstantSlatJoint extends SlatJoint
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   */
  public function __construct()
  {
    parent::__construct('none', null);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates and returns a constant form control.
   *
   * @param string $name The local name of the constant form control.
   *
   * @return Control
   */
  public function createControl(string $name): Control
  {
    return new ConstantControl($name);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * A constant control must never be shown in a table. Hence it spans 0 columns.
   *
   * @return int Always 0
   */
  public function getColSpan(): int
  {
    return 0;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * A constant control must never be shown in a table. Hence it it has no column.
   *
   * @return string Always empty.
   */
  public function getHtmlColumn(): string
  {
    return '';
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * A constant control must never be shown in a table. Hence filter must never be shown too.
   *
   * @return string Empty string
   */
  public function getHtmlColumnFilter(): string
  {
    return '';
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * A constant control must never be shown in a table. Hence header must never be shown too.
   *
   * @return string Empty string
   */
  public function getHtmlColumnHeader(): string
  {
    return '';
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
