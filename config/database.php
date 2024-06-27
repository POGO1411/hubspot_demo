<?php

/**
 * Configuración de bases de datos para diferentes entornos.
 * @author Brandon Daniel Parrillas Sánchez <brandon.parrillas@ambiente.gob.sv> <brandonps.dev@gmail.com>
 * @version `1.0`
 * 
 * Este archivo es utilizado en
 * root/
 *      conexion/
 *              conexion.php
 *              concection.class.php
 */

/**
 * Configuración de base de datos local
 */
$db_local = array(
  'host' => 'localhost',
  'port' => 3306,
  'user' => 'root',
  'password' => '',
  'name' => 'hubspot_wh',
  'charset' => 'utf8',
  'driver' => 'mysql'
);
/**
 * Configuración de base de datos de desarrollo
 */
$db_desarrollo = array(
  'host' => '__',
  'port' => 3306,
  'user' => 'username',
  'password' => 'secret pass',
  'name' => 'name of bd',
  'charset' => 'utf8',
  'driver' => 'mysql'
);
/**
 * Configuración de base de datos de producción
 */
$db_produccion = array(
  'host' => '*******',
  'port' => 3306,
  'user' => '*****',
  'password' => '******',
  'name' => '****',
  'charset' => 'utf8',
  'driver' => 'mysql'
);

// ⭐ Escoje la base de datos
$db = $db_local;
