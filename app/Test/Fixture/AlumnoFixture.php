<?php
/**
 * AlumnoFixture
 *
 */
class AlumnoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary'),
		'num_registro' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'foto_dir' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'foto_imagen' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'carrera_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'ap_paterno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ap_materno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ci' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ci_expedido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado_civil' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'primera_lengua' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'segunda_lengua' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'lugar_nac' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'genero' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'paise_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'departamento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'provincia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'nacionalidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'territorio_origen' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'organizacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'telefono_fijo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15),
		'telefono_celular' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'colegio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion_colegio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'doc_ci' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_nac' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_titulo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_aval' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_foto' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_medico' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'doc_conducta' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'emer_nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'emer_celular' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'emer_direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'malla_curricular' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
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
			'fecha_nac' => '2013-06-05',
			'lugar_nac' => 'Lorem ipsum dolor sit amet',
			'genero' => 1,
			'paise_id' => 1,
			'departamento_id' => 1,
			'provincia_id' => 1,
			'nacionalidad' => 'Lorem ipsum dolor sit amet',
			'territorio_origen' => 'Lorem ipsum dolor sit amet',
			'organizacion_id' => 1,
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
			'usuario_id' => 1,
			'malla_curricular' => 1
		),
	);

}
