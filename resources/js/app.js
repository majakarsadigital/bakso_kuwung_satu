import './bootstrap';
import { DataTable } from "simple-datatables";

document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById("default-table")) {
        const dataTable = new DataTable("#default-table", {
            searchable: true,
            perPageSelect: [5, 10, 15, 20, 25],
            perPage: 10
        });
    }
});