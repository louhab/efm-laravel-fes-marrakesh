<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .center-div {
            text-align: center;
        }
    </style>
</head>
<body>
    <main class="mt-6">
        <div class="center-div">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Ajouter une nouvelle Voiture
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('store_car') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Matricule :</label>
                                    <input type="text" name="matricule"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">La Marque</label>
                                    <input type="text" class="form-control" name="marque">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">La date de mise en circulation</label>
                                    <input type="date" class="form-control" name="date_mise_en_circulation">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
</body>
</html>
