<?php breadcump();  ?>
<div class="row">
    <?php $main = new core\controller; ?>
    <?php $main->view('admin', 'requires', 'admin/sidebar', []); ?>  

    <div class="col-lg-9">
        <div class="row">
            <?php for($i = 0; $i < 6; $i++): ?>
              <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a>Lorem</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quam.</p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>