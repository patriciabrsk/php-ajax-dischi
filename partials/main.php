<?php 
    include_once __DIR__ . "/../server/data.php"  
?>
<main id="app">
    <div class="container w-50 d-flex justify-content-center h-100 py-5">
        <div class="row row-cols-5 g-4 mx-5">
            <div id="col" v-for="record in records">
                <div class="card h-100">
                    <img :src="record.poster" class="m-3" :alt="record.author">
                    <div class="card-body mb-0 text-center">
                        <h5 class="card-title text-white text-uppercase fw-bold">
                            {{ record.title }}
                        </h5>
                        <h6>{{ record.author }}</h6>
                        <p class="mb-0">{{ record.year }}</p>
                    </div>
                </div>
            </div>
            <?php foreach ($records as $record) {?>
                <!-- <div id="col">
                    <div class="card h-100">
                        <img src="<?= $record['poster']; ?>" class="m-3" alt="<?= $record['author']; ?>">
                        <div class="card-body mb-0 text-center">
                            <h5 class="card-title text-white text-uppercase fw-bold">
                                <?php echo $record['title']; ?>
                            </h5>
                            <h6><?php echo $record['author']; ?></h6>
                            <p class="mb-0"><?php echo $record['year']; ?></p>
                        </div>
                    </div>
                </div> -->
            <?php }?>
        </div>
    </div>
</main>