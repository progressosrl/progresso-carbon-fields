<?php

namespace Progresso\Carbon_Fields\Datastore;

use Progresso\Carbon_Fields\Field\Field;
/**
 * Post meta (custom fields) datastore class.
 */
class Post_Meta_Datastore extends \Progresso\Carbon_Fields\Datastore\Meta_Datastore
{
    /**
     * Retrieve the type of meta data.
     *
     * @return string
     */
    public function get_meta_type()
    {
        return 'post';
    }
    /**
     * Retrieve the meta table name to query.
     *
     * @return string
     */
    public function get_table_name()
    {
        global $wpdb;
        return $wpdb->postmeta;
    }
    /**
     * Retrieve the meta table field name to query by.
     *
     * @return string
     */
    public function get_table_field_name()
    {
        return 'post_id';
    }
}
