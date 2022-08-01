<template>
  <div class="row">
    <DashboardGraphComponent />
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>
          <p>Estudantes ativos</p>
        </div>
        <div class="icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <a href="/students" class="small-box-footer"
          >Acessar <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53</h3>
          <p>Professores ativos</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>

        <a href="/teachres" class="small-box-footer"
          >Acessar <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>
          <p>Estudantes nao ativos</p>
        </div>
        <div class="icon">
          <i class="fas fa-book-reader"></i>
        </div>

        <a href="/studentsn" class="small-box-footer"
          >Acessar <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>
          <p>Professores nao ativos</p>
        </div>
        <div class="icon">
          <i class="fas fa-users-slash"></i>
        </div>
        <a href="#" class="small-box-footer"
          >Acessar <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>

        <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary">
        <div class="inner">
          <h3>65</h3>
          <p>Contas a pagar</p>
        </div>
        <div class="icon">
          <i class="fas fa-coins"></i>
        </div>
        <a href="#" class="small-box-footer"
          >Acessar <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>

    </div>
</template>

<script>
import DashboardGraphComponent from './DashboardGraphComponent';

export default {
  name: 'DashboardComponent',
  components: { DashboardGraphComponent }
};
</script>
