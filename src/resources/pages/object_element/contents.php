<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Element Object</title>
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
                                        <h3 class="panel-title">Element Object</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            This object represents the element and it's attributes.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Structure</h4>
<pre>
{
    "Enabled":true,
    "IsSelected":false,
    "ElementLocation":{
        "X":1736,
        "Y":16
    },
    "ElementSize":{
        "Width":30,
        "Height":30
    },
    "TagName":"a",
    "InnerText":"Click Here!",
    "InnerHtml":""
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
                                                    <td>Indicates if this Element is enabled or not</td>
                                                </tr>
                                                <tr>
                                                    <td>IsSelected</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if the Element is currently selected</td>
                                                </tr>
                                                <tr>
                                                    <td>ElementLocation</td>
                                                    <td><a href="/object_location">Location</a></td>
                                                    <td>Represents the current location that the element is in</td>
                                                </tr>
                                                <tr>
                                                    <td>ElementSize</td>
                                                    <td><a href="/object_size">Size</a></td>
                                                    <td>Represents the current size of the element</td>
                                                </tr>
                                                <tr>
                                                    <td>TagName</td>
                                                    <td>String</td>
                                                    <td>The name of the tag that this element uses</td>
                                                </tr>
                                                <tr>
                                                    <td>InnerHtml</td>
                                                    <td>String</td>
                                                    <td>The Inner HTML contents within this element</td>
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
