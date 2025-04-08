<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => true,
    'autoinc' => true,
  ),
  'aid' => 
  array (
    'name' => 'aid',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'content' => 
  array (
    'name' => 'content',
    'type' => 'longtext',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'content_ey_m' => 
  array (
    'name' => 'content_ey_m',
    'type' => 'longtext',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'add_time' => 
  array (
    'name' => 'add_time',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'update_time' => 
  array (
    'name' => 'update_time',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'quanguochufa' => 
  array (
    'name' => 'quanguochufa',
    'type' => 'enum(\'广州出发\',\'昆明出发\',\'厦门出发\',\'上海出发\')',
    'notnull' => false,
    'default' => '广州出发',
    'primary' => false,
    'autoinc' => false,
  ),
  'anzhutifen' => 
  array (
    'name' => 'anzhutifen',
    'type' => 'enum(\'特价游\',\'全景游\',\'包团游\',\'品质游\')',
    'notnull' => false,
    'default' => '特价游',
    'primary' => false,
    'autoinc' => false,
  ),
  'xingchengtianshu' => 
  array (
    'name' => 'xingchengtianshu',
    'type' => 'enum(\'1天\',\'2天\',\'3天\',\'4天\',\'5天以上\')',
    'notnull' => false,
    'default' => '1天',
    'primary' => false,
    'autoinc' => false,
  ),
);