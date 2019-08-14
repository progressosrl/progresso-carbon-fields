<?php

namespace Progresso\Carbon_Fields\Container\Fulfillable\Translator;

use Progresso\Carbon_Fields\Container\Fulfillable\Fulfillable;
use Progresso\Carbon_Fields\Container\Fulfillable\Fulfillable_Collection;
use Progresso\Carbon_Fields\Container\Condition\Condition;
use Progresso\Carbon_Fields\Exception\Incorrect_Syntax_Exception;
abstract class Translator
{
    /**
     * Translate a Fulfillable to foreign data
     *
     * @param  Fulfillable $fulfillable
     * @return mixed
     */
    public function fulfillable_to_foreign(\Progresso\Carbon_Fields\Container\Fulfillable\Fulfillable $fulfillable)
    {
        if ($fulfillable instanceof \Progresso\Carbon_Fields\Container\Condition\Condition) {
            return $this->condition_to_foreign($fulfillable);
        }
        if ($fulfillable instanceof \Progresso\Carbon_Fields\Container\Fulfillable\Fulfillable_Collection) {
            return $this->fulfillable_collection_to_foreign($fulfillable);
        }
        \Progresso\Carbon_Fields\Exception\Incorrect_Syntax_Exception::raise('Attempted to translate an unsupported object: ' . \print_r($fulfillable, \true));
        return null;
    }
    /**
     * Translate a Condition to foreign data
     *
     * @param  Condition $condition
     * @return mixed
     */
    protected abstract function condition_to_foreign(\Progresso\Carbon_Fields\Container\Condition\Condition $condition);
    /**
     * Translate a Fulfillable_Collection to foreign data
     *
     * @param  Fulfillable_Collection $fulfillable_collection
     * @return mixed
     */
    protected abstract function fulfillable_collection_to_foreign(\Progresso\Carbon_Fields\Container\Fulfillable\Fulfillable_Collection $fulfillable_collection);
    /**
     * Translate foreign data to a Fulfillable
     *
     * @param  mixed       $foreign
     * @return Fulfillable
     */
    public abstract function foreign_to_fulfillable($foreign);
}
