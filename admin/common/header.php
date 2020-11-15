<?php require '../../includes/variables.php' ?>
<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi-Dash | <?= PAGE ?></title>
    <link rel="stylesheet" href="<?= ACSS ?>/midash1.css">
</head>

<body>
    <section class="midash-container">
        <div class="nav-section" id="myNav">
            <div class="nav-header">
                <label for="nav-header" class="h-phone">MiDash V1</label>
                <button class="nav-collapse-btn" name="myNav">
                    <span class="fa fa-chevron-left"></span>
                    <span class="fa fa-chevron-left fa-chevron-left2"></span>
                </button>
            </div>
            <div class="nav-data">
                <a href="" class="nav-router <?php echo (PAGE == 'Dashboard') ? 'active' : '' ?>">
                    <div class="nav-link"><span class="fa fa-tachometer-alt"></span>Dashboard</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-columns"></span>Mi-Link 1</div>
                </a>
                <a href="" class="nav-router dropdown" name='drop1'>
                    <div class="nav-link"><span class="fa fa-chart-line"></span>Mi-Link 2</div> <span class="fa fa-chevron-right"></span>
                </a>
                <div class="drop-links is-collapsed" id="drop1">
                    <a href="" class="nav-router">
                        <div class="nav-link"><span class="fa fa-house-damage"></span>Drop 1</div>
                    </a>
                    <a href="" class="nav-router">
                        <div class="nav-link"><span class="fa fa-ship"></span>Drop 2</div>
                    </a>
                </div>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-server"></span>Mi-Link 3</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-cogs"></span>Mi-Link 4</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-share-alt-square"></span>Mi-Link 5</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-house-damage"></span>Mi-Link 6</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-fingerprint"></span>Mi-Link 7</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-server"></span>Mi-Link 8</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-cogs"></span>Mi-Link 9</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-share-alt-square"></span>Mi-Link 10</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-house-damage"></span>Mi-Link 11</div>
                </a>
                <a href="" class="nav-router">
                    <div class="nav-link"><span class="fa fa-fingerprint"></span>Mi-Link 12</div>
                </a>
            </div>
        </div>


        <section class="body-widget">
            <div class="body-header">
                <div class="page-title"><span class="fa fa-tachometer-alt"></span> <?= PAGE ?></div>
                <div class="body-header-right">
                    <a href="" class="dropdown" name="myAccount"><span class="fa fa-cog"></span> Settings</a>
                    <div class="drop-links is-collapsed" id="myAccount">
                        <a href="">
                            <div class="myAccount-link"><span class="fa fa-house-damage"></span> Drop 1</div>
                        </a>
                        <a href="">
                            <div class="myAccount-link"><span class="fa fa-ship"></span> Drop 2</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="body-content">
            
            