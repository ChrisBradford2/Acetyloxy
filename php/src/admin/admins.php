<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Administrateurs</h1>
                <a class="btn btn-primary text-white">Ajouter</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0; $i<2; $i++) { ?>
                        <tr>
                            <th scope="row"><?= $i ?>/th>
                            <td>login@test.fr</td>
                            <td>
                                <a class="btn btn-danger text-white">Supprimer</a>
                                <a class="btn btn-primary text-white">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>