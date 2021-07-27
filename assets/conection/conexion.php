<?php
class Conexion
{

	public static function Conectar()
	{
		$conn = mysqli_connect("localhost", "root", "", "imake");

		if (!$conn) {
			die("No hay conexión: " . mysqli_connect_error());
		}
	}
	public function get_connection()
	{
		return $this->conn;
	}
}
function ejecutarConsulta($sql)
{
	global $conn;
	$query = $conn->query($sql);
	return $query;
}
function limpiarCadena($str)
{
	global $conn;
	$str = mysqli_real_escape_string($conn, trim($str));
	return htmlspecialchars($str);
}
?>
