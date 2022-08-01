<template>
  <div class="container-fuild">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Professores</h3>
            <div class="card-tools">
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
                  <th>TUltimo  pago</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="teacher in teachres" :key="teacher.id">
                  <td>{{ teacher.name }}</td>
                  <td>{{ teacher.subject }}</td>
                  <td>{{ teacher.lastvalue }}</td>
                  <td>{{ teacher.status }}</td>
                <td>
                  
                   <a :href="`/teachres/${teacher.id}/edit`" 
                     class="btn btn-success btn-xs">
                     <i class="fas fa-pen">
                      </i> Editar </a>
                      
                </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
const url = "http://127.0.0.1:8000";

export default {
  name: "TeacherNComponent",
  props: ["id"],
  data() {
    return {
      teachres: [],
      formData: {
        id: "",
        name: "",
        subject: "",
        lastvalue: "",
        status: "",
      },
      status: false,
    };
  },
  methods: {
  getTeachres() {
      axios
        .get(`${url}/getteachresn`)
        .then((response) => {
          console.log(response);
          this.teachres = response.data.teacher;
        })
        .catch((error) => {
          console.log(error);
        });
    }


  },

  mounted() {
  this.getTeachres()
  }
};
</script>
