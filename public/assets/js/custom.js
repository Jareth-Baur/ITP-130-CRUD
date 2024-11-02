$(document).ready(function () {
    var baseUrl = window.location.origin;
    $('#productsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/products", // AJAX URL to fetch the data
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'quantity', name: 'quantity'},
            {data: 'price', name: 'price'},
            {data: 'description', name: 'description'}
        ]
    });
});

new DataTable('#datatables');
