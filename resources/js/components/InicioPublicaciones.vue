<template>
  <div>
      <categoria-carro></categoria-carro>
        <categoria-cabezal></categoria-cabezal>
        <categoria-furgon></categoria-furgon>
  </div>
</template>

<script>
import CategoriaFurgon from './CategoriaFurgon'
import CategoriaCabezal from './CategoriaCabezal'
import CategoriaCarro from './CategoriaCarro'

export default {
components: {
    CategoriaCarro,
    CategoriaCabezal,
    CategoriaFurgon
}

}
</script>

