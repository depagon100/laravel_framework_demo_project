<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-jet-banner />

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
<style>
    h1 {
        text-align: left;
        font-size: 26px;
        color: gray;
    }

    h2 {
        text-align: left;
        font-size: 20px;
        color: gray;
    }


    /*Overrides for Tailwind CSS */

    /*Form fields*/
    .dataTables_wrapper select
    {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: .5rem;
        /*pl-2*/
        padding-bottom: .5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 4px;
        /*border-2*/
        border-radius: .25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
        width: 45% !important;


    }
    .dataTables_wrapper .dataTables_filter input  {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: .5rem;
        /*pl-2*/
        padding-bottom: .5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 6px;
        /*border-2*/
        border-radius: .25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
        width: 80% !important;
    }

    /*Row Hover*/
    table.dataTable.hover tbody tr:hover,
    table.dataTable.display tbody tr:hover {
        background-color: #ebf4ff;
        /*bg-indigo-100*/
    }

    /*Pagination Buttons*/
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Current selected */
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Hover */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Add padding to bottom border */
    table.dataTable.no-footer {
        border-bottom: 1px solid #e2e8f0;
        /*border-b-1 border-gray-300*/
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    /*Change colour of responsive icon*/
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
        background-color: #667eea !important;
        /*bg-indigo-500*/
    }



    table {
        counter-reset: tableCount;
    }
    .counterCell:before {
        content: counter(tableCount);
        counter-increment: tableCount;

    }
</style>
{{-- Timezone--}}
<script type="text/javascript" id="gwt-pst">
    (function (d, eId) {
        var js, gjs = d.getElementById(eId);
        js = d.createElement('script');
        js.id = 'gwt-pst-jsdk';
        js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?" + new Date().getTime();
        gjs.parentNode.insertBefore(js, gjs);
    }(document, 'pst-container'));

    var gwtpstReady = function () {
        new gwtpstTime('pst-time');
    }
</script>

{{-- Sorting, Pagination, Search--}}
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({
            "scrollCollapse": true,
            "sScrollY": "500px",
            "iDisplayLength": 10,
            "language": {
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                "lengthMenu": "_MENU_records per page",
                "zeroRecords": "No matching record found",
                "emptyTable": "No entries found",
                "loadingRecords": "Loading data from server",
                "processing": "Processing...",
                "search": "Search:",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total entries)"},
            responsive: true
        })
            .columns.adjust()
            .responsive.recalc();

    });
</script>
<script>
    $(document).ready(function() {

        var table = $('#example1').DataTable({
            "scrollCollapse": true,
            "sScrollY": "500px",
            "iDisplayLength": 10,
            "language": {
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                "lengthMenu": "_MENU_records per page",
                "zeroRecords": "No matching record found",
                "emptyTable": "No entries found",
                "loadingRecords": "Loading data from server",
                "processing": "Processing...",
                "search": "Search:",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total entries)"},
            responsive: true
        })
            .columns.adjust()
            .responsive.recalc();
    });
</script>


