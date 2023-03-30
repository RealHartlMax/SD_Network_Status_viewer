<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stable Diffusion Status</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once('SD_Network.php');

    $hosts = array(
        "127.0.0.1",
		"192.168.0.1",
        "192.168.0.2",
        "192.168.0.3"
    );
    ?>
    <h1>Stable Diffusion Network Status</h1>
    <table>
        <thead>
            <tr>
                <th>IP Address</th>
                <th>Status</th>
                <th>Action</th>
				<th>Render Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hosts as $host): ?>
            <tr>
                <td><?= $host ?></td>
                <td><?php echo checkHost($host, 7860) ? '<span class="online"></span> Online' : '<span class="offline"></span> Offline'; ?></td>
                <td>
                    <?php if (checkHost($host, 7860)): ?>
                    <button onclick="window.open('http://<?= $host ?>:7860', '_blank')">Open Stable Diffusion Client</button>
                    <?php else: ?>
                    <button onclick="window.location.href='start_batch.php?host=<?= $host ?>'">Start Stable Diffusion</button>
                    <?php endif; ?>
                </td>
				<td><?php echo getHostTitle($host); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<script>
        setInterval(function() {
            <?php foreach($hosts as $host): ?>
            fetch('get_title.php?host=<?= $host ?>')
                .then(response => response.text())
                .then(title => document.querySelector('#title-<?= $host ?>').textContent = title);
            <?php endforeach; ?>
        }, 1000);
    </script>
</body>
</html>
