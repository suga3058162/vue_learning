<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
        <input type="text" v-model="keyword">
        <ul>
            <li v-repeat="users | filterBy keyword">
                @{{name}} - @{{score}}
            </li>
        </ul>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // filters
        // filterBy
        var vm = new Vue({
            el: '#myapp',
            data: {
                keyword: '',
                users: [
                    {name: 'taguchi', score: 81},
                    {name: 'fkoji', score: 92},
                    {name: 'dotinstall', score: 64}
                ]
            }
        });
    </script>
</body>
</html>