{{--Module1 Script start--}}
<!-- Script RA6969 -->
<script type="text/javascript">
    $("#dynamic-ar").click(function () { //button name
        $("#dynamicAddRemove").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="dpno" hidden></label> <input class="form-control" type="text" name="dpno[]" id="" required>  </td> <td> <label for="dpno" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="dpno[]" id="dpno" required> </td> <td> <label for="dpno"  hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="dpno[]" id="dpnoe" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script PD-->
<script type="text/javascript">
    $("#ECC").click(function () { //button name
        $("#pd").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="cncno" hidden></label> <input class="form-control" type="text" name="cncno[]" id="cncno" required>   </td> <td> <label for="cncno" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]" id="cncno" required> </td> <td> <label for="cncno" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]" id="cncno" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script for CCo Registration -->
<!-- Script for CCo Registration -->
<script type="text/javascript">
    $("#ccoregister").click(function () { //button name
        $("#cco").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="ccoreg" hidden></label> <input class="form-control" type="text" name="ccoreg[]" id="ccoreg" required>   </td> <td> <label for="ccoreg" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="ccoreg[]" id="ccoreg" required> </td> <td> <label for="ccoreg" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="ccoreg[]" id="ccoreg" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>



<!-- Scipt for importation clearance no -->
<script type="text/javascript">
    var i = 0;
    $("#imp").click(function () { //button name
        ++i;
        $("#importation").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="import" hidden></label> <input class="form-control" type="text" name="import[]" id="import" required>   </td> <td> <label for="import" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="import[]" id="import" required> </td> <td> <label for="import" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="import[]" id="import" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>


<!-- Script for Permit to Transport -->
<script type="text/javascript">
    var i = 0;
    $("#ptt").click(function () { //button name
        ++i;
        $("#permit").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="permit" hidden></label> <input class="form-control" type="text" name="permit[]" id="" required>  </td> <td> <label for="permit" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="permit[]" id="" required> </td> <td> <label for="permit" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="permit[]" id="" required> </td>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script for Small Quality Importation-->
<script type="text/javascript">
    var i = 0;
    $("#sqi").click(function () { //button name
        ++i;
        $("#smallq").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="smallquan" hidden></label> <input class="form-control" type="text" name="smallquan[]" id="smallquan" required>  </td> <td> <label for="smallquan" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]" id="smallquan" required> </td> <td> <label for="smallquan" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]" id="smallquan" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>


<!-- Script for priority chem list -->
<script type="text/javascript">
    var i = 0;
    $("#priochem").click(function () { //button name
        ++i;
        $("#prio").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="priority" hidden></label> <input class="form-control" type="text" name="priority[]" id="priority" required>  </td> <td> <label for="priority" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]" id="priority" required> </td> <td> <label for="priority" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]" id="priority" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script PICCS -->
<script type="text/javascript">
    var i = 0;
    $("#pccs").click(function () { //button name
        ++i;
        $("#piccs").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="piccs" hidden></label> <input class="form-control" type="text" name="piccs[]" id="piccs" required>  </td> <td> <label for="piccs" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]" id="piccs" required> </td> <td> <label for="piccs" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]" id="piccs" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script for PMPIN -->
<script type="text/javascript">
    $("#pin").click(function () { //button name
        $("#pmpin").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="pmpin" hidden></label> <input class="form-control" type="text" name="pmpin[]" id="pmpin" required>  </td> <td> <label for="pmpin" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]" id="pmpin" required> </td> <td> <label for="pmpin" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]" id="pmpin" required> </td> </tr>'
        ); //table name

        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script for PO no -->
<script type="text/javascript">
    var i = 0;
    $("#ponum").click(function () { //button name
        ++i;
        $("#pono").append(
            '<tr> <td></td> <td></td> <td></td> <td> <label for="pono" hidden></label> <input class="form-control" type="text" name="pono[]" id="pono" required>  </td> <td> <label for="pono" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono" required> </td> <td> <label for="pono" hidden></label> <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono" required> </td> </tr>'
        ); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

{{--Module1 Script End--}}


{{--Module 2 Script Start--}}
<!-- SCRIPT FOR HAZZARDOUS WASTE GENERATIONS  -->
<script type="text/javascript">
    var i = 0;
    $("#haz").click(function () { //button name
        ++i;
        $("#hazzardous").append(
            '<tr><td class="counterCell " style="text-align: right" ></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content" ><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwGeneration[]"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Solid</option><option>Liquid</option><option>Gas</option><option>Sludge</option></select></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Toxic(T)</option><option>Corrosive(C)</option><option>Reactive(R)</option><option>Flammable(F)</option><option>T/C</option><option>T/R</option><option>T/F</option><option>C/R</option><option>C/F</option><option>R/F</option><option>T/C/R</option><option>T/C/F</option><option>T/R/F</option><option>C/R/F</option><option>T/C/R/F</option></select></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]"></td>	<td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td></tr>'
        ); //table name
    });
</script>


<!--  SCRIPT FOR WASTE STORAGE, TREATMENT AND DISPOSAL (PLEASE FILL-UP ONE TABLE PER HW -->
<script type="text/javascript">
    var i = 0;
    $("#wstd").click(function () { //button name
        ++i;
        $("#wstad").append(
            '<div class="container" id="wstad"><div class="card border-3 border-secondary mb-3" ><table class="table table-borderless p-3"><thead><tr><th>HW Details</th></tr></thead><tbody><tr><td></td><td>HW No.</td><td>HW Class</td></tr><tr><td></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr><tr><td></td><td>Qty of HW Treated</td><td>Unit</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>pc</option><option>ton</option><option>n/a</option></select></td></tr><tr><td></td><td>TSD Locations</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr></tbody><thead><tr><th>Storage</th></tr></thead><tbody><tr><td></td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr><tr><td></td><td>Method</td></tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr></tbody><thead><tr><th>Transporter</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td><td><input type="text" class="form-control" name="transporter[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td><td><input type="date" class="form-control" name="transporter[]"></td></tr></tbody><thead><tr><th>Treater</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="text" class="form-control" name="treater[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="date" class="form-control" name="treater[]"></td></tr></tbody><thead><tr><th>Disposal</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="text" class="form-control" name="disposal[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="date" class="form-control" name="disposal[]"  ></td></tr></tbody></table></div></div>'
        ); //table name
    });
</script>


<!--  SCRIPT FOR ON-SITE SELF INSPECTION OF STORAGE AREA -->
<script type="text/javascript">
    var i = 0;
    $("#onSite").click(function () { //button name
        ++i;
        $("#onsite").append(
            '<tr><td><input type="date" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td></tr>'
        ); //table name
    });
</script>

{{--Module2 Script End--}}



{{--Module 3 Script Start--}}


<!-- WTP DISCHARGE LOCATION script -->
<script type="text/javascript">
    var i = 0;
    $("#wdladd").click(function () { //button name
        ++i;
        $("#wdl").append(
            '<tr><td><input class="form-control" type="number" name="dischargeLocation[]"></td><td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]"></td><td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]"></td></tr>'
        ); //table name
    });
</script>


<!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for CC script -->
<script type="text/javascript">
    var i = 0;
    $("#drwcccadd").click(function () { //button name
        ++i;
        $("#drwccc").append(
            '<tr><td><input class="form-control" type="text" name="dreportofwaste[]"></td><td><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]"></td></tr>'
        ); //table name
    });
</script>

<!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for OP script -->
<script type="text/javascript">
    var i = 0;
    $("#dwrcopadd").click(function () { //button name
        ++i;
        $("#dwrcop").append(
            ' <tr><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="date"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td></tr>'
        ); //table name
    });
</script>


{{--Module 3 Script end--}}


</html>
