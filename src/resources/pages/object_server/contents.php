<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Server Object</title>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Server Object</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            This object represents the details of the Netlenium Server
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Structure</h4>
<pre>
{
    "ServerName":"Netlenium",
    "ServerVersion":"1.0.0.0",
    "ChromeDriversDisabled":false,
    "OperaDriversDisabled":false,
    "FirefoxDriversDisabled":false,
    "DefaultDriver":"chrome",
    "CurrentSessions":0,
    "MaximumSessions":100,
    "SessionInactivityLimit":10
}
</pre>
                                        <br/>
                                        <h4>Variables</h4>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ServerName</td>
                                                    <td>String</td>
                                                    <td>The name of the server</td>
                                                </tr>
                                                <tr>
                                                    <td>ServerVersion</td>
                                                    <td>String</td>
                                                    <td>The version of the Server & Netlenium</td>
                                                </tr>
                                                <tr>
                                                    <td>ChromeDriversDisabled</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if Chrome Drivers were disabled by the Administrator</td>
                                                </tr>
                                                <tr>
                                                    <td>OperaDriversDisabled</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if Opera Drivers were disabled by the Administrator</td>
                                                </tr>
                                                <tr>
                                                    <td>FirefoxDriversDisabled</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if Firefox Drivers were disabled by the Administrator</td>
                                                </tr>
                                                <tr>
                                                    <td>DefaultDriver</td>
                                                    <td>String</td>
                                                    <td>The default driver that gets used when no target browser is given</td>
                                                </tr>
                                                <tr>
                                                    <td>CurrentSessions</td>
                                                    <td>Integer</td>
                                                    <td>The current number of sessions that are currently active</td>
                                                </tr>
                                                <tr>
                                                    <td>MaximumSessions</td>
                                                    <td>Integer</td>
                                                    <td>The total number of sessions that are allowed to be created</td>
                                                </tr>
                                                <tr>
                                                    <td>SessionInactivityLimit</td>
                                                    <td>Integer</td>
                                                    <td>The total number of minutes that a session is allowed to be inactive for before it gets closed</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <h5>
                                            <a href="https://github.com/intellivoid/Netlenium-Public/issues/new">Report mistake / suggest improvement</a>
                                        </h5>
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
