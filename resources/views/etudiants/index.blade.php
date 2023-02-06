<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Devoir Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Liste Des Etudiants</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('etudiants.create') }}">Ajouter un etudiant</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Semestre</th>
                    <th>Matiere</th>
                    <th>Note</th>
                    <th>Examen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->id }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->semestre }}</td>
                        <td>{{ $etudiant->matiere }}</td>
                        <td>{{ $etudiant->note }}</td>
                        <td>{{ $etudiant->examen }}</td>
                    
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $etudiants->links() !!}
    </div>
</body>
</html>