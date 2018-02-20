<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
        <ul>
            <li v-repeat="d1">@{{$value}}</li>
        </ul>
        <ul>
            <li v-repeat="d2">@{{$key}} - @{{$value}}</li>
        </ul>
        <ul>
            <li v-repeat="d3">@{{$index}}: @{{name}} - @{{score}}</li>
        </ul>
        <ul>
            <li v-repeat="5">@{{$index}}</li>
        </ul>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // v-repeat
        var vm = new Vue({
            el: '#myapp',
            data: {
                d1: ['a', 'b'],
                d2: {k1: 'v1', k2: 'v2'},
                d3: [
                    {name: 'taguchi', score: 62},
                    {name: 'fkoji', score: 84}
                ]
            }
        });
    </script>
</body>
</html>