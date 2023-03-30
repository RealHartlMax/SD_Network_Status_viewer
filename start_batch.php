
<?php
// Hier muss der Pfad zur Batch-Datei angepasst werden
$path_to_batch_file = 'E:/05_stable/stable_test/stable-diffusion-webui/webui-user.bat';

// Überprüfen, ob der Pfad zur Batch-Datei vorhanden ist
if (!file_exists($path_to_batch_file)) {
    die('Die Batch-Datei wurde nicht gefunden.');
}

// Ausführen der Batch-Datei im Hintergrund
$cmd = 'start /B "" "' . $path_to_batch_file . '"';
exec($cmd, $output, $return_value);

// Überprüfen, ob die Batch-Datei erfolgreich ausgeführt wurde
if ($return_value !== 0) {
    die('Fehler beim Ausführen der Batch-Datei: ' . implode(PHP_EOL, $output));
}

// Weiterleiten zur IP-Status-Seite
header('Location: ip_status.php');
exit();
?>
