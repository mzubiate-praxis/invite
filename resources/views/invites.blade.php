<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parallax website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        td {
            padding-left: 25px;
            padding-bottom: 10px;
            padding-top: 10px;
            border-bottom: 1px solid rgb(172, 172, 172);
        }
    </style>
</head>
<body>
    <div class="relative mx-6 my-6" style="margin-right: 50px; margin-left: 50px;">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="example">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Código
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Asistentes
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de confirmación
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "{{route('store.index')}}",
                success: function (dataSet) {
                    var myTable;

                    myTable = $('#example').DataTable({
                        data: dataSet,
                    });

                    $('#example_length').css('display', 'none');
                    $('#example_filter').css('display', 'none');
                    $('#example_info').css('display', 'none');
                    $('#example_paginate').css('display', 'none');
                }
            });
        });
    </script>
</body>
</html>