<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary'),
		'horas_asignadas' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'num_registro' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'foto_dir' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'foto_imagen' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'carrera_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'ap_paterno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ap_materno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ci' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ci_expedido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado_civil' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'primera_lengua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'segunda_lengua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_nac' => array('type' => 'date', 'null' => true, 'default' => null),
		'lugar_nac' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'genero' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'paise_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'provincia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nacionalidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'territorio_origen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'organizacione_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'telefono_fijo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15),
		'telefono_celular' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'colegio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion_colegio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'doc_ci' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_nac' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_titulo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_aval' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_foto' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_medico' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'doc_conducta' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'emer_nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'emer_celular' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15),
		'emer_direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'malla_curricular' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'especialidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_incorporacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'semestre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'horas_asignadas' => 1,
			'num_registro' => 1,
			'foto_dir' => 'Lorem ipsum dolor sit amet',
			'foto_imagen' => 'Lorem ipsum dolor sit amet',
			'carrera_id' => 1,
			'ap_paterno' => 'Lorem ipsum dolor sit amet',
			'ap_materno' => 'Lorem ipsum dolor sit amet',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'ci' => 1,
			'ci_expedido' => 'Lorem ipsum dolor sit amet',
			'estado_civil' => 'Lorem ipsum dolor sit amet',
			'primera_lengua' => 'Lorem ipsum dolor sit amet',
			'segunda_lengua' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2013-06-06',
			'lugar_nac' => 'Lorem ipsum dolor sit amet',
			'genero' => 1,
			'paise_id' => 1,
			'departamento_id' => 1,
			'provincia' => 'Lorem ipsum dolor sit amet',
			'nacionalidad' => 'Lorem ipsum dolor sit amet',
			'territorio_origen' => 'Lorem ipsum dolor sit amet',
			'organizacione_id' => 1,
			'telefono_fijo' => 1,
			'telefono_celular' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'colegio' => 'Lorem ipsum dolor sit amet',
			'direccion_colegio' => 'Lorem ipsum dolor sit amet',
			'doc_ci' => 1,
			'doc_nac' => 1,
			'doc_titulo' => 1,
			'doc_aval' => 1,
			'doc_foto' => 1,
			'doc_medico' => 1,
			'doc_conducta' => 1,
			'emer_nombre' => 'Lorem ipsum dolor sit amet',
			'emer_celular' => 1,
			'emer_direccion' => 'Lorem ipsum dolor sit amet',
			'malla_curricular' => 1,
			'especialidad' => 'Lorem ipsum dolor sit amet',
			'fecha_incorporacion' => '2013-06-06',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'group_id' => 1,
			'created' => '2013-06-06 05:37:39',
			'modified' => '2013-06-06 05:37:39',
			'semestre_id' => 1
		),
	);

}
