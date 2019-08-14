<?php

namespace Progresso\Carbon_Fields\Datastore;

use Progresso\Carbon_Fields\Field\Field;
/**
 * Empty datastore class.
 */
class Empty_Datastore extends \Progresso\Carbon_Fields\Datastore\Datastore
{
    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function load(\Progresso\Carbon_Fields\Field\Field $field)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function save(\Progresso\Carbon_Fields\Field\Field $field)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function delete(\Progresso\Carbon_Fields\Field\Field $field)
    {
    }
}
