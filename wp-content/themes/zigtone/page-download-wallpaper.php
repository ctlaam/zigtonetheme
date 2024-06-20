<?php
/* Template Name: download-wallpaper */

$file = get_attached_file($_GET['id']);

if (file_exists($file)) {
    $postId = isset($_GET['post']) ? (int) $_GET['post'] : null;

    if ($postId) {
        try {
            $downloadCount = get_field('download_count', $postId);
            $countArray = json_decode($downloadCount, true);

            if (array_key_exists($_GET['id'], $countArray)) {
                $count = (int) $countArray[$_GET['id']];
                $countArray[$_GET['id']] = $count + 1;
            } else {
                $countArray[$_GET['id']] = 1;
            }

            update_field('download_count', json_encode($countArray), $postId);
        } catch (Exception $e) {}
    }

    $filename = basename($file);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
} else {
    header('Location: ' . get_bloginfo('wpurl'));
}

exit;
?>
