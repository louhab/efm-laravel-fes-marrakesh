<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="mt-6">
        <div class="center-div">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table">
                        <a href="{{ route('add_car') }}" class="btn btn-sm btn-primary mb-4 mt-4">Ajouter une nouvelle voiture</a>
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Matricules</th>
                                <th scope="col">Date de mise en circulation</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($voitures as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->matricules }}</td>
                                <td>{{ $car->date_mise_en_circulation }}</td>
                                <td>
        <form action="{{ route('delete_car', ['matricules' => $car->matricules]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
</body>
</html>
<style>
    .center-div {
        text-align: center;
    }
</style>
