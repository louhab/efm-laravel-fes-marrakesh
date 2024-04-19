<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l"eleve : </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form route="{{ route('eleves.update' ,['elefe' => $eleve] ) }}" class="form mt-4" method="POST" >
             @method('PUT')
              @csrf
            <div class="form-group">
                <label  >Nom du l"eleve :</label>
                <input class="form-control" name="nom" value="{{ $eleve->nom }}" class="form-control">
            </div>
            <div class="form-group">
                <label >Prenom</label>
                <input type="text" class="form-control" name="prenom" value="{{ $eleve->prenom }}">
            </div>
            <div class="form-group mt-4">
              <select class="form-control" name="club_id">
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}">
                        {{ $club->nom }}
                    </option>
                @endforeach
            </select>
            </div>
            <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('eleves.index') }}"  class="btn btn-danger">Annuler</a>
            </div>
        </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>