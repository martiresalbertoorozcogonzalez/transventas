<template>
  <div class="container my-5">
    <h2>Cabezales</h2>

    <div class="row">
      <div
        class="col-md-4 mt-4"
        v-for="cabezal in this.cabezales"
        v-bind:key="cabezal.id"
      >
        <div class="card">
          <img class="card-img-top" :src="`storage/${cabezal.imagen_principal}`" alt="card del carro">
            <div class="card-body">
              <h3 class="card-title text-primary font-weight-bold">
                {{ cabezal.titulo }}
              </h3>
              <p class="card-text">{{cabezal.direccion}}</p>

              <p class="card-text">
                  <span class="font-weight-bold">Precio</span>
                  {{cabezal.precio}}
              </p>
              <p class="card-text">
                  <span class="font-weight-bold">Horario</span>
                  {{cabezal.apertura}} - {{cabezal.cierre}}
              </p>

              <router-link :to="{name: 'publicacion', params: {id:cabezal.id}}">
                <p class="btn btn-primary d-block">Ver Cabezal</p>
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
    axios.get("/api/categorias/cabezal")
    .then((respuesta) => {
      this.$store.commit("AGREGAR_CABEZALES", respuesta.data);
    })
  },
  computed: {
      cabezales(){
          return this.$store.state.cabezales;
      }
  }
}
</script>
