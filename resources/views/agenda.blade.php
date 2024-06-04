<x-app-layout>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .agenda-container {
            margin-top: 50px;
        }
        .agenda-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .agenda-table {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }}
        </h2>
    </x-slot>

    <div class="container agenda-container">

        <div class="agenda-table">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Hora</th>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">8:00 - 9:00</th>
                        <td>---</td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">9:00 - 10:00</th>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">10:00 - 11:00</th>
                        <td>---</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>