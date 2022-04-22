<main id="app">
    <div class="container d-flex justify-content-center h-100 py-5">
        <div class="row row-cols-5 g-4 mx-5">
            <div id="card h-100 m-3">
                <?php foreach ($records as $record) {?>
                    <div class="col card h-100">
                        <img src="<?= $records['poster']; ?>" class="m-3" alt="<?= $records['author']; ?>">
                        <div class="card-body mb-0 text-center">
                            <h5 class="card-title text-white text-uppercase fw-bold">
                                <?php echo $records['title']; ?>
                            </h5>
                            <h6><?php echo $records['author']; ?></h6>
                            <p class="mb-0"><?php echo $records['year']; ?></p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</main>