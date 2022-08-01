<template>
  <div class="container-fuild">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Estudantes</h3>
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
                  <th>Total Pago</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="student in students" :key="student.id">
                  <td>{{ student.name }}</td>
                  <td>{{ student.subject }}</td>
                  <td>{{ student.totalpaid }}</td>
                  <td>{{ student.status }}</td>
                <td>
                  
                    <a :href="`/students/${student.id}/edit`" 
                     class="btn btn-success btn-xs">
                     <i class="fas fa-pen"></i> </a>
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
  name: "StudentNComponent",
  props: ["id"],
  data() {
    return {
      students: [],
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
    getStudents() {
      axios
        .get(`${url}/getstudentsn`)
        .then((response) => {
          console.log(response);
            this.students = response.data.students;
        })
        .catch((error) => {
          console.log(error);
        });
    }


  },

  mounted() {
    this.getStudents()
  }
};
</script>
