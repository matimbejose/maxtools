<template>
  <div class="container-fuild">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">
              Editar Estudante <small v-if="status">{{ status }}</small>
            </h3>
            <div class="card-tools">
              <i class="fas fa-user-graduate"></i>
              <button
                type="button"
                class="btn btn-tool"
                data-card-widget="collapse"
              >
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card-header">
              <h3 class="card-title">Editar Estudante</h3>
            </div>

            <div class="card-body">
              <form action="#" @submit.prevent="save">
                <div class="form-group">
                  <label>Nome do Estudante</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user-alt"></i>
                      </span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      inputmode="text"
                      placeholder="Nome Completo"
                      v-model="formData.name"
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label>Cadeiras</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-chalkboard-teacher"></i>
                      </span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      inputmode="text"
                      placeholder="Cadeiras por fazer"
                      v-model="formData.subject"
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label>Total Pago</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-coins"></i>
                      </span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      inputmode="text"
                      placeholder="Valor pago"
                      v-model="formData.totalpaid"
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select
                    v-model="formData.status"
                    class="
                      form-control
                      select2 select2-danger select2-hidden-accessible
                    "
                    data-dropdown-css-class="select2-danger"
                    style="width: 100%"
                    data-select2-id="12"
                    tabindex="-1"
                    aria-hidden="true"
                  >
                    <option disabled value="">Escolha o Status</option>
                    <option>Regular</option>
                    <option>NRegular</option>
                  </select>
                  <span
                    class="select2 select2-container select2-container--default"
                    dir="ltr"
                    data-select2-id="13"
                    style="width: 100%"
                    ><span class="selection"></span
                    ><span class="dropdown-wrapper" aria-hidden="true"></span
                  ></span>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Atualizar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import VueSimpleAlert from "vue-simple-alert";
Vue.use(VueSimpleAlert);

const url = "http://127.0.0.1:8000";
export default {
  name: "StudentUpdateComponent",
  props: ["student"],
  data() {
    return {
      formData: {
        id: "",
        name: "",
        subject: "",
        totalpaid: "",
        status: "",
      },
      status: false,
    };
  },
  methods: {
    save() {
      axios
        .put(`${url}/students/${this.student.id}`, this.formData)
        .then((response) => {
          this.status = response.data.sucess;

          this.$fire({
            text: "Editado  com Sucesso",
            type: "success",
            timer: 1000,
          }).then((r) => {
            console.log(r.value);
          });

        })
        .catch((err) => {
          console.log(error);
        });
    },
  },
  created() {
    this.formData = this.student;
    console.log(this.students);
  },
};
</script>
