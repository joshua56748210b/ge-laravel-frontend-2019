<template>
  <div class="modal fade" id="sdEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="sdEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="" @submit="createTest(test)">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sdEmployeeModalLabel">Seeded Employees</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="employee-dropdown"><strong>List of Employees:</strong></label>
              <select name="employee-dropdown" class="form-control" v-model="test.selectedEmployee">
                <option v-for="(option, name) in option" :value="option">{{ option.name }}</option>
              </select>
            </div>
            <div class="form-group">
              Selected Employee : <strong>{{ test.selectedEmployee.name }}</strong>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createTest(test)">Submit
                </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
  export default {
    name: "createTest",
    props : ['sd_employee'],
    data() {
      return {
        test: {
          selectedEmployee: ''
        },
        selectedEmployee: '',
        option: this.sd_employee
      }
    },
    methods: {
      createTest(test){
        if(this.$store.dispatch('createTest', test)){
          Swal.fire({
            type: 'success',
            title: 'Success',
            text: 'Username Inserted!'
          });
        } else {
          Swal.fire({
            type: 'failed',
            title: 'Failed',
            text: 'Something went wrong!'
          });
        }
      }
    },
    computed: {
      isValid() {
        return this.test.selectedEmployee !== ''
      }
    }
  }
</script>

<style scoped>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
