<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Error Codes</title>
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
                                        <h3 class="panel-title">Error Codes</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            Each response successful or not contains a error code which makes it easy
                                            to identify what the response is about rather than being dependent upon
                                            only the <code>Status</code> or <code>ResponseCode</code> values
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Error Codes</h4>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Internal Name</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0</td>
                                                    <td>NoError</td>
                                                    <td>Successful operation, no errors returned.</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Unknown</td>
                                                    <td>Unknown Error / Unhandled Exception, most likely a bug</td>
                                                </tr>
                                                <tr>
                                                    <td>100</td>
                                                    <td>UnexpectedError</td>
                                                    <td>
                                                        Unlike <code>1</code>, this is likely to do with a server error
                                                        or an error with the operation. More details should be provided.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>101</td>
                                                    <td>AttributeNotFound</td>
                                                    <td>The attribute was not found in the element</td>
                                                </tr>
                                                <tr>
                                                    <td>102</td>
                                                    <td>InvalidProxyScheme</td>
                                                    <td>The given proxy scheme is not valid</td>
                                                </tr>
                                                <tr>
                                                    <td>103</td>
                                                    <td>UnsupportedDriver</td>
                                                    <td>The given driver is not supported in Netlenium</td>
                                                </tr>
                                                <tr>
                                                    <td>104</td>
                                                    <td>UnsupportedRequestMethod</td>
                                                    <td>The method used for the HTTP request is unsupported</td>
                                                </tr>
                                                <tr>
                                                    <td>105</td>
                                                    <td>SessionExpired</td>
                                                    <td>The session has expired</td>
                                                </tr>
                                                <tr>
                                                    <td>106</td>
                                                    <td>WindowHandlerNotFound</td>
                                                    <td>The window handler was not found</td>
                                                </tr>
                                                <tr>
                                                    <td>107</td>
                                                    <td>SessionError</td>
                                                    <td>There was a error with the session</td>
                                                </tr>
                                                <tr>
                                                    <td>108</td>
                                                    <td>SessionNotFound</td>
                                                    <td>The session was not found</td>
                                                </tr>
                                                <tr>
                                                    <td>109</td>
                                                    <td>Unauthorized</td>
                                                    <td>The user is not authorized to make this request</td>
                                                </tr>
                                                <tr>
                                                    <td>110</td>
                                                    <td>TooManySessions</td>
                                                    <td>The maximum sessions allowed has been reached</td>
                                                </tr>
                                                <tr>
                                                    <td>111</td>
                                                    <td>ResourceNotFound</td>
                                                    <td>The requested resource was not found</td>
                                                </tr>
                                                <tr>
                                                    <td>112</td>
                                                    <td>JavascriptExecutionError</td>
                                                    <td>The Javascript code that was executed threw an error</td>
                                                </tr>
                                                <tr>
                                                    <td>113</td>
                                                    <td>MissingParameter</td>
                                                    <td>A required parameter was missing in the request</td>
                                                </tr>
                                                <tr>
                                                    <td>114</td>
                                                    <td>InvalidSearchValue</td>
                                                    <td>The given search value for <code>by</code> is invalid</td>
                                                </tr>
                                                <tr>
                                                    <td>115</td>
                                                    <td>DriverDisabled</td>
                                                    <td>The driver was disabled by the administrator</td>
                                                </tr>
                                                <tr>
                                                    <td>116</td>
                                                    <td>ElementNotFound</td>
                                                    <td>The element was not found</td>
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
