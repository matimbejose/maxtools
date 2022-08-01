<template>
  <div class="container-fuild">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Professor</h3>
            <div class="card-tools">
              <i class="fas fa-users"></i>
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
            <table class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Disciplina</th>
                  <th>Status</th>
                  <th>Ultimo  pago</th>
                  <th>ações</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="teacher in teachres " :key="teacher.id">
                  <td>{{ teacher.name }}</td>
                  <td>{{ teacher.subject  }}</td>
                  <td>{{ teacher.status }}</td>
                  <td>{{ teacher.lastvalue  }}</td>
                  <td>
                    
                     <a :href="`/teachres/${teacher.id}/edit`" 
                     class="btn btn-success btn-xs">
                     <i class="fas fa-pen">
                      </i> Editar </a>
                    <button
                      @click="deleteTeacher(teacher.id)"
                      class="btn btn-primary btn-xs"
                    > 
                    <i class="fas fa-trash"></i> Apagar
                    </button>
                  </td>
                </tr>
              </tbody>

              <tbody>

              </tbody>
            </table>
          </div>
               <a href="/teachres/create" type="button" class="btn btn-primary">Cadastrar Novo Professor</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import VueSimpleAlert from "vue-simple-alert";
Vue.use(VueSimpleAlert);

import axios from "axios";
const url = "http://127.0.0.1:8000";

export default {
  name: "TeacherComponent",
  props: ["Teacher"],
  data() {
    return {
      teachres: [],
      formData: {
        id: "",
        name: "",
        subject: "",
        totalpaid: "",
        status: "",
        lastvalue: ""
      },
      status: false,
    };
  },
  methods: {
    getTeachres() {
      axios
        .get(`${url}/getteachres`)
        .then((response) => {
          console.log(response);
          this.teachres = response.data.teacher;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deleteTeacher(id) {
      axios
        .delete(`${url}/teachres/${id}`)
        .then((response) => {
          this.status = response.data.sucess;
          this.getTeachres();

          this.$fire({
            text: "Removido com sucesso",
            type: "success",
            timer: 4000,
          }).then((r) => {
            console.log(r.value);
          });

          
        })
        .catch((error) => {
          console.log(error);
        });
    },


  },

  mounted() {
    this.getTeachres();
  },
};
</script>
