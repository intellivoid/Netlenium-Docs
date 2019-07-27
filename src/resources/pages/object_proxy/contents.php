<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Proxy Object</title>
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
                                        <h3 class="panel-title">Proxy Object</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            This object represents a proxy configuration
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Structure</h4>
<pre>
{
    "Enabled":false,
    "Scheme":"http",
    "Host":"0.0.0.0",
    "Port":8080,
    "AuthenticationRequired":false,
    "Username":"",
    "Password":""
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
                                                    <td>Enabled</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if this proxy configuration has been enabled or not</td>
                                                </tr>
                                                <tr>
                                                    <td>Scheme</td>
                                                    <td>String</td>
                                                    <td>
                                                        The proxy scheme that's being used, the possible values are
                                                        <code>http</code> or <code>https</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Host</td>
                                                    <td>String</td>
                                                    <td>The host of the proxy</td>
                                                </tr>
                                                <tr>
                                                    <td>Port</td>
                                                    <td>Integer</td>
                                                    <td>The port of the proxy</td>
                                                </tr>
                                                <tr>
                                                    <td>AuthenticationRequired</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if Authentication is required for this proxy</td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>String</td>
                                                    <td>The username used for proxy authentication</td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td>String</td>
                                                    <td>The password used for proxy authentication</td>
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
