<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
        <div v-if="content">
            @{{content}}
        </div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // v-show
        // v-if
        var vm = new Vue({
            el: '#myapp',
            data: {
                content: 'このやろう',
                showContent: false
            }
        });
    </script>
</body>
</html>