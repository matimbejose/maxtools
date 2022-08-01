<template>
  <div class="container-fuild">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Estudantes</h3>
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
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Disciplina</th>
                  <th>Total Pago</th>
                  <th>Status</th>
                  <th>Data</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="student in students" :key="student.id">
                  <td>{{ student.name }}</td>
                  <td>{{ student.subject }}</td>
                  <td>{{ student.totalpaid }}</td>
                  <td>{{ student.status }}</td>
                  <td>{{ student.created_at }}</td>
                  <td>

                     <a :href="`/students/${student.id}/edit`" 
                     class="btn btn-success btn-xs">
                     <i class="fas fa-pen"></i> Editar </a>
                    <button
                      @click="deleteStudent(student.id)"
                      class="btn btn-primary btn-xs"
                    > 
                    <i class="fas fa-trash"></i> Apagar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
               <a href="/students/create" type="button" class="btn btn-primary">Cadastrar Novo Estudante</a>
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
  name: "StudentComponent",
  props: ["student"],
  data() {
    return {
      students: [],
      formData: {
        id: "",
        name: "",
        subject: "",
        totalpaid: "",
        status: "",
        created_at: "",
      },
      status: false,
    };
  },
  methods: {
    getStudents() {
      axios
        .get(`${url}/getstudents`)
        .then((response) => {
          console.log(response);
          this.students = response.data.students;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deleteStudent(id) {
      axios
        .delete(`${url}/students/${id}`)
        .then((response) => {
          this.status = response.data.sucess;
          this.getStudents();

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
    this.getStudents();
  },
};
</script>
