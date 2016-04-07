<?php $o = array();

// ** THIS IS AN AUTO GENERATED FILE. DO NOT EDIT MANUALLY ** 

//==================== v1 ====================

$o['v1'] = array();

//==== v1 auth/allheaders ====

$o['v1']['auth/allheaders'] = array (
    'GET' => 
    array (
        'url' => 'auth/allheaders',
        'className' => 'Auth',
        'path' => 'auth',
        'methodName' => 'getAllHeaders',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'scope' => 
            array (
                '*' => '',
                'iAuthenticate' => 'Luracast\\Restler\\iAuthenticate',
            ),
            'resourcePath' => 'auth/',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 auth/user ====

$o['v1']['auth/user'] = array (
    'GET' => 
    array (
        'url' => 'auth/user',
        'className' => 'Auth',
        'path' => 'auth',
        'methodName' => 'user',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'scope' => 
            array (
                '*' => '',
                'iAuthenticate' => 'Luracast\\Restler\\iAuthenticate',
            ),
            'resourcePath' => 'auth/',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 auth/session ====

$o['v1']['auth/session'] = array (
    'GET' => 
    array (
        'url' => 'auth/session',
        'className' => 'Auth',
        'path' => 'auth',
        'methodName' => 'session',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'scope' => 
            array (
                '*' => '',
                'iAuthenticate' => 'Luracast\\Restler\\iAuthenticate',
            ),
            'resourcePath' => 'auth/',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 addendum ====

$o['v1']['addendum'] = array (
    'GET' => 
    array (
        'url' => 'addendum',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of addendums',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'addendum',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'description' => 1,
            'file' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a addendum',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'description',
                    'description' => 'The description of the addendum',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Description',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'file',
                    'description' => 'The file of the addendum',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'File',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 addendum/index ====

$o['v1']['addendum/index'] = array (
    'GET' => 
    array (
        'url' => 'addendum',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of addendums',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 addendum/{s0} ====

$o['v1']['addendum/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'addendum/{id}',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a addendum',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'addendum/{id}',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a addendum',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'addendum/{id}',
        'className' => 'Addendum',
        'path' => 'addendum',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'description' => 1,
            'file' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a addendum',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The description of the addendum',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'description',
                    'description' => 'The file of the addendum',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Description',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'name' => 'file',
                    'label' => 'File',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'addendum/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 config ====

$o['v1']['config'] = array (
    'GET' => 
    array (
        'url' => 'config',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
            'summary_id' => 2,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of configs',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                2 => 
                array (
                    'name' => 'summary_id',
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'config',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'name' => 1,
            'value' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a config',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'name',
                    'description' => 'The name of the config',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'value',
                    'description' => 'The value of the config',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Value',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 config/index ====

$o['v1']['config/index'] = array (
    'GET' => 
    array (
        'url' => 'config',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
            'summary_id' => 2,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of configs',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                2 => 
                array (
                    'name' => 'summary_id',
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 config/{s0} ====

$o['v1']['config/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'config/{id}',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a config',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'config/{id}',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a config',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 config/{n0} ====

$o['v1']['config/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'config/{id}',
        'className' => 'Config',
        'path' => 'config',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'name' => 1,
            'value' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a config',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'name',
                    'description' => 'The table the config is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'value',
                    'description' => 'The table the config is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Value',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'config/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 disclosure ====

$o['v1']['disclosure'] = array (
    'GET' => 
    array (
        'url' => 'disclosure',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of disclosures',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'disclosure',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a disclosure',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The body of the disclosure',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 disclosure/index ====

$o['v1']['disclosure/index'] = array (
    'GET' => 
    array (
        'url' => 'disclosure',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of disclosures',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 disclosure/{s0} ====

$o['v1']['disclosure/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'disclosure/{id}',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a disclosure',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'disclosure/{id}',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a disclosure',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'disclosure/{id}',
        'className' => 'Disclosure',
        'path' => 'disclosure',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a disclosure',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The body of the disclosure',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'body',
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'disclosure/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 executivesummary ====

$o['v1']['executivesummary'] = array (
    'GET' => 
    array (
        'url' => 'executivesummary',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of executive summary',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'executivesummary',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'summary' => 1,
            'benefits' => 2,
            'total_revenue' => 3,
            'discretionary_earnings' => 4,
            'gross_profit' => 5,
            'asking_price' => 6,
            'inventory' => 7,
            'inventory_included' => 8,
            'show_multiple' => 9,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
            6 => NULL,
            7 => NULL,
            8 => NULL,
            9 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a Executive Summary',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'summary',
                    'description' => 'The summary of the executive summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'benefits',
                    'description' => 'An array of benefits',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Benefits',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'name' => 'total_revenue',
                    'label' => 'Total_revenue',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                4 => 
                array (
                    'name' => 'discretionary_earnings',
                    'label' => 'Discretionary_earnings',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                5 => 
                array (
                    'name' => 'gross_profit',
                    'label' => 'Gross_profit',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                6 => 
                array (
                    'name' => 'asking_price',
                    'label' => 'Asking_price',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                7 => 
                array (
                    'name' => 'inventory',
                    'label' => 'Inventory',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                8 => 
                array (
                    'name' => 'inventory_included',
                    'label' => 'Inventory_included',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                9 => 
                array (
                    'name' => 'show_multiple',
                    'label' => 'Show_multiple',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 executivesummary/index ====

$o['v1']['executivesummary/index'] = array (
    'GET' => 
    array (
        'url' => 'executivesummary',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of executive summary',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 executivesummary/{s0} ====

$o['v1']['executivesummary/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'executivesummary/{id}',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a Executive Summary',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'executivesummary/{id}',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a Executive Summary',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 executivesummary/{n0} ====

$o['v1']['executivesummary/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'executivesummary/{id}',
        'className' => 'ExecutiveSummary',
        'path' => 'executivesummary',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'summary' => 1,
            'benefits' => 2,
            'total_revenue' => 3,
            'discretionary_earnings' => 4,
            'gross_profit' => 5,
            'asking_price' => 6,
            'inventory' => 7,
            'inventory_included' => 8,
            'show_multiple' => 9,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
            6 => NULL,
            7 => NULL,
            8 => NULL,
            9 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a Executive Summary',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'The id of the executive summary',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'summary',
                    'description' => 'The summuary of the executive summary',
                    'properties' => 
                    array (
                        'from' => 'body2',
                    ),
                    'label' => 'Summary',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'benefits',
                    'description' => 'Benefits',
                    'label' => 'Benefits',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                ),
                3 => 
                array (
                    'name' => 'total_revenue',
                    'label' => 'Total_revenue',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                4 => 
                array (
                    'name' => 'discretionary_earnings',
                    'label' => 'Discretionary_earnings',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                5 => 
                array (
                    'name' => 'gross_profit',
                    'label' => 'Gross_profit',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                6 => 
                array (
                    'name' => 'asking_price',
                    'label' => 'Asking_price',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                7 => 
                array (
                    'name' => 'inventory',
                    'label' => 'Inventory',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                8 => 
                array (
                    'name' => 'inventory_included',
                    'label' => 'Inventory_included',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                9 => 
                array (
                    'name' => 'show_multiple',
                    'label' => 'Show_multiple',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'executivesummary/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financial ====

$o['v1']['financial'] = array (
    'GET' => 
    array (
        'url' => 'financial',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of financials',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'financial',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a financial',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The body of the financial',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financial/index ====

$o['v1']['financial/index'] = array (
    'GET' => 
    array (
        'url' => 'financial',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of financials',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financial/{s0} ====

$o['v1']['financial/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'financial/{id}',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a financial',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'financial/{id}',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a financial',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'financial/{id}',
        'className' => 'Financial',
        'path' => 'financial',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a financial',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The body of the financial',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'body',
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 flex ====

$o['v1']['flex'] = array (
    'GET' => 
    array (
        'url' => 'flex',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of flexes',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'flex',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a flex',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The body of the flex',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 flex/index ====

$o['v1']['flex/index'] = array (
    'GET' => 
    array (
        'url' => 'flex',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of flexes',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 flex/{s0} ====

$o['v1']['flex/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'flex/{id}',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a flex',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'flex/{id}',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a flex',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 flex/{n0} ====

$o['v1']['flex/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'flex/{id}',
        'className' => 'Flex',
        'path' => 'flex',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'body' => 1,
            'summary_id' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a flex',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The table the flex is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'summary_id',
                    'description' => 'The summary_id of the associated table',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'flex/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 footnote ====

$o['v1']['footnote'] = array (
    'GET' => 
    array (
        'url' => 'footnote',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of footnotes',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'footnote',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'create',
        'arguments' => 
        array (
            'table' => 0,
            'field' => 1,
            'body' => 2,
            'associated_id' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a footnote',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'table',
                    'description' => 'The table the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Table',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'field',
                    'description' => 'The field the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Field',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The table the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'associated_id',
                    'description' => 'The id of the associated table',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Associated_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 footnote/index ====

$o['v1']['footnote/index'] = array (
    'GET' => 
    array (
        'url' => 'footnote',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of footnotes',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 footnote/{s0} ====

$o['v1']['footnote/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'footnote/{id}',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a footnote',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'footnote/{id}',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a footnote',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 footnote/{n0} ====

$o['v1']['footnote/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'footnote/{id}',
        'className' => 'Footnote',
        'path' => 'footnote',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'table' => 1,
            'field' => 2,
            'body' => 3,
            'associated_id' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a footnote',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'table',
                    'description' => 'The table the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Table',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'field',
                    'description' => 'The field the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Field',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The table the footnote is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'associated_id',
                    'description' => 'The id of the associated table',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Associated_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'footnote/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 question ====

$o['v1']['question'] = array (
    'GET' => 
    array (
        'url' => 'question',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of questions',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'question',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'question' => 1,
            'answer' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a question',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'question',
                    'description' => 'The question',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Question',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'answer',
                    'description' => 'The answer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Answer',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 question/index ====

$o['v1']['question/index'] = array (
    'GET' => 
    array (
        'url' => 'question',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of questions',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 question/{s0} ====

$o['v1']['question/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'question/{id}',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a question',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'question/{id}',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a question',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 question/{n0} ====

$o['v1']['question/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'question/{id}',
        'className' => 'Question',
        'path' => 'question',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'question' => 1,
            'answer' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a question',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'question',
                    'description' => 'The question',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Question',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'answer',
                    'description' => 'The answer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Answer',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'question/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 session/register ====

$o['v1']['session/register'] = array (
    'POST' => 
    array (
        'url' => 'session/register',
        'className' => 'Session',
        'path' => 'session',
        'methodName' => 'register',
        'arguments' => 
        array (
            'email' => 0,
            'password' => 1,
            'first_name' => 2,
            'last_name' => 3,
            'phone' => 4,
            'is_admin' => 5,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'register a new user',
            'longDescription' => '',
            'url' => 'POST /register',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'The email of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'email',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'The password of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'first_name',
                    'description' => 'The first name of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'First_name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'last_name',
                    'description' => 'The last name of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Last_name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'phone',
                    'description' => 'The phone of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Phone',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'is_admin',
                    'description' => 'User is an admin',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Is_admin',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'session/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 session/login ====

$o['v1']['session/login'] = array (
    'POST' => 
    array (
        'url' => 'session/login',
        'className' => 'Session',
        'path' => 'session',
        'methodName' => 'login',
        'arguments' => 
        array (
            'email' => 0,
            'password' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'login a user',
            'longDescription' => '',
            'url' => 'POST /login',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'The email of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'email',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'The password of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'session/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 session/user/{s0} ====

$o['v1']['session/user/{s0}'] = array (
    'POST' => 
    array (
        'url' => 'session/user/{id}',
        'className' => 'Session',
        'path' => 'session',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'email' => 1,
            'password' => 2,
            'first_name' => 3,
            'last_name' => 4,
            'phone' => 5,
            'is_admin' => 6,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
            6 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'update a user',
            'longDescription' => '',
            'url' => 'POST /user/{id}',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The email of the user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'The password of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'email',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'The first name of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'first_name',
                    'description' => 'The last name of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'First_name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'last_name',
                    'description' => 'The phone of the user',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Last_name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'phone',
                    'description' => 'User is an admin',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Phone',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'name' => 'is_admin',
                    'label' => 'Is_admin',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'int',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'session/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 session ====

$o['v1']['session'] = array (
    'DELETE' => 
    array (
        'url' => 'session',
        'className' => 'Session',
        'path' => 'session',
        'methodName' => 'sessionExpire',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'expires a session',
            'longDescription' => '',
            'url' => 'DELETE /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'session/',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 session/user ====

$o['v1']['session/user'] = array (
    'DELETE' => 
    array (
        'url' => 'session/user',
        'className' => 'Session',
        'path' => 'session',
        'methodName' => 'delete',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'deleting a user',
            'longDescription' => '',
            'url' => 'DELETE /user',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'session/',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summary ====

$o['v1']['summary'] = array (
    'GET' => 
    array (
        'url' => 'summary',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of summaries',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'summary',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'create',
        'arguments' => 
        array (
            'name' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a summary',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'name',
                    'description' => 'The name of the summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summary/index ====

$o['v1']['summary/index'] = array (
    'GET' => 
    array (
        'url' => 'summary',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of summaries',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summary/{s0} ====

$o['v1']['summary/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'summary/{id}',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a summary',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'summary/{id}',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a summary',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'summary/{id}',
        'className' => 'Summary',
        'path' => 'summary',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'name' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a summary',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The name of the summary',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'name',
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summary/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summarysection ====

$o['v1']['summarysection'] = array (
    'GET' => 
    array (
        'url' => 'summarysection',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'index',
        'arguments' => 
        array (
            'summary_id' => 0,
            'limit' => 1,
            'offset' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 5,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of summarysections',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'summary_id',
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'string',
                ),
                1 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                2 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'summarysection',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'table' => 1,
            'associated_id' => 2,
            'weight' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a summarysection',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'summary_id',
                    'description' => 'The summary for this summary section',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'table',
                    'description' => 'The table the summarysection is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Table',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'associated_id',
                    'description' => 'The weight of the summarysection',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Associated_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'weight',
                    'description' => 'The id of the associated table',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Weight',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summarysection/index ====

$o['v1']['summarysection/index'] = array (
    'GET' => 
    array (
        'url' => 'summarysection',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'index',
        'arguments' => 
        array (
            'summary_id' => 0,
            'limit' => 1,
            'offset' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 5,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of summarysections',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'summary_id',
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'string',
                ),
                1 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                2 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summarysection/{s0} ====

$o['v1']['summarysection/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'summarysection/{id}',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a summarysection',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'summarysection/{id}',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a summarysection',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 summarysection/{n0} ====

$o['v1']['summarysection/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'summarysection/{id}',
        'className' => 'SummarySection',
        'path' => 'summarysection',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'table' => 1,
            'associated_id' => 2,
            'weight' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a summarysection',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'table',
                    'description' => 'The table the summarysection is associated to',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Table',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'associated_id',
                    'description' => 'The weight the summarysection',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Associated_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'weight',
                    'description' => 'The id of the associated table',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Weight',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'summarysection/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 title ====

$o['v1']['title'] = array (
    'GET' => 
    array (
        'url' => 'title',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of title',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'title',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'name' => 1,
            'tagline' => 2,
            'asking_price' => 3,
            'advisor_id' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a title',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'name',
                    'description' => 'The name',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'tagline',
                    'description' => 'The tagline',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Tagline',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'integer',
                    'name' => 'asking_price',
                    'description' => 'Asking price',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Asking_price',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'integer',
                    'name' => 'advisor_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Advisor_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 title/index ====

$o['v1']['title/index'] = array (
    'GET' => 
    array (
        'url' => 'title',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of title',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 title/{s0} ====

$o['v1']['title/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'title/{id}',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a title',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'title/{id}',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a title',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'title/{id}',
        'className' => 'Title',
        'path' => 'title',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'name' => 1,
            'tagline' => 2,
            'asking_price' => 3,
            'advisor_id' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a title',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The name of the summary',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'name',
                    'label' => 'Name',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                2 => 
                array (
                    'name' => 'tagline',
                    'label' => 'Tagline',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                3 => 
                array (
                    'name' => 'asking_price',
                    'label' => 'Asking_price',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
                4 => 
                array (
                    'name' => 'advisor_id',
                    'label' => 'Advisor_id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'title/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 webtraffic ====

$o['v1']['webtraffic'] = array (
    'GET' => 
    array (
        'url' => 'webtraffic',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of webtraffics',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'webtraffic',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a webtraffic',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The body of the webtraffic',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 webtraffic/index ====

$o['v1']['webtraffic/index'] = array (
    'GET' => 
    array (
        'url' => 'webtraffic',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of webtraffics',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 webtraffic/{s0} ====

$o['v1']['webtraffic/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'webtraffic/{id}',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a webtraffic',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'webtraffic/{id}',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a webtraffic',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'webtraffic/{id}',
        'className' => 'WebTraffic',
        'path' => 'webtraffic',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a webtraffic',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The body of the webtraffic',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'body',
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'webtraffic/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financialV2 ====

$o['v1']['financialV2'] = array (
    'GET' => 
    array (
        'url' => 'financialv2',
        'className' => 'FinancialV2',
        'path' => 'financialV2',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of financials',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financialV2/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'POST' => 
    array (
        'url' => 'financialv2',
        'className' => 'FinancialV2',
        'path' => 'financialv2',
        'methodName' => 'create',
        'arguments' => 
        array (
            'summary_id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a financial',
            'longDescription' => '',
            'url' => 'POST /',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'integer',
                    'name' => 'summary_id',
                    'description' => 'The attached summary',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Summary_id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'body',
                    'description' => 'The body of the financialv2',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financialv2/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financialv2/index ====

$o['v1']['financialv2/index'] = array (
    'GET' => 
    array (
        'url' => 'financialv2',
        'className' => 'FinancialV2',
        'path' => 'financialv2',
        'methodName' => 'index',
        'arguments' => 
        array (
            'limit' => 0,
            'offset' => 1,
        ),
        'defaults' => 
        array (
            0 => 5,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get the full list of financials',
            'longDescription' => '',
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financialv2/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'limit',
                    'label' => 'Limit',
                    'default' => 5,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
                1 => 
                array (
                    'name' => 'offset',
                    'label' => 'Offset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'type' => 'int',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);

//==== v1 financialv2/{s0} ====

$o['v1']['financialv2/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'financialv2/{id}',
        'className' => 'FinancialV2',
        'path' => 'financialv2',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Gets a financialv2',
            'longDescription' => '',
            'url' => 'GET /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financialv2/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'DELETE' => 
    array (
        'url' => 'financialv2/{id}',
        'className' => 'FinancialV2',
        'path' => 'financialv2',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a financialV2',
            'longDescription' => '',
            'url' => 'DELETE /{id}',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financialv2/',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
    'PUT' => 
    array (
        'url' => 'financialv2/{id}',
        'className' => 'FinancialV2',
        'path' => 'financialv2',
        'methodName' => 'update',
        'arguments' => 
        array (
            'id' => 0,
            'body' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a financialv2',
            'longDescription' => '',
            'url' => 
            array (
                'description' => 'PUT /{id}',
                'properties' => 
                array (
                    'from' => 'path',
                ),
            ),
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'description' => 'The body of the financialv2',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'name' => 'body',
                    'label' => 'Body',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'type' => 'string',
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'financial/',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 3,
    ),
);


//==================== apiVersionMap ====================

$o['apiVersionMap'] = array();

//==== apiVersionMap Auth ====

$o['apiVersionMap']['Auth'] = array (                         
    1 => 'Auth',
);

//==== apiVersionMap Addendum ====

$o['apiVersionMap']['Addendum'] = array (
    1 => 'Addendum',
);

//==== apiVersionMap Config ====

$o['apiVersionMap']['Config'] = array (
    1 => 'Config',
);

//==== apiVersionMap Disclosure ====

$o['apiVersionMap']['Disclosure'] = array (
    1 => 'Disclosure',
);

//==== apiVersionMap ExecutiveSummary ====

$o['apiVersionMap']['ExecutiveSummary'] = array (
    1 => 'ExecutiveSummary',
);

//==== apiVersionMap Financial ====

$o['apiVersionMap']['Financial'] = array (
    1 => 'Financial',
);

//==== apiVersionMap Flex ====

$o['apiVersionMap']['Flex'] = array (
    1 => 'Flex',
);

//==== apiVersionMap Footnote ====

$o['apiVersionMap']['Footnote'] = array (
    1 => 'Footnote',
);

//==== apiVersionMap Question ====

$o['apiVersionMap']['Question'] = array (
    1 => 'Question',
);

//==== apiVersionMap Session ====

$o['apiVersionMap']['Session'] = array (
    1 => 'Session',
);

//==== apiVersionMap Summary ====

$o['apiVersionMap']['Summary'] = array (
    1 => 'Summary',
);

//==== apiVersionMap SummarySection ====

$o['apiVersionMap']['SummarySection'] = array (
    1 => 'SummarySection',
);

//==== apiVersionMap Title ====

$o['apiVersionMap']['Title'] = array (
    1 => 'Title',
);

//==== apiVersionMap WebTraffic ====

$o['apiVersionMap']['WebTraffic'] = array (
    1 => 'WebTraffic',
);

//==== apiVersionMap FinancialV2 ====

$o['apiVersionMap']['FinancialV2'] = array (
    1 => 'FinancialV2',
);
return $o;