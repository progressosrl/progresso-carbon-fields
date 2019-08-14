<?php

namespace Progresso\Carbon_Fields\Field;

use Progresso\Carbon_Fields\Exception\Incorrect_Syntax_Exception;
/**
 * Text field class.
 */
class Text_Field extends \Progresso\Carbon_Fields\Field\Field
{
    /**
     * {@inheritDoc}
     */
    protected $allowed_attributes = array('max', 'maxLength', 'min', 'pattern', 'placeholder', 'readOnly', 'step', 'type');
}
