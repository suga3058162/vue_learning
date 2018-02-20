<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
        <div v-text="msg | uppercase"></div>
        <div v-text="msg | capitalize"></div>
        <div v-text="price | currency ¥"></div>
        <div>@{{$data | json}}</div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // filters
        var vm = new Vue({
            el: '#myapp',
            data: {
                msg: 'chao',
                price: 3423423
            }
        });
    </script>
</body>
</html>