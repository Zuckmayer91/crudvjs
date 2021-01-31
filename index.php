
<?php include("includes/header.php")?>

<div id="appMoviles">
    <div class="container">
      <div class="row">
            <div class="col">
                <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
            </div>
            <div class="col text-right">
               <h5>Stock Total<span class="badge badge-success">{{totalStock}}</span></h5>
            </div>
      </div>
      <div class="row mt-5"></div>
      <div class="col-lg-12">
          <table class="table table-striped">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Stock</th>
                  <th>Acciones</th>
              </tr>               
              </thead>
                <tbody>                   
                    <tr v-for="(movil,indice) of moviles">
                        <td>{{movil.id}}</td>
                        <td>{{movil.marca}}</td>
                        <td>{{movil.modelo}}</td>
                        <td>
                            <div class="col-md-8">
                                <input type="number" v-vmodel.number="movil.stock" class="form-control text-rigth" disabled>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group" roles="group">
                               <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id,
                               movil.marca, movil.modelo, movil.stock)"><i class="fas fa-pencil-alt"></i></button>

                               <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id,
                               movil.marca, movil.modelo, movil.stock)"><i class="fas fa-trash-alt"></i></button>
                            </div>                           
                        </td>
                    </tr>                    
                </tbody>
          </table>
      </div>
    </div>

</div>


<?php include("includes/footer.php")?>
