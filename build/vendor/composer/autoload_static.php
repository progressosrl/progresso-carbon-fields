<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2dd4f5e15fb7291030689e0e281b6ef
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Progresso\\Progresso\\CarbonFields\\' => 33,
            'Progresso\\Carbon_Fields\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Progresso\\Progresso\\CarbonFields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Progresso\\Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Progresso\\Carbon_Fields\\Block' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Block.php',
        'Progresso\\Carbon_Fields\\Carbon_Fields' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Carbon_Fields.php',
        'Progresso\\Carbon_Fields\\Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container.php',
        'Progresso\\Carbon_Fields\\Container\\Block_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Block_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Broken_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Broken_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Comment_Meta_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Comment_Meta_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Blog_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Blog_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Boolean_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Boolean_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Any_Contain_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Any_Contain_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Any_Equality_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Any_Equality_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Contain_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Contain_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Custom_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Custom_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Equality_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Equality_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Comparer\\Scalar_Comparer' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Comparer/Scalar_Comparer.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Current_User_Capability_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Current_User_Capability_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Current_User_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Current_User_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Current_User_Role_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Current_User_Role_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Factory' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Factory.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Ancestor_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Ancestor_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Format_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Format_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Level_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Level_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Parent_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Parent_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Template_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Template_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Term_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Term_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Post_Type_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Post_Type_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Term_Ancestor_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Term_Ancestor_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Term_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Term_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Term_Level_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Term_Level_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Term_Parent_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Term_Parent_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\Term_Taxonomy_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/Term_Taxonomy_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\User_Capability_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/User_Capability_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\User_ID_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/User_ID_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Condition\\User_Role_Condition' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Condition/User_Role_Condition.php',
        'Progresso\\Carbon_Fields\\Container\\Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Container.php',
        'Progresso\\Carbon_Fields\\Container\\Fulfillable\\Fulfillable' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Fulfillable/Fulfillable.php',
        'Progresso\\Carbon_Fields\\Container\\Fulfillable\\Fulfillable_Collection' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Fulfillable/Fulfillable_Collection.php',
        'Progresso\\Carbon_Fields\\Container\\Fulfillable\\Translator\\Array_Translator' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Fulfillable/Translator/Array_Translator.php',
        'Progresso\\Carbon_Fields\\Container\\Fulfillable\\Translator\\Json_Translator' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Fulfillable/Translator/Json_Translator.php',
        'Progresso\\Carbon_Fields\\Container\\Fulfillable\\Translator\\Translator' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Fulfillable/Translator/Translator.php',
        'Progresso\\Carbon_Fields\\Container\\Nav_Menu_Item_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Nav_Menu_Item_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Network_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Network_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Post_Meta_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Post_Meta_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Repository' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Repository.php',
        'Progresso\\Carbon_Fields\\Container\\Term_Meta_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Term_Meta_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Theme_Options_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Theme_Options_Container.php',
        'Progresso\\Carbon_Fields\\Container\\User_Meta_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/User_Meta_Container.php',
        'Progresso\\Carbon_Fields\\Container\\Widget_Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Container/Widget_Container.php',
        'Progresso\\Carbon_Fields\\Datastore\\Comment_Meta_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Comment_Meta_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Datastore_Holder_Interface' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Datastore_Holder_Interface.php',
        'Progresso\\Carbon_Fields\\Datastore\\Datastore_Interface' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Datastore_Interface.php',
        'Progresso\\Carbon_Fields\\Datastore\\Empty_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Empty_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Key_Value_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Key_Value_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Meta_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Meta_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Nav_Menu_Item_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Nav_Menu_Item_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Network_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Network_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Post_Meta_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Post_Meta_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Term_Meta_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Term_Meta_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Theme_Options_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Theme_Options_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\User_Meta_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/User_Meta_Datastore.php',
        'Progresso\\Carbon_Fields\\Datastore\\Widget_Datastore' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Datastore/Widget_Datastore.php',
        'Progresso\\Carbon_Fields\\Event\\Emitter' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Event/Emitter.php',
        'Progresso\\Carbon_Fields\\Event\\Listener' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Event/Listener.php',
        'Progresso\\Carbon_Fields\\Event\\PersistentListener' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Event/PersistentListener.php',
        'Progresso\\Carbon_Fields\\Event\\SingleEventListener' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Event/SingleEventListener.php',
        'Progresso\\Carbon_Fields\\Exception\\Incorrect_Syntax_Exception' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Exception/Incorrect_Syntax_Exception.php',
        'Progresso\\Carbon_Fields\\Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field.php',
        'Progresso\\Carbon_Fields\\Field\\Association_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Association_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Broken_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Broken_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Checkbox_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Checkbox_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Color_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Color_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Complex_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Complex_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Date_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Date_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Date_Time_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Date_Time_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Field.php',
        'Progresso\\Carbon_Fields\\Field\\File_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/File_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Footer_Scripts_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Footer_Scripts_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Gravity_Form_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Gravity_Form_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Group_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Group_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Header_Scripts_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Header_Scripts_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Hidden_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Hidden_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Html_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Html_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Image_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Image_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Map_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Map_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Media_Gallery_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Media_Gallery_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Multiselect_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Multiselect_Field.php',
        'Progresso\\Carbon_Fields\\Field\\OEmbed_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Oembed_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Predefined_Options_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Predefined_Options_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Radio_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Radio_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Radio_Image_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Radio_Image_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Rich_Text_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Rich_Text_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Scripts_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Scripts_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Select_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Select_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Separator_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Separator_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Set_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Set_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Sidebar_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Sidebar_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Text_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Text_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Textarea_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Textarea_Field.php',
        'Progresso\\Carbon_Fields\\Field\\Time_Field' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Field/Time_Field.php',
        'Progresso\\Carbon_Fields\\Helper\\Color' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Helper/Color.php',
        'Progresso\\Carbon_Fields\\Helper\\Delimiter' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Helper/Delimiter.php',
        'Progresso\\Carbon_Fields\\Helper\\Helper' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Helper/Helper.php',
        'Progresso\\Carbon_Fields\\Libraries\\Sidebar_Manager\\Sidebar_Manager' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Libraries/Sidebar_Manager/Sidebar_Manager.php',
        'Progresso\\Carbon_Fields\\Loader\\Loader' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Loader/Loader.php',
        'Progresso\\Carbon_Fields\\Pimple\\Container' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Pimple/Container.php',
        'Progresso\\Carbon_Fields\\Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Pimple/ServiceProviderInterface.php',
        'Progresso\\Carbon_Fields\\Provider\\Container_Condition_Provider' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Provider/Container_Condition_Provider.php',
        'Progresso\\Carbon_Fields\\REST_API\\Decorator' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/REST_API/Decorator.php',
        'Progresso\\Carbon_Fields\\REST_API\\Router' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/REST_API/Router.php',
        'Progresso\\Carbon_Fields\\Service\\Legacy_Storage_Service_v_1_5' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Service/Legacy_Storage_Service_v_1_5.php',
        'Progresso\\Carbon_Fields\\Service\\Meta_Query_Service' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Service/Meta_Query_Service.php',
        'Progresso\\Carbon_Fields\\Service\\REST_API_Service' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Service/REST_API_Service.php',
        'Progresso\\Carbon_Fields\\Service\\Revisions_Service' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Service/Revisions_Service.php',
        'Progresso\\Carbon_Fields\\Service\\Service' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Service/Service.php',
        'Progresso\\Carbon_Fields\\Toolset\\Key_Toolset' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Toolset/Key_Toolset.php',
        'Progresso\\Carbon_Fields\\Toolset\\WP_Toolset' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Toolset/WP_Toolset.php',
        'Progresso\\Carbon_Fields\\Value_Set\\Value_Set' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Value_Set/Value_Set.php',
        'Progresso\\Carbon_Fields\\Walker\\Nav_Menu_Item_Edit_Walker' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Walker/Nav_Menu_Item_Edit_Walker.php',
        'Progresso\\Carbon_Fields\\Widget' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Widget.php',
        'Progresso\\Carbon_Fields\\Widget\\Widget' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/Widget/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2dd4f5e15fb7291030689e0e281b6ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2dd4f5e15fb7291030689e0e281b6ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2dd4f5e15fb7291030689e0e281b6ef::$classMap;

        }, null, ClassLoader::class);
    }
}