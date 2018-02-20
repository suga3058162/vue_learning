<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
    <div v-text="content"></div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        var vm = new Vue({
            el: '#myapp',
            data: {
                // content: 'hello world'
                content: 'たこ焼き食べたい'
            }
        });
    </script>
</body>
</html>