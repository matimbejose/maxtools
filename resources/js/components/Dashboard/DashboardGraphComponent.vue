<template>
<div class="container-fluid ">
  <div class="row">
    <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Estatistica</h5>
        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="collapse"
          >
            <i class="fas fa-minus"></i>
          </button>
          <div class="btn-group">
            <button
              type="button"
              class="btn btn-tool dropdown-toggle"
              data-toggle="dropdown"
            >
              <i class="fas fa-wrench"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a href="#" class="dropdown-item">Action</a>
              <a href="#" class="dropdown-item">Another action</a>
              <a href="#" class="dropdown-item">Something else here</a>
              <a class="dropdown-divider"></a>
              <a href="#" class="dropdown-item">Separated link</a>
            </div>
          </div>
      
        </div>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <p class="text-center">
              <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
            </p>
            <div class="chart">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>

              <canvas
                id="salesChart"
                style="height: 180px; display: block; width: 734px"
                class="chartjs-render-monitor"
                width="734"
                height="180"
              ></canvas>
            </div>
          </div>

          <div class="col-md-4">
            <p class="text-center">
              <strong>Goal Completion</strong>
            </p>
            <div class="progress-group">
              Add Products to Cart
              <span class="float-right"><b>160</b>/200</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 80%"></div>
              </div>
            </div>

            <div class="progress-group">
              Complete Purchase
              <span class="float-right"><b>310</b>/400</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 75%"></div>
              </div>
            </div>

            <div class="progress-group">
              <span class="progress-text">Visit Premium Page</span>
              <span class="float-right"><b>480</b>/800</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 60%"></div>
              </div>
            </div>

            <div class="progress-group">
              Send Inquiries
              <span class="float-right"><b>250</b>/500</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 50%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    
  </div>
    </div>

</div>
    
</template>

<script>
export default {
  name: 'DashboardGraphComponent',
};
</script>
