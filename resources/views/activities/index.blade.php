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
                  <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Describtion</th>
                    <th scope="col">date</th>
                    <th scope="col">Nombre des jours</th>
                    <th scope="col">Club</th>
                    <th scope="col">club id</th>
                    <th scope="col">Action</th>
                    <th scope="col">Afficher le details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activities as $activitie)

                    <tr>
                        <td>
                            {{$activitie->description}}
                        </td>

                        <td>
                            {{$activitie->date}}
                        </td>
                        <td>
                            {{$activitie->Nombre_jours}}
                        </td>

                         <td>
                            {{$activitie->club->nom}}
                        </td>
                       <td>
                        {{$activitie->club_id}}
                       </td> 
                    <td>
                        <button class="btn btn-danger btn-sm">Modifier</button>
                        <button class="btn btn-primary btn-sm">Supprimer</button>
                    </td>    
                          <td>
                              <a href=""> >> </a>                           
                          </td>
                        
                        <tr>
                    @endforeach
                </tbody>
                </table>
                </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>