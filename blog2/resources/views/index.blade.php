<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue CRUD Application</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<script src="https://unpkg.com/vue"></script>

<div id="app-2">
  <span v-bind:title="message">
    Наведи курсор на меня пару секунд,
    чтобы увидеть динамически связанное значение title!
  </span>
</div>
<div id="app-3">
    <span v-if="seen">Сейчас меня видно</span>
</div>
<div id="app-6">
    <p> @{{message}}</p>
</div>

<div id="example-2">
    <!-- `greet` — это название метода, определённого ниже -->
    <button v-on:click="greet">Поприветствовать</button>
</div>

<script>

    var app6 = new Vue({
        el: '#app-6',
        data: {
            message: 'Привет, Vue!'
        }
    })

    //кнопка
    var example2 = new Vue({
        el: '#example-2',
        data: {
            name: 'name'
        },
        // определяйте методы в объекте `methods`
        methods: {
            greet: function (event) {
                console.log('tes');
                this.data_list = "Loading...."
                var app = this
                this.axios.get('http://127.0.0.1/getTest')
                    .then(function (response) {
                       // app.data_list = response.data[0]
                        console.log(data)
                    })
                    .catch(function (error) {
                        app.data_list = "An error occurred. "+error+" / Error ststus: "+error.response
                    })

            }
        },
        created(){

        }
    })

    // вызывать методы можно и императивно
    example2.greet() // => 'Привет, Vue.js!'
</script>

<script src="{{ asset('js/script.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>