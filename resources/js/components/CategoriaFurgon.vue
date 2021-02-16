<template>
  <div class="container my-5">
    <h2>Furgones</h2>

    <div class="row">
      <div
        class="col-md-4 mt-4"
        v-for="furgon in this.furgones"
        v-bind:key="furgon.id"
      >
        <div class="card">
          <img class="card-img-top" :src="`storage/${furgon.imagen_principal}`" alt="card del carro">
            <div class="card-body">
              <h3 class="card-title text-primary font-weight-bold">
                {{ furgon.titulo }}
              </h3>
              <p class="card-text">{{furgon.direccion}}</p>

              <p class="card-text">
                  <span class="font-weight-bold">Precio</span>
                  {{furgon.precio}}
              </p>
              <p class="card-text">
                  <span class="font-weight-bold">Horario</span>
                  {{furgon.apertura}} - {{furgon.cierre}}
              </p>

              <router-link :to="{name: 'publicacion', params: {id:furgon.id}}">
               <p class="btn btn-primary d-block">Ver Furgon</p>
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
    axios.get("/api/categorias/furgon")
    .then((respuesta) => {
      this.$store.commit("AGREGAR_FURGONES", respuesta.data);
    })
  },
  computed: {
      furgones(){
          return this.$store.state.furgones;
      }
  }
}
</script>
