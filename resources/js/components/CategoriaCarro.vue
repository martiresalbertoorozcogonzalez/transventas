<template>
  <div class="container my-5">
    <h2>Carros</h2>

    <div class="row">
      <div
        class="col-md-4 mt-4"
        v-for="carro in this.carros"
        v-bind:key="carro.id"
      >
        <div class="card">
          <img class="card-img-top" :src="`storage/${carro.imagen_principal}`" alt="card del carro">
            <div class="card-body">
              <h3 class="card-title text-primary font-weight-bold">
                {{ carro.titulo }}
              </h3>
              <p class="card-text">{{carro.direccion}}</p>

              <p class="card-text">
                  <span class="font-weight-bold">Precio</span>
                  {{carro.precio}}
              </p>
              <p class="card-text">
                  <span class="font-weight-bold">Horario</span>
                  {{carro.apertura}} - {{carro.cierre}}
              </p>

              <router-link :to="{name: 'publicacion', params: {id:carro.id}}">
               <p class="btn btn-primary d-block">Ver Carro</p>
              </router-link>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  mounted() {
    axios.get("/api/categorias/carro")
    .then((respuesta) => {
      this.$store.commit("AGREGAR_CARROS", respuesta.data);
    })
  },
  computed: {
      carros(){
          return this.$store.state.carros;
      }
  }
}
</script>
