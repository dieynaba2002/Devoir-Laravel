<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                
                <div class="pull-right">
                    <a class="btn btn-primary offset-1 mb-1" href="{{ route('etudiants.index') }}"> liste des etudiants</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <div class="container">
        <div class="row">
            <div class="col-md-6 mt-1 offset-3">
            <form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card md-5">
                    <div class="card-header text-center bg-info text-white">
                        <h2>Ajout Etudiant</h2>
                    </div>
                    <div class="card-body">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control">
                        <label for="">nom</label>
                        <input type="text" name="nom" class="form-control">
                        <label for="">Semestre</label>
                        <select name="semestre" class="form-control">
                        <option value="">-- Sélectionnez le semestre --</option>
                            @foreach ($etudiants as $etudiant)
                            <option value="{{ $etudiant->semestre }}">{{ $etudiant->semestre }}</option>
                             @endforeach
                        </select>
                        <label for="">Matiere</label>
                        <select name="matiere" class="form-control">
                        <option value="">-- Sélectionnez la matiere --</option>
                            @foreach ($etudiants as $etudiant)
                            <option value="{{ $etudiant->matiere }}">{{ $etudiant->matiere }}</option>
                             @endforeach
                        </select>
                        <label for="">Note</label>
                        <input type="int" name="note" class="form-control">
                        <label for="">Examen</label>
                        <input type="int" name="examen" class="form-control">
                        <button type="submit" class="btn btn-success offset-5 mt-4">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>
   
</body>

</html>