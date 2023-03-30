Readme (Deutsch)

Stable Diffusion Network Status Viewer
Dies ist ein PHP-Skript, das verwendet wird, um die Erreichbarkeit von Stable Diffusion (SD) Render-Farm-Nodes im Netzwerk zu überprüfen. Das Skript überprüft die Erreichbarkeit jedes Knotens anhand der IP-Adresse und des Ports und gibt den Status als grünen oder roten Kreis neben der IP-Adresse an. Wenn ein Knoten erreichbar ist, kann der Benutzer auf den Kreis klicken, um eine Verbindung zum Knoten herzustellen. Wenn ein Knoten nicht erreichbar ist, wird ein "Start Batch File" -Button angezeigt, um eine Batch-Datei auszuführen, die auf dem entsprechenden Knoten ausgeführt wird.

Voraussetzungen
Um das Skript verwenden zu können, benötigen Sie einen Webserver mit PHP-Unterstützung. Das Skript verwendet auch das ping-Kommando, um die Erreichbarkeit des Knotens zu überprüfen, daher muss dieses Kommando auf dem Server verfügbar sein.

Installation
Laden Sie die Dateien SD_Network.php, ip_status.php, style.css und start_batch.php auf Ihren Webserver herunter.
Stellen Sie sicher, dass der Webserver PHP-Unterstützung hat.
Legen Sie die IP-Adressen Ihrer SD-Render-Farm-Knoten in der Datei ip_status.php fest.
Passen Sie den Port in der ip_status.php-Datei an, falls dieser nicht standardmäßig auf 7860 festgelegt ist.
Verwendung
Rufen Sie die ip_status.php-Datei im Browser auf, um die Tabelle der SD-Render-Farm-Knoten und ihren Status anzuzeigen.

Anpassung
Sie können das Aussehen des Skripts anpassen, indem Sie die CSS-Datei bearbeiten.

License
Dieses Skript ist unter der MIT-Lizenz veröffentlicht. Eine Kopie der Lizenz finden Sie in der Datei LICENSE.

Readme (English)

Stable Diffusion Network Checker
This is a PHP script used to check the availability of Stable Diffusion (SD) Render Farm nodes on the network. The script checks the accessibility of each node based on the IP address and port and displays the status as a green or red circle next to the IP address. If a node is reachable, the user can click on the circle to connect to the node. If a node is unreachable, a "Start Batch File" button is displayed to execute a batch file on the corresponding node.

Requirements
To use the script, you need a web server with PHP support. The script also uses the ping command to check the accessibility of the node, so this command must be available on the server.

Installation
Download the files SD_Network.php, ip_status.php, style.css, and start_batch.php to your web server.
Make sure the web server has PHP support.
Set the IP addresses of your SD Render Farm nodes in the ip_status.php file.
Modify the port in the ip_status.php file if it's not set to the default of 7860.
Usage
Access the SD_Network.php file in the browser to display the table of SD Render Farm nodes and their status.

Customization
You can customize the look of the script by editing the CSS file.

License
This script is published under the MIT License. A copy of the license can be found in the LICENSE file.
