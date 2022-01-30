<div class="container-fluid cards-wrapper pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-capitalize h1section3">angka pengguna grabfood di wilayah indonesia</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card q-card">
                    <div class="card-header">Judul Card</div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <buttton class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-1">go !!!</buttton>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Card header
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>