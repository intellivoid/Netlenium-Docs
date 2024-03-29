<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Window Object</title>
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
                                        <h3 class="panel-title">Window Object</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            This window object represents the current window that's currently active.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Structure</h4>
<pre>
{
    "ID":"CDwindow-F5BD5EA1BAE609B0FBA0ACE2FF91D0DD",
    "Url":"https://www.google.com/",
    "Title":"Google"
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
                                                    <td>ID</td>
                                                    <td>String</td>
                                                    <td>The ID of the Window</td>
                                                </tr>
                                                <tr>
                                                    <td>Url</td>
                                                    <td>String</td>
                                                    <td>The URL that the Window is currently on</td>
                                                </tr>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>String</td>
                                                    <td>The title of the document that's currently loaded</td>
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
