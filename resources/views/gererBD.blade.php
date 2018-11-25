@extends('template')

<body>

@section('titlePage')

    <p><h2>Gérer mes BD</h2></p>

@endsection

@section('content')

<form class="col-sm-6" id="ajoutBD" method="POST" >

    @csrf

    <div class="col-sm-10" id='titleAjouterSupprimer' >
        <p>Ajouter une BD</P>
    </div>

    <div class="form-row">
        <div class="col">
            <label for="Titre">Titre de la BD</label>
            <input type="text" class="form-control" name="titrebd" id='Titre' placeholder="Titre de la BD">
        </div>
    </div><br/>

    <div>
        <div class="form-row">
            <label for="auteur">Nom de l'auteur</label>
            <input type="text" class="form-control" name="nomAuteur" id='auteur' placeholder="Nom de l'auteur">
        </div>
    </div><br/>

    <div>
        <div class="form-row">
            <label for="auteur">Prenom de l'auteur</label>
            <input type="text" class="form-control" name="prenomAuteur" id='auteur' placeholder="Prenom de l'auteur">
        </div>
    </div><br/>

    <fieldset class="form-group">

        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0">Catégorie</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Fantastique
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Classique
                    </label>
                </div>

                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                    <label class="form-check-label" for="gridRadios3">
                        Enfants
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Un commentaire ?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Une note ?</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
    </fieldset>
    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="ajoutBD" >Ajouter</button>
        </div>
    </div>
</form>


<form class="col-sm-6" id="supBD">
    <div class="col-sm-12" id='titleAjouterSupprimer' >
        <p>Supprimer une BD</P>
    </div>

    <div class="form-group row">
        <div class="col">
            <label for="Titre">Titre de la BD</label>
            <input type="text" class="form-control" id='Titre' placeholder="Titre de la BD à supprimer">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </div>
    </div>

    <!-- <div class="form-group row">
        <div class="col-sm-10">
        </div>
    </div> -->

</form>

@endsection

</body>