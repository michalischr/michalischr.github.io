<?php
// Set the URL of the remote server
$remote_url = 'https://github.com/AR-js-org/AR.js/blob/46a7b6d74da75516b353f404a08f011dc90d7908/aframe/examples/image-tracking/nft/trex/scene.gltf';

// Forward the request to the remote server and echo the response
echo file_get_contents($remote_url);
?>