<?php
    /**
     * GIT DEPLOYMENT SCRIPT
     *
     * Used for automatically deploying websites via GitHub
     *
     */

    // array of commands
    $commands = array(
        'echo $PWD',
        'whoami',
        'git clone https://github.com/joseantonioveraisasis/test.git /home/admin/test',
        'git status',
        'git submodule sync',
        'git submodule update',
        'git submodule status',
    );

    // exec commands
    $output = '';
    foreach($commands AS $command){
        $tmp = shell_exec($command);
        
        $output .= "<span style=\"color: #32CD32;\">\$ </span><span style=\"color: #32CD32;\">{$command}</span>";
        $output .= htmlentities(trim($tmp)) . "\n<br /><br />";
    }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Git Deployment Script</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;">
<div style="width:700px">
    <div style="float:left;">
    <p style="color:white;">Git Deployment Script</p>
    <?php echo $output; ?>
    </div>
</div>
</body>
</html>