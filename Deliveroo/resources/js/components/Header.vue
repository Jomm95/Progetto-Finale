<template>
    <div class="container border-2 rounded bg-dark">
        <div class="row">
            <div class="col-10 offset-1">
                <nav class="py-2">
                    <ul class="nav justify-content-center">
                        <li v-for="(link, index) in navLinks" :key="index" class="nav-item">
                            <router-link class="  text-white nav-link" aria-current="page" :to="{name: link.to}">{{ link.name }}</router-link>
                        </li>
                        <li>
                            <a class="nav-link" href="/admin">Accedi o Registrati</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            navLinks: [
                {
                    to : 'home',
                    name : 'Home',
                },
                {
                    to : 'checkout',
                    name : 'Carrello',
                },
                {
                    to : 'contacts',
                    name : 'Contattaci',
                },
            ]
        }
    },
}
</script>

<style>

</style>