<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium</title>
        <?PHP HTML::importSection('header'); ?>
    </head>

    <body>
        <div id="wrapper">
            <?PHP HTML::importSection('navbar'); ?>
            <?PHP HTML::importSection('sidebar'); ?>
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">
                        <h3 class="page-title">Netlenium</h3>
                        <h4 class="page-title">
                            Write software that can automate tasks on a web browser without having to worry about Web
                            Drivers, Browser Compatibility or Operating System Support. Netlenium is designed to be
                            resource efficient and user-friendly.
                        </h4>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Download Netlenium</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Platform</th>
                                                    <th>Version</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-windows"></i> Windows x86
                                                        </td>
                                                        <td>1.0.0.0</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"> Download </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-windows"></i> Windows x64
                                                        </td>
                                                        <td>1.0.0.0</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"> Download </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-linux"></i> Linux x86
                                                        </td>
                                                        <td>1.0.0.0</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"> Download </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-linux"></i> Linux x64
                                                        </td>
                                                        <td>1.0.0.0</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"> Download </button>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Supported Browsers</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Browser</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-chrome"></i> Google Chrome, Dev, Beta & Chromium</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-firefox"></i> Firefox, Developer Edition, Nightly & Beta</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-opera"></i> Opera 60 & Developer Edition</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Screenshot</h3>
                                    </div>
                                    <div class="panel-body">
                                        <img class="img-responsive" src="/assets/img/netlenium_screenshot.png">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            <?PHP HTML::importSection('footer'); ?>
        </div>
        <?PHP HTML::importSection('js_scripts'); ?>
    </body>

</html>
