<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HS DEMO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">

    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>

</head>

<body>
    <table id="table" data-toggle="table" data-ajax="ajaxRequest" data-search="true" data-side-pagination="server" data-pagination="true">
        <thead>
            <tr>
                <th data-field="rowid" data-sortable="true">ROWID</th>
                <th data-field="tms" data-sortable="true">TIMESTAMP</th>
                <th data-field="response" data-sortable="true">JSON</th>
            </tr>
        </thead>
    </table>

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // your custom ajax request here
        function ajaxRequest(params) {
            var url = 'hsshow.php?action=getAllRequest';
            $.get(url).then(function(res) {
                params.success(res)
            })
        }

        function seeJson($jsonId) {
            var url = 'hsshow.php?action=getAllRequest';
            $.get(url).then(function(res) {
                params.success(res)
            })
        }
    </script>

</body>

</html>