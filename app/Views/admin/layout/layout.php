<?= $this->include('admin/layout/css.php') ?>


<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">


        <?= $this->include('admin/layout/sidebar.php') ?>
        <div class="layout-page">

        <?= $this->include('admin/layout/navbar.php') ?>


         <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
            
            <?= $this->renderSection('content') ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                        </div>
            </div>
        <div class="layout-overlay layout-menu-toggle"></div>


        </div>

<?= $this->include('admin/layout/js.php') ?>