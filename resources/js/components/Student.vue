<template>
    <div class="container">
        <div class="col col-12 justify-content-center">
            <h1 class="text-center"><b>Listado de Estudiantes</b></h1>
            <hr>
            <!-- Button trigger modal -->
            <button @click="update=false; openModal();" type="button" class="btn btn-primary">Nuevo Estudiante</button>
            <!-- Modal -->
            <div class="modal" :class="{show:modal}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{titleModal}}</h5>
                            <button @click="closeModal();" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label for="document_type">Tipo de Documento</label>
                                <input v-model="students.document_type" type="text" class="form-control" id="document_type" name="document_type" placeholder="Tipo de Documento">

                                <!-- <select  class="form-select" name="document_type" id="document_type" aria-label="Default select example">
                                    <option value="">Seleccionar</option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="CE">CE</option>
                                </select> -->
                            </div>
                            <div>
                                <label for="document_number">Número de Documento</label>
                                <input v-model="students.document_number" type="number" class="form-control" id="document_number" name="document_number" placeholder="Número de Documento">
                            </div>
                            <div>
                                <label for="expedition_date">Fecha de Expedición Dto</label>
                                <input v-model="students.expedition_date" type="date" class="form-control" id="expedition_date" name="expedition_date" placeholder="Fecha de Expedición Dto">
                            </div>
                            <!-- <div>
                                <label for="exped_country">País Expedición Dto</label>
                                <input type="text" class="form-control" id="exped_country" name="exped_country" placeholder="País Expedición Dto">
                            </div>
                            <div>
                                <label for="exped_depart">Departamento Expedición Dto</label>
                                <input type="text" class="form-control" id="exped_depart" name="exped_depart" placeholder="Departamento Expedición Dto">
                            </div> -->
                            <div>
                                <label for="exped_muni">Municipio Expedición Dto</label>
                                <input v-model="students.exped_muni" type="text" class="form-control" id="exped_muni" name="exped_muni" placeholder="Municipio Expedición Dto">
                            </div>
                            <div>
                                <label for="names">Nombres</label>
                                <input v-model="students.names" type="text" class="form-control" id="names" name="names" placeholder="Nombres">
                            </div>
                            <div>
                                <label for="last_name1">Primer Apellido</label>
                                <input v-model="students.last_name1" type="text" class="form-control" id="last_name1" name="last_name1" placeholder="Primer Apellido">
                            </div>
                            <div>
                                <label for="last_name2">Segundo Apellido</label>
                                <input v-model="students.last_name2" type="text" class="form-control" id="last_name2" name="last_name2" placeholder="Segundo Apellido">
                            </div>
                            <div>
                                <label for="gender">Género</label>
                                <input v-model="students.gender" type="text" class="form-control" id="gender" name="gender" placeholder="Género">
                                <!-- <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                    <option value="">Seleccionar</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                    <option value="OTROS">OTROS</option>
                                </select> -->
                            </div>
                            <div>
                                <label for="birth_date">Fecha de Nacimiento</label>
                                <input v-model="students.birth_date" type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Fecha de Nacimiento">
                            </div>
                            <!-- <div>
                                <label for="birth_country">País de Nacimiento</label>
                                <input type="text" class="form-control" id="birth_country" name="birth_country" placeholder="País de Nacimiento">
                            </div>
                            <div>
                                <label for="birth_depart">Departamento de Nacimiento</label>
                                <input type="text" class="form-control" id="birth_depart" name="birth_depart" placeholder="Departamento de Nacimiento">
                            </div> -->
                            <div>
                                <label for="birth_muni">Municipio de Nacimiento</label>
                                <input v-model="students.birth_muni" type="text" class="form-control" id="birth_muni" name="birth_muni" placeholder="Municipio de Nacimiento">
                            </div>
                            <div>
                                <label for="stratum">Estrato Socioeconómico</label>
                                <input v-model="students.stratum" type="number" class="form-control" id="stratum" name="stratum" placeholder="Estrato Socioeconómico">
                            </div>
                            <div>
                                <label for="course">Curso</label>
                                <input v-model="students.course" type="text" class="form-control" id="course" name="course" placeholder="Curso">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  @click="closeModal();" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button @click=save(); type="button" class="btn btn-success">Guardar Cambios</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table align-middle table-striped table-hover rounded">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Tipo de Documento</th>
                        <th scope="col" class="text-center">Número de Documento</th>
                        <th scope="col" class="text-center">Fecha de Expedición Dto</th>
                        <th scope="col" class="text-center">Municipio Exped Dto</th>
                        <th scope="col" class="text-center">Nombres</th>
                        <th scope="col" class="text-center">Primer Apellido</th>
                        <th scope="col" class="text-center">Segundo Apellido</th>
                        <th scope="col" class="text-center">Género</th>
                        <th scope="col" class="text-center">Fecha de Nacimiento</th>
                        <th scope="col" class="text-center">Municipio de Nacimiento</th>
                        <th scope="col" class="text-center">Estrato</th>
                        <th scope="col" class="text-center">Curso</th>

                        <th scope="col" colspan="2" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center align-center" v-for="student in people" :key="student.id">
                        <th scope="row">{{ student.id }}</th>
                        <td>{{ student.document_type }}</td>
                        <td>{{ student.document_number }}</td>
                        <td>{{ student.expedition_date }}</td>
                        <td>{{ student.exped_muni }}</td>
                        <td>{{ student.names }}</td>
                        <td>{{ student.last_name1 }}</td>
                        <td>{{ student.last_name2 }}</td>
                        <td>{{ student.gender }}</td>
                        <td>{{ student.birth_date }}</td>
                        <td>{{ student.birth_muni }}</td>
                        <td>{{ student.stratum }}</td>
                        <td>{{ student.course }}</td>
                        <td>
                            <button @click="update=true; openModal(students);" class="btn btn-warning">Editar</button>
                        </td>
                        <td>
                            <button @click="remove(student.id)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                students: {
                    document_type:'',
                    document_number:'',
                    expedition_date:'',
                    exped_muni:'',
                    names:'',
                    last_name1:'',
                    last_name2:'',
                    gender:'',
                    birth_date:'',
                    birth_muni:'',
                    stratum:'',
                    course:'',

                },
                id:0,
                update: true,
                modal:0,
                titleModal: '',
                people: [],
            }
        },
        methods: {
            async list() {
                const res = await axios.get('students')
                this.people = res.data
            },
            async remove(id) {
                const res = await axios.delete('/students/' +id);
                this.list();
            },
            async save() {
                if (this.update) {
                    const res = await axios.put('/students', +this.id, this.students)
                }else{
                    const res  = await axios.post('/students', this.students);
                }
                this.closeModal();
                this.list();
            },
            openModal(data={}) {
                this.modal=1;
                if (this.update){
                    this.id = data.id,
                    this.titleModal="Modificar Estudiante";
                    this.students.document_type = data.document_type;
                    this.students.document_number = data.document_number;
                    this.students.expedition_date = data.expedition_date;
                    this.students.exped_muni = data.exped_muni;
                    this.students.names = data.names;
                    this.students.last_name1 = data.last_name1;
                    this.students.last_name2 = data.last_name2;
                    this.students.gender = data.gender;
                    this.students.birth_date = data.birth_date;
                    this.students.birth_muni = data.birth_muni;
                    this.students.stratum = data.stratum;
                    this.students.course = data.course;

                }else{
                    this.id = 0,
                    this.titleModal="Crear Estudiante";
                    this.students.document_type = '';
                    this.students.document_number = '';
                    this.students.expedition_date = '';
                    this.students.exped_muni = '';
                    this.students.names = '';
                    this.students.last_name1 = '';
                    this.students.last_name2 = '';
                    this.students.gender = '';
                    this.students.birth_date = '';
                    this.students.birth_muni = '';
                    this.students.stratum = '';
                    this.students.course = '';


                }
            },
            closeModal() {
                this.modal=0;
            },
        },
        created () {
            this.list()
        },
    }
</script>

<style>
    .show{
        display: list-item;
        opacity: 1;
        background: rgba(44, 38, 75, 0.849);
    }
</style>
