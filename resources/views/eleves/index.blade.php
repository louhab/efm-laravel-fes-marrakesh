<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actvities Liste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 class="mx-auto">
                        Liste des eleves 
                    </h1>
                  <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Club id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eleves as $eleve)
                    <tr>
                        <td>{{$eleve->nom}}</td>
                        <td>{{$eleve->prenom}}</td>
                        <td>{{$eleve->club_id}}</td>
                        <td>
                            <a href="{{ route('eleves.show', ['elefe' => $eleve]) }}" class="btn btn-sm btn-primary">Modifier</a>
                            <Button class="btn btn-sm btn-danger">Supprimer</Button>
                        </td>

                    </tr>    
                    @endforeach
                </tbody>
                </table>
                </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>