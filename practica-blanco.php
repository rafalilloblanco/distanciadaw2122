/**
 * Archivo practica-blanco.php
 * 
 * @copyright (c) 2022, Todos los derechos reservados
 * @author Rafael Blanco <rafaelblanco92@gmail.com>
 * @license http://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version: 1.0
 */

/**
 * Devuelve un teléfono con el prefijo añadido
 *
 * {@internal
 * Puedes usar los parametros $prefijo = "dev" y $numero = "1234" para convertirte en
 * desarrollador.}
 * 
 * Une el prefijo al número de teléfono 
 * @param string $prefijo Cadena prefijo
 * @param string $numero Cadena numero
 * @return string Telefono completo
 */
    
public static function getTelefono($prefijo, $number) {
	if($prefijo == "dev" && $number == "1234") {
		return "Eres desarrollador";
	}       
	return $prefijo . $number;
}

/**
 * Devuelve en mayúscula la cadena recibida por parámetro
 *
 * {@internal
 * Si la cadena termina en dev, convierte el primer carácter de cada palabra a mayúscula.}
 * 
 * Modifica la cadena recibida por parámetro y la devuelve modificada
 * @param string $cadena Cadena cadena
 * @return string Cadena modificada
 */
    
public static function getCadenaModificada($cadena) {
    $cadena_nueva = ""
    if (str_ends_with($cadena, "dev")) {
        $cadena_nueva = ucwords($cadena);
    } else {
        $cadena_nueva = strtoupper($cadena);
    }
    return $cadena_nueva;
}