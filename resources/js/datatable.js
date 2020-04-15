/**
 * Here we write the config for all JQuery Data Tables inside our application.
 * If you want to edit or create new Data Tables, insert the code for it here.
 */

$(document).ready( function () {
    $('#table-pagination').DataTable();
} );

$(document).ready(function () {
    $('#table-scores').DataTable({
        "order": [ 2, "desc" ],
        "columnDefs": [
            { "orderable": false, "targets": [ 1, 3 ] }
        ],
        "language": {
            "zeroRecords": "Er zijn geen scores met deze naam.",
            "emptyTable": "Er zijn nog geen scores bekend, kijk later opnieuw.",
        },
    });
});

$(document).ready(function () {
    $('#table-users').DataTable({
        "columnDefs": [
            { "orderable": false, "targets": [4] }
        ],
        "language": {
            "zeroRecords": "Er zijn geen gebruikers met deze naam.",
            "emptyTable": "Er zijn nog geen gebruikers aangemaakt.",
        },
    });
});

$(document).ready(function () {
    $('#table-rounds').DataTable({
        "columnDefs": [
            { "orderable": false, "targets": [5, 6] }
        ],
        "language": {
            "zeroRecords": "Er zijn geen rondes met deze naam.",
            "emptyTable": "Er bestaan nog geen rondes, maak er eerst een aan a.u.b.",
        },
    });
});
