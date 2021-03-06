<?php
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'root');
define('MYSQL_DATABASE', 'php_poo');
define('MYSQL_HOST', 'localhost');
define('MYSQL_PORT', 8889);
define('MYSQL_SOCKET', '/tmp/mysql.sock');
?>

<?php
// This assumes a fictional application with an array named $settings.
$relationships = getenv('PLATFORM_RELATIONSHIPS');
if ($relationships) {
	$relationships = json_decode(base64_decode($relationships), TRUE);

	// For a relationship named 'database' referring to one endpoint.
	if (!empty($relationships['database'])) {
		foreach ($relationships['database'] as $endpoint) {
            $settings['database_driver'] = 'pdo_' . $endpoint['scheme'];
			$settings['database_host'] = $endpoint['host'];
			$settings['database_name'] = $endpoint['path'];
			$settings['database_port'] = $endpoint['port'];
			$settings['database_user'] = $endpoint['username'];
			$settings['database_password'] = $endpoint['password'];
			break;
		}
	}
}
?>