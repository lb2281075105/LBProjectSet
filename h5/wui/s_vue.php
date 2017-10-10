<?php include "header.php"?>

<script src="https://unpkg.com/vue"></script>
asdasdasd


<div id="app">

    {{message}}
    {{tel}}
    {{mail}}

    <div><input name="message" v-model="message"></div>
    <div><input name="tel" v-model="tel"></div>
    <div><input name="mail" v-model="mail"></div>


</div>


<script>


    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            tel:'',
            mail: 'Hello Vue!'
        }
    })

</script>

<?php include "footer.php"?>